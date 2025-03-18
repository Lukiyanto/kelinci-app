<?php

namespace Database\Factories;

use App\Models\JenisKelinci;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JenisKelinci>
 */
class JenisKelinciFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JenisKelinci::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nama_jenis = 'Dutch';

        return [
            'nama_jenis' => $nama_jenis,
            'deskripsi' => "Ras $nama_jenis",
            'harga_jual' => 30000,
        ];
    }
}
