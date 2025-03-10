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
                    ->label('kode Kandang')
                    ->placeholder('Kode ')
                    ->disabled(),
                Forms\Components\TextInput::make('nama_kandang')
                    ->label('Nama Kandang')
                    ->placeholder('Masukkan nama kandang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('peternakan_id')
                    ->label('Peternakan')
                    ->placeholder('Pilih peternakan')
                    ->options(
                        \App\Models\Peternakan::all()->pluck('nama_peternakan', 'id')->toArray()
                    )
                    ->required(),
                Forms\Components\Select::make('jenis_kelinci_id')
                    ->label('Jenis Kelinci')
                    ->placeholder('Pilih jenis kelinci')
                    ->options(
                        \App\Models\JenisKelinci::all()->pluck('nama_jenis', 'id')->toArray()
                    )
                    ->required(),
                Forms\Components\TextInput::make('Kapasitas')
                    ->label('Kapasitas')
                    ->placeholder('Masukkan kapasitas kandang')
                    ->required(),
                Forms\Components\Select::make('status_kandang')
                    ->label('Status Kandang')
                    ->placeholder('Pilih status kandang')
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
            'index' => Pages\ListKandangs::route('/'),
            'create' => Pages\CreateKandang::route('/create'),
            'edit' => Pages\EditKandang::route('/{record}/edit'),
        ];
    }
}
