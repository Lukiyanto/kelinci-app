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
                Forms\Components\TextInput::make('nama_jenis')
                    ->placeholder('Masukkan nama jenis kelinci')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsi')
                    ->placeholder('Masukkan deskripsi jenis kelinci'),
                Forms\Components\TextInput::make('harga_jual')
                    ->placeholder('Masukkan harga jual')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_jenis')->label('Nama Jenis'),
                Tables\Columns\TextColumn::make('deskripsi')->label('Deskripsi'),
                Tables\Columns\TextColumn::make('harga_jual')->label('Harga Jual'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
