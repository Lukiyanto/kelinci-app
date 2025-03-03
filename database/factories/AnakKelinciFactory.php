<?php

namespace Database\Factories;

use App\Models\AnakKelinci;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AnakKelinci>
 */
class AnakKelinciFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AnakKelinci::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_anak' => $this->faker->unique()->numerify('ANK###'),
            'nama_anak' => $this->faker->word,
            'tanggal_lahir' => $this->faker->date,
            'jenis_kelamin' => $this->faker->randomElement(['jantan', 'betina']),
            'status_anak' => $this->faker->randomElement(['hidup', 'mati']),
            'perkawinan_id' => $this->faker->numberBetween(1, 10), // Sesuaikan dengan ID perkawinan yang ada
            'jenis_ras_id' => $this->faker->numberBetween(1, 10), // Sesuaikan dengan ID jenis ras yang ada
        ];
    }
}
