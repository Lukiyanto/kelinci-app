<?php

namespace Database\Factories;

use App\Models\Kandang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kandang>
 */
class KandangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kandang::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $number = 1;
        $kode_kandang = 'KDG' . str_pad($number, 3, '0', STR_PAD_LEFT);

        $locations = range('A', 'Z');
        $location_index = intdiv($number - 1, 5) % count($locations);
        $lokasi_kandang = 'Lokasi ' . $locations[$location_index];
        $number++;

        return [
            'kode_kandang' => $kode_kandang,
            'lokasi_kandang' => $lokasi_kandang,
            'kapasitas' => 1,
            'status_kandang' => 'Tersedia',
        ];
    }
}
