<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnakKelinciResource\Pages;
use App\Filament\Resources\AnakKelinciResource\RelationManagers;
use App\Models\AnakKelinci;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnakKelinciResource extends Resource
{
    protected static ?string $model = AnakKelinci::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('perkawinan_id')
                    ->label('Perkawinan')
                    ->relationship('perkawinan', 'id')
                    ->required(),
                Forms\Components\Select::make('jenis_kelinci_id')
                    ->label('Jenis Kelinci')
                    ->relationship('jenisKelinci', 'nama_jenis')
                    ->required(),
                Forms\Components\TextInput::make('kode_anak')
                    ->label('Kode Anak')
                    ->placeholder('Kode anak akan diisi otomatis')
                    ->disabled(), // Ubah menjadi readonly
                Forms\Components\TextInput::make('nama_anak')
                    ->label('Nama Anak')
                    ->placeholder('Masukkan nama anak')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->required(),
                Forms\Components\Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'Betina' => 'Betina',
                        'Jantan' => 'Jantan',
                        '-' => '-',
                    ])
                    ->default('-')
                    ->required(),
                Forms\Components\Select::make('status_anak')
                    ->label('Status Anak')
                    ->options([
                        'Hidup' => 'Hidup',
                        'Mati' => 'Mati',
                    ])
                    ->default('Hidup')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('perkawinan.id')->label('Perkawinan'),
                Tables\Columns\TextColumn::make('jenisKelinci.nama_jenis')->label('Jenis Kelinci'),
                Tables\Columns\TextColumn::make('kode_anak')->label('Kode Anak'),
                Tables\Columns\TextColumn::make('nama_anak')->label('Nama Anak'),
                Tables\Columns\TextColumn::make('tanggal_lahir')->label('Tanggal Lahir'),
                Tables\Columns\TextColumn::make('jenis_kelamin')->label('Jenis Kelamin'),
                Tables\Columns\TextColumn::make('status_anak')->label('Status Anak'),
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
            'index' => Pages\ListAnakKelincis::route('/'),
            'create' => Pages\CreateAnakKelinci::route('/create'),
            'edit' => Pages\EditAnakKelinci::route('/{record}/edit'),
        ];
    }
}
