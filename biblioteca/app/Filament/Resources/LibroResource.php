<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LibroResource\Pages;
use App\Filament\Resources\LibroResource\RelationManagers;
use App\Models\Libro;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\DatePicker;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LibroResource extends Resource
{
    protected static ?string $model = Libro::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('titulo'),

                Forms\Components\TextInput::make('isbn'),

                Forms\Components\Select::make('autor_id')
                    ->label('Autor')
                    ->relationship('autor', 'name')
                    ->searchable()
                    ->preload()
                    ->optionsLimit(5),

                Forms\Components\Select::make('editorial_id')
                    ->label('Editorial')
                    ->relationship('editorial', 'name')
                    ->searchable()
                    ->preload()
                    ->optionsLimit(5),

                Forms\Components\Select::make('genero_id')
                    ->label('Genero')
                    ->relationship('genero', 'gender_name')
                    ->searchable()
                    ->preload()
                    ->optionsLimit(5),
                    
                Forms\Components\DatePicker::make('anio_de_publicacion')
                    ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titulo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('isbn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('autor.name')
                    ->label('Author')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('editorial.name')
                    ->label('Editorial')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('genero.gender_name')
                    ->label('Genero')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('anio_de_publicacion')
                ->label('Año de publicación')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
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
            'index' => Pages\ListLibros::route('/'),
            'create' => Pages\CreateLibro::route('/create'),
            'edit' => Pages\EditLibro::route('/{record}/edit'),
        ];
    }
}
