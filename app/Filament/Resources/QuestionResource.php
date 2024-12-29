<?php

namespace App\Filament\Resources;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables;
use App\Models\Question;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\QuestionCategory;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\QuestionResource\Pages;

class QuestionResource extends Resource
{
    protected static ?string $model = Question::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';
    protected static ?int $navigationSort = 1; // Semakin kecil angkanya, semakin atas

    protected static ?string $navigationGroup = 'Kuisioner';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Input Pertanyaan')
                    ->schema([
                        Select::make('category_id')
                            ->label('Kategori')
                            ->options(
                                QuestionCategory::all()->pluck('nama_kategori', 'id') // Ambil nama sebagai value dan id sebagai key
                            )
                            ->searchable() // Jika ingin membuat dropdown dapat dicari
                            ->required(),

                        Textarea::make('pertanyaan')
                            ->label('Pertanyaan')
                            ->required(),
                    ])->columns(2),

                Section::make('Input Jawaban')->schema([
                    Repeater::make('answers')
                        ->relationship('answer') // Pastikan ini sesuai dengan nama relasi di model Question
                        ->schema([
                            TextInput::make('jawaban')
                                ->label('Jawaban')
                                ->required(),
                            TextInput::make('bobot')
                                ->label('Bobot Jawaban')
                                ->numeric()
                                ->required()
                                ->helperText('Masing - masing bobot untuk jawaban memiliki 
                                nilai 1, 0.75, 0.5, 0.25, dan 0 secara berurutan'),
                        ])
                        ->label('Masukkan List Jawaban')
                        ->required()
                        ->defaultItems(5) // Menampilkan 5 item secara langsung
                        ->minItems(5)     // Membatasi jumlah minimal item menjadi 5
                        ->maxItems(5)     // Membatasi jumlah maksimal item menjadi 5
                        ->disableItemCreation() // Menonaktifkan tombol tambah
                        ->disableItemDeletion()
                        ->columns(2),
                ]),

            ]);
        // ->schema([
        //     Select::make('category_id')
        //         ->label('Kategori Pertanyaan')
        //         ->options(
        //             QuestionCategory::all()->pluck('nama_kategori', 'id') // Ambil nama sebagai value dan id sebagai key
        //         )
        //         ->searchable() // Jika ingin membuat dropdown dapat dicari
        //         ->required(),
        //     TextInput::make('pertanyaan')
        //         ->label('Pertanyaan')
        //         ->required()
        //         ->maxLength(255),
        // ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('questionCategory.nama_kategori')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('pertanyaan')
                    ->searchable(),
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
            'index' => Pages\ListQuestions::route('/'),
            'create' => Pages\CreateQuestion::route('/create'),
            'edit' => Pages\EditQuestion::route('/{record}/edit'),
        ];
    }
}
