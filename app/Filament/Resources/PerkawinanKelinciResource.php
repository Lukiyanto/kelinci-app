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
                    ->placeholder('Pilih Induk Betina')
                    ->relationship('indukBetina', 'kode_induk'),
                Forms\Components\Select::make('induk_jantan_id')
                    ->label('Induk Jantan')
                    ->placeholder('Pilih Induk Jantan')
                    ->relationship('indukJantan', 'kode_induk'),
                Forms\Components\DatePicker::make('tanggal_kawin')
                    ->label('Tanggal Kawin'),
                Forms\Components\DatePicker::make('tanggal_melahirkan')
                    ->label('Tanggal Melahirkan'),
                Forms\Components\Select::make('status')
                    ->label('Status Perkawinan')
                    ->placeholder('Pilih Status Perkawinan')
                    ->options([
                        'belum kawin' => 'Belum Kawin',
                        'menunggu' => 'Menunggu',
                        'berhasil' => 'Berhasil',
                        'gagal' => 'Gagal',
                    ]),
                Forms\Components\TextInput::make('jumlah_anak')
                    ->label('Jumlah Anak')
                    ->placeholder('Jumlah anak yang dilahirkan'),
                Forms\Components\TextInput::make('jumlah_anak_hidup')
                    ->label('Jumlah Anak Hidup')
                    ->placeholder('Jumlah anak yang hidup'),
                    Forms\Components\TextInput::make('jumlah_anak_mati')
                    ->label('Jumlah Anak Mati')
                    ->placeholder('Jumlah anak yang mati (jika ada)'),
                Forms\Components\Textarea::make('catatan')
                    ->label('Catatan')
                    ->placeholder('Tambahkan catatan jika perlu')
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
