<?php

namespace Database\Factories;

use App\Models\IndukKelinci;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IndukKelinci>
 */
class IndukKelinciFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = IndukKelinci::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_induk' => $this->faker->unique()->numerify('IND###'),
            'nama_induk' => $this->faker->word,
            'tanggal_lahir' => $this->faker->date,
            'jenis_kelamin' => $this->faker->randomElement(['jantan', 'betina']),
            'catatan' => $this->faker->sentence,
            'jenis_ras_id' => $this->faker->numberBetween(1, 10), // Sesuaikan dengan ID jenis ras yang ada
            'kandang_id' => $this->faker->numberBetween(1, 10), // Sesuaikan dengan ID kandang yang ada
        ];
    }
}
