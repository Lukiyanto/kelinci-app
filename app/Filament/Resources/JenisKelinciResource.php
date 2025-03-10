<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisKelinciResource\Pages;
use App\Filament\Resources\JenisKelinciResource\RelationManagers;
use App\Models\JenisKelinci;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JenisKelinciResource extends Resource
{
    protected static ?string $model = JenisKelinci::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Jenis Kelinci')
                    ->placeholder('Masukkan nama jenis kelinci')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->placeholder('Masukkan deskripsi jenis kelinci')
                    ->required(),
                Forms\Components\TextInput::make('harga_jual')
                    ->label('Harga Jual')
                    ->placeholder('Masukkan harga jual')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListJenisKelincis::route('/'),
            'create' => Pages\CreateJenisKelinci::route('/create'),
            'edit' => Pages\EditJenisKelinci::route('/{record}/edit'),
        ];
    }
}
