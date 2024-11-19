<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\History;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\HistoryResource\Pages;

class HistoryResource extends Resource
{
    protected static ?string $model = History::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?int $navigationSort = 4; // Semakin kecil angkanya, semakin atas

    protected static ?string $navigationGroup = 'Kuisioner';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Hidden input untuk user_id
                Hidden::make('user_id')->default(auth()->user()->id),

                // Input untuk spesifikasi
                TextInput::make('spesifikasi')
                    ->required()
                    ->maxLength(255),

                // File upload untuk image
                FileUpload::make('image')
                    ->image()
                    ->required()
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif']), // Bisa ditambahkan jenis file jika perlu

                // Input untuk price
                TextInput::make('price')
                    ->required()
                    ->maxLength(255),

                // Input untuk link
                TextInput::make('link')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('spesifikasi')
                    ->searchable(),

                ImageColumn::make('image'),

                TextColumn::make('price')
                    ->searchable(),

                TextColumn::make('link')
                    ->searchable(),
            ])
            ->filters([
                // Filter jika diperlukan
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
            // Relations jika ada
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHistories::route('/'),
            'create' => Pages\CreateHistory::route('/create'),
            'edit' => Pages\EditHistory::route('/{record}/edit'),
        ];
    }
}
