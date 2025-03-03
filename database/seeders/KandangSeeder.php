<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kandang;

class KandangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kandang::factory()->count(50)->create();
    }
}
