<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PerkawinanKelinciResource\Pages;
use App\Models\PerkawinanKelinci;
use App\Models\IndukKelinci;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

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
                    ->options(
                        IndukKelinci::where('kode_induk', 'like', 'IKB%')
                            ->whereNotIn('status_kawin', ['Sedang Hamil', 'Sedang Kawin', 'Pasca Melahirkan'])
                            ->pluck('kode_induk', 'id')
                            ->toArray()
                    )
                    ->default(function () {
                        return IndukKelinci::where('kode_induk', 'like', 'IKB%')
                            ->whereNotIn('status_kawin', ['Sedang Hamil', 'Sedang Kawin', 'Pasca Melahirkan'])
                            ->first()->id ?? null;
                    })
                    ->required(),
                Forms\Components\Select::make('induk_jantan_id')
                    ->label('Induk Jantan')
                    ->placeholder('Pilih Induk Jantan')
                    ->options(
                        IndukKelinci::where('kode_induk', 'like', 'IKJ%')->pluck('kode_induk', 'id')->toArray()
                    )
                    ->default(function () {
                        return IndukKelinci::where('kode_induk', 'like', 'IKJ%')->first()->id ?? null;
                    })
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_kawin')
                    ->label('Tanggal Kawin')
                    ->default(Carbon::now())
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_melahirkan')
                    ->label('Tanggal Melahirkan')
                    ->default(Carbon::now()->addDays(30))
                    ->disabled(),
                Forms\Components\Select::make('status')
                    ->label('Status Perkawinan')
                    ->placeholder('Pilih Status Perkawinan')
                    ->options([
                        'Belum Kawin' => 'Belum Kawin',
                        'Siap Kawin' => 'Siap Kawin',
                        'Sudah Kawin' => 'Sudah Kawin',
                        'Sedang Hamil' => 'Sedang Hamil',
                        'Melahirkan' => 'Melahirkan',
                        'Pasca Melahirkan' => 'Pasca Melahirkan',
                        'Menunggu' => 'Menunggu',
                        'Berhasil' => 'Berhasil',
                        'Gagal' => 'Gagal',
                    ])
                    ->default('Sedang Hamil')
                    ->required(),
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
