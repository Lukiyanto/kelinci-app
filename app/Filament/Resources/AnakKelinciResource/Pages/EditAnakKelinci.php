<?php

namespace App\Filament\Resources\AnakKelinciResource\Pages;

use App\Filament\Resources\AnakKelinciResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnakKelinci extends EditRecord
{
    protected static string $resource = AnakKelinciResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
