<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anakan;

class AnakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anakan::create([
            'budidaya_id' => 1,
            'kode_anakan' => 'ANAK001',
            'jenis_kelamin' => 'Jantan',
            'warna' => 'Hitam Putih',
            'tanggal_lahir' => Now(),
            'status' => 'Tersedia'
        ]);
    }
}
