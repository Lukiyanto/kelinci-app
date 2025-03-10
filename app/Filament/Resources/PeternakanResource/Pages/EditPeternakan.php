<?php

namespace App\Filament\Resources\PeternakanResource\Pages;

use App\Filament\Resources\PeternakanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPeternakan extends EditRecord
{
    protected static string $resource = PeternakanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
