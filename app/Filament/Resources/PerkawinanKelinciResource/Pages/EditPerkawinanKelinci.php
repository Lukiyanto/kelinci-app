<?php

namespace App\Filament\Resources\PerkawinanKelinciResource\Pages;

use App\Filament\Resources\PerkawinanKelinciResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPerkawinanKelinci extends EditRecord
{
    protected static string $resource = PerkawinanKelinciResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
