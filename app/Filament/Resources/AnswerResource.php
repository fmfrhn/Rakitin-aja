<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Answer;
use App\Models\Question;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\QuestionCategory;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\AnswerResource\Pages;

class AnswerResource extends Resource
{
    protected static ?string $model = Answer::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?int $navigationSort = 2; // Semakin kecil angkanya, semakin atas

    protected static ?string $navigationGroup = 'Kuisioner';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_id')
                    ->label('Kategori')
                    ->options(fn() => QuestionCategory::pluck('nama_kategori', 'id')->toArray())
                    ->reactive() // Menjadikan kategori_id reaktif
                    ->required()
                    ->nullable(),  // Menandakan bahwa kategori_id ini bisa kosong dan tidak harus dipilih

                Select::make('question_id')
                    ->label('Pertanyaan')
                    ->options(function (callable $get) {
                        // Ambil kategori_id yang dipilih
                        $kategoriId = $get('category_id');

                        // Jika category_id tidak dipilih, kembalikan opsi kosong
                        if (!$kategoriId) {
                            return [];
                        }

                        // Ambil pertanyaan berdasarkan category_id yang dipilih
                        return Question::where('category_id', $kategoriId)
                            ->pluck('pertanyaan', 'id');
                    })
                    ->required() // Anda bisa membuatnya wajib dipilih atau tidak
                    ->reactive(),

                // Repeater untuk Jawaban dan Bobot
                Repeater::make('answers')
                    ->label('Jawaban dan Bobot')
                    ->schema([
                        TextInput::make('jawaban')
                            ->label('Jawaban')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('bobot')
                            ->label('Bobot')
                            ->required()
                            ->numeric()
                            ->rules(['between:0,1']) // Validasi bobot antara 0 hingga 1
                            ->helperText('Bobot harus antara 0 dan 1, misalnya 0.25, 0.5, 0.75 untuk tiap jawaban. 
                            jawaban memiliki konsep seperti yakin,cukup yakin,tidak cukup yakin, tidak')
                            ->afterStateUpdated(function (callable $set, $state) {
                                if ($state < 0 || $state > 1) {
                                    $set('bobot', null); // Reset bobot jika tidak valid
                                }
                            }),
                    ])
                    ->columns(2) // Set dua kolom untuk jawaban dan bobot
                    ->createItemButtonLabel('Tambah Jawaban')
                    ->defaultItems(1), // Menentukan jumlah default item dalam repeater
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kuisioner_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('jawaban')
                    ->searchable(),
                TextColumn::make('bobot')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnswers::route('/'),
            'create' => Pages\CreateAnswer::route('/create'),
            'edit' => Pages\EditAnswer::route('/{record}/edit'),
        ];
    }
}
