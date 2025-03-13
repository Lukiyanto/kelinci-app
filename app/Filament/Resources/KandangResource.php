<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KandangResource\Pages;
use App\Filament\Resources\KandangResource\RelationManagers;
use App\Models\Kandang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KandangResource extends Resource
{
    protected static ?string $model = Kandang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_kandang')
                    ->label('Kode Kandang')
                    ->placeholder('Kode KDG###')
                    ->required(),
                Forms\Components\TextInput::make('kapasitas')
                    ->label('Kapasitas')
                    ->placeholder('Masukkan kapasitas kandang')
                    ->required(),
                Forms\Components\TextInput::make('lokasi_kandang')
                    ->label('Lokasi Kandang')
                    ->placeholder('Masukkan Lokasi Kandang')
                    ->required(),
                Forms\Components\Select::make('status_kandang')
                    ->label('Status Kandang')
                    ->placeholder('Pilih Status Kandang')
                    ->options([
                        'Tersedia' => 'Tersedia',
                        'Terisi' => 'Terisi',
                        'Perlu Perbaikan' => 'Perlu Perbaikan',
                        'Rusak' => 'Rusak',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_kandang')->label('Kode Kandang'),
                Tables\Columns\TextColumn::make('lokasi')->label('Lokasi'),
                Tables\Columns\TextColumn::make('kapasitas')->label('Kapasitas'),
                Tables\Columns\TextColumn::make('status_kandang')->label('Status Kandang'),
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
            'index' => Pages\ListKandangs::route('/'),
            'create' => Pages\CreateKandang::route('/create'),
            'edit' => Pages\EditKandang::route('/{record}/edit'),
        ];
    }
}
