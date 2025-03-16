<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IndukKelinciResource\Pages;
use App\Filament\Resources\IndukKelinciResource\RelationManagers;
use App\Models\IndukKelinci;
use App\Models\JenisKelinci;
use App\Models\Kandang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Radio;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IndukKelinciResource extends Resource
{
    protected static ?string $model = IndukKelinci::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Radio::make('jenis_kelinci_id')
                    ->label('Jenis Kelinci')
                    ->options(
                        JenisKelinci::all()->pluck('nama_jenis', 'id')->toArray()
                    )
                    ->default(JenisKelinci::where('nama_jenis', 'Dutch')->first()->id)
                    ->required(),
                Forms\Components\Select::make('kandang_id')
                    ->label('Kandang')
                    ->placeholder('Pilih kandang')
                    ->options(
                        Kandang::where('status_kandang', 'Tersedia')->pluck('kode_kandang', 'id')->toArray()
                    )
                    ->default(function () {
                        return Kandang::where('status_kandang', 'Tersedia')->first()->id;
                    })
                    ->required(),
                Forms\Components\TextInput::make('kode_induk')
                    ->label('Kode Induk')
                    ->placeholder('Kode induk akan diisi otomatis')
                    ->disabled(), // Ubah menjadi readonly
                Forms\Components\TextInput::make('nama_induk')
                    ->label('Nama Induk')
                    ->placeholder('Masukkan nama induk')
                    ->maxLength(255),
                Forms\Components\Datepicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->placeholder('Pilih tanggal lahir'),
                Radio::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'Betina' => 'Betina',
                        'Jantan' => 'Jantan',
                    ])
                    ->default('Betina')
                    ->required(),
                Forms\Components\Select::make('status_kawin')
                    ->label('Status kawin')
                    ->placeholder('Pilih status kawin')
                    ->options([
                        'Belum Kawin' => 'Belum Kawin',
                        'Siap Kawin' => 'Siap Kawin',
                        'Sedang Kawin' => 'Sedang Kawin',
                        'Sedang Hamil' => 'Sedang Hamil',
                        'Pasca Melahirkan' => 'Pasca Melahirkan',
                    ])
                    ->default('Belum Kawin')
                    ->required(),
                Forms\Components\Textarea::make('catatan')
                    ->label('Catatan')
                    ->placeholder('Masukkan catatan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_induk')->label('Kode Induk'),
                Tables\Columns\TextColumn::make('nama_induk')->label('Nama Induk'),
                Tables\Columns\TextColumn::make('tanggal_lahir')->label('Tanggal Lahir'),
                Tables\Columns\TextColumn::make('jenis_kelamin')->label('Jenis Kelamin'),
                Tables\Columns\TextColumn::make('jenisKelinci.nama_jenis')->label('Jenis Kelinci'),
                Tables\Columns\TextColumn::make('kandang.kode_kandang')->label('Kandang'),
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
            'index' => Pages\ListIndukKelincis::route('/'),
            'create' => Pages\CreateIndukKelinci::route('/create'),
            'edit' => Pages\EditIndukKelinci::route('/{record}/edit'),
        ];
    }
}
