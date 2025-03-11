<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenjualanResource\Pages;
use App\Filament\Resources\PenjualanResource\RelationManagers;
use App\Models\Penjualan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenjualanResource extends Resource
{
    protected static ?string $model = Penjualan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_transaksi')
                    ->label('Nomor Transaksi')
                    ->placeholder('Nomor transaksi akan diisi otomatis')
                    ->disabled(), // Ubah menjadi readonly
                Forms\Components\DatePicker::make('tanggal_transaksi')
                    ->label('Tanggal Transaksi')
                    ->required(),
                Forms\Components\TextInput::make('total_harga')
                    ->label('Total Harga')
                    ->required(),
                Forms\Components\TextInput::make('nama_pembeli')
                    ->label('Nama Pembeli')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telepon_pembeli')
                    ->label('Telepon Pembeli')
                    ->required()
                    ->maxLength(15),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_transaksi')->label('Nomor Transaksi'),
                Tables\Columns\TextColumn::make('tanggal_transaksi')->label('Tanggal Transaksi'),
                Tables\Columns\TextColumn::make('total_harga')->label('Total Harga'),
                Tables\Columns\TextColumn::make('nama_pembeli')->label('Nama Pembeli'),
                Tables\Columns\TextColumn::make('telepon_pembeli')->label('Telepon Pembeli'),
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
            'index' => Pages\ListPenjualans::route('/'),
            'create' => Pages\CreatePenjualan::route('/create'),
            'edit' => Pages\EditPenjualan::route('/{record}/edit'),
        ];
    }
}
