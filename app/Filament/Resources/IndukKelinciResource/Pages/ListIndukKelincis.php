<?php

namespace App\Filament\Resources\IndukKelinciResource\Pages;

use App\Filament\Resources\IndukKelinciResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIndukKelincis extends ListRecords
{
    protected static string $resource = IndukKelinciResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
