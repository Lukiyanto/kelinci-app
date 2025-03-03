<?php

namespace Database\Factories;

use App\Models\Kandang;
use App\Models\Peternakan;
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
        return [
            'kode_kandang' => $this->faker->unique()->numerify('KDG###'),
            'nama_kandang' => $this->faker->word,
            'jenis_kandang' => $this->faker->word,
            'lokasi' => $this->faker->address,
            'kapasitas' => $this->faker->numberBetween(1, 10),
            'status_kandang' => $this->faker->randomElement(['tersedia', 'terisi', 'perbaikan', 'rusak']),
            'peternakan_id' => Peternakan::inRandomOrder()->first()->id,
        ];
    }
}
