<?php

namespace App\Filament\Resources\PerkawinanKelinciResource\Pages;

use App\Filament\Resources\PerkawinanKelinciResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPerkawinanKelincis extends ListRecords
{
    protected static string $resource = PerkawinanKelinciResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
