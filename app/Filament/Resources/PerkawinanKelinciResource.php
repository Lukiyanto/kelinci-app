<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PerkawinanKelinciResource\Pages;
use App\Filament\Resources\PerkawinanKelinciResource\RelationManagers;
use App\Models\PerkawinanKelinci;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PerkawinanKelinciResource extends Resource
{
    protected static ?string $model = PerkawinanKelinci::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('induk_betina_id')
                    ->label('Induk Betina')
                    ->relationship('indukBetina', 'nama_induk')
                    ->required(),
                Forms\Components\Select::make('induk_jantan_id')
                    ->label('Induk Jantan')
                    ->relationship('indukJantan', 'nama_induk')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_kawin')
                    ->label('Tanggal Kawin')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_melahirkan')
                    ->label('Tanggal Melahirkan')
                    ->required(),
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'Berhasil' => 'Berhasil',
                        'Gagal' => 'Gagal',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('jumlah_anak')
                    ->label('Jumlah Anak')
                    ->required(),
                Forms\Components\TextInput::make('jumlah_anak_hidup')
                    ->label('Jumlah Anak Hidup')
                    ->required(),
                Forms\Components\TextInput::make('jumlah_anak_mati')
                    ->label('Jumlah Anak Mati')
                    ->required(),
                Forms\Components\Textarea::make('catatan')
                    ->label('Catatan')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('indukBetina.nama_induk')->label('Induk Betina'),
                Tables\Columns\TextColumn::make('indukJantan.nama_induk')->label('Induk Jantan'),
                Tables\Columns\TextColumn::make('tanggal_kawin')->label('Tanggal Kawin'),
                Tables\Columns\TextColumn::make('tanggal_melahirkan')->label('Tanggal Melahirkan'),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('jumlah_anak')->label('Jumlah Anak'),
                Tables\Columns\TextColumn::make('jumlah_anak_hidup')->label('Jumlah Anak Hidup'),
                Tables\Columns\TextColumn::make('jumlah_anak_mati')->label('Jumlah Anak Mati'),
                Tables\Columns\TextColumn::make('catatan')->label('Catatan'),
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
            'index' => Pages\ListPerkawinanKelincis::route('/'),
            'create' => Pages\CreatePerkawinanKelinci::route('/create'),
            'edit' => Pages\EditPerkawinanKelinci::route('/{record}/edit'),
        ];
    }
}
