<?php

namespace App\Filament\Resources\AnakKelinciResource\Pages;

use App\Filament\Resources\AnakKelinciResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnakKelincis extends ListRecords
{
    protected static string $resource = AnakKelinciResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
