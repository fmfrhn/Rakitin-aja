<?php

namespace App\Filament\Resources;

use App\Statics\TipeSpesifikasiStatic;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Recommendation;
use App\Models\QuestionCategory;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\RecommendationResource\Pages;

class RecommendationResource extends Resource
{
    protected static ?string $model = Recommendation::class;

    protected static ?string $navigationIcon = 'heroicon-o-gift-top';
    protected static ?int $navigationSort = 3; // Semakin kecil angkanya, semakin atas

    protected static ?string $navigationGroup = 'Kuisioner';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_id')
                    ->label('Kategori')
                    ->options(fn() => QuestionCategory::pluck('nama_kategori', 'id')->toArray()),
                Select::make('category_id')
                    ->label('Kategori')
                    ->options(fn() => TipeSpesifikasiStatic::options()),
                TextInput::make('spesifikasi')
                    ->required()
                    ->maxLength(255),
                TextInput::make('link')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('image')
                    ->image()
                    ->required(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('ID'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('category_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tipe_spesifikasi')
                    ->searchable(),
                TextColumn::make('spesifikasi')
                    ->searchable(),
                TextColumn::make('link')
                    ->searchable(),
                ImageColumn::make('image'),
                TextColumn::make('price')
                    ->money()
                    ->sortable(),
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
            'index' => Pages\ListRecommendations::route('/'),
            'create' => Pages\CreateRecommendation::route('/create'),
            'edit' => Pages\EditRecommendation::route('/{record}/edit'),
        ];
    }
}
