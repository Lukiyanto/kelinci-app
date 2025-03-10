<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeternakanResource\Pages;
use App\Filament\Resources\PeternakanResource\RelationManagers;
use App\Models\Peternakan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeternakanResource extends Resource
{
    protected static ?string $model = Peternakan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_peternakan')
                    ->label('Nama Peternakan')
                    ->placeholder('Masukkan nama peternakan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('alamat_peternakan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telepon')
                    ->required()
                    ->maxLength(255),
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
            'index' => Pages\ListPeternakans::route('/'),
            'create' => Pages\CreatePeternakan::route('/create'),
            'edit' => Pages\EditPeternakan::route('/{record}/edit'),
        ];
    }
}
