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
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_jenis' => $this->faker->word,
            'deskripsi' => $this->faker->sentence,
            'harga_jual' => $this->faker->numberBetween(30000, 40000),
        ];
    }
}
