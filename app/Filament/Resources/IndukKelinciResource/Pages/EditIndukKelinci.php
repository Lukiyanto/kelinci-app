<?php

namespace App\Filament\Resources\IndukKelinciResource\Pages;

use App\Filament\Resources\IndukKelinciResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIndukKelinci extends EditRecord
{
    protected static string $resource = IndukKelinciResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
