<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IndukKelinciResource\Pages;
use App\Filament\Resources\IndukKelinciResource\RelationManagers;
use App\Models\IndukKelinci;
use Filament\Forms;
use Filament\Forms\Form;
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
                Forms\Components\Select::make('jenis_kelinci_id')
                    ->label('Jenis Kelinci')
                    ->placeholder('Pilih jenis kelinci')
                    ->options(
                        \App\Models\JenisKelinci::all()->pluck('nama_jenis', 'id')->toArray()
                    )
                    ->required(),
                Forms\Components\TextInput::make('kode_induk')
                    ->label('Kode Induk')
                    ->placeholder('Masukkan kode induk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_induk')
                    ->label('Nama Induk')
                    ->placeholder('Masukkan nama induk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Datepicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->placeholder('Pilih tanggal lahir')
                    ->required(),
                Forms\Components\Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->placeholder('Pilih jenis kelamin')
                    ->options([
                        'Jantan' => 'Jantan',
                        'Betina' => 'Betina',
                    ])
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
            'index' => Pages\ListIndukKelincis::route('/'),
            'create' => Pages\CreateIndukKelinci::route('/create'),
            'edit' => Pages\EditIndukKelinci::route('/{record}/edit'),
        ];
    }
}
