<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KandangResource\Pages;
use App\Filament\Resources\KandangResource\RelationManagers;
use App\Models\Kandang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Radio;
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
                Radio::make('jumlah_kandang')
                    ->label('Jumlah Kandang')
                    ->options([
                        0 => '+1',
                        4 => '+5',
                        9 => '+10',
                    ])
                    ->default(0)
                    ->required()
                    ->visible(fn ($livewire) => $livewire instanceof Pages\CreateKandang),
                Forms\Components\TextInput::make('kode_kandang')
                    ->label('Kode Kandang')
                    ->placeholder('Kode kandang akan diisi otomatis')
                    ->disabled(),
                Forms\Components\TextInput::make('kapasitas')
                    ->label('Kapasitas')
                    ->placeholder('Masukkan kapasitas kandang')
                    ->numeric()
                    ->default(1)
                    ->required(),
                Forms\Components\TextInput::make('lokasi_kandang')
                    ->label('Lokasi Kandang')
                    ->placeholder('Masukkan Lokasi Kandang'),
                Forms\Components\Select::make('status_kandang')
                    ->label('Status Kandang')
                    ->placeholder('Pilih Status Kandang')
                    ->options([
                        'Tersedia' => 'Tersedia',
                        'Terisi' => 'Terisi',
                        'Perlu Perbaikan' => 'Perlu Perbaikan',
                        'Rusak' => 'Rusak',
                    ])
                    ->default('Tersedia')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_kandang')->label('Kode Kandang'),
                Tables\Columns\TextColumn::make('lokasi_kandang')->label('Lokasi Kandang'),
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
            'index' => Pages\ListKandangs::route('/'),
            'create' => Pages\CreateKandang::route('/create'),
            'edit' => Pages\EditKandang::route('/{record}/edit'),
        ];
    }
}
