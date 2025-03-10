<?php

namespace App\Filament\Resources\JenisKelinciResource\Pages;

use App\Filament\Resources\JenisKelinciResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisKelincis extends ListRecords
{
    protected static string $resource = JenisKelinciResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
