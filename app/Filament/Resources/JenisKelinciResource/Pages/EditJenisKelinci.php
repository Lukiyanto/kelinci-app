<?php

namespace App\Filament\Resources\JenisKelinciResource\Pages;

use App\Filament\Resources\JenisKelinciResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisKelinci extends EditRecord
{
    protected static string $resource = JenisKelinciResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
