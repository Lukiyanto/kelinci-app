<?php

namespace App\Filament\Resources\KandangResource\Pages;

use App\Filament\Resources\KandangResource;
use App\Models\Kandang;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\DB;

class CreateKandang extends CreateRecord
{
    protected static string $resource = KandangResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $jumlahKandang = $data['jumlah_kandang'];
        unset($data['jumlah_kandang']);

        DB::transaction(function () use ($data, $jumlahKandang) {
            for ($i = 0; $i < $jumlahKandang; $i++) {
                $latestKandang = Kandang::latest('id')->first();
                $nextNumber = $latestKandang ? ((int) substr($latestKandang->kode_kandang, 3)) + $i + 1 : $i + 1;
                $data['kode_kandang'] = 'KDG' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);
                Kandang::create($data);
            }
        });

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
