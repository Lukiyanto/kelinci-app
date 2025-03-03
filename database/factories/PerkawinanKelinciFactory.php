<?php

namespace Database\Factories;

use App\Models\PerkawinanKelinci;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PerkawinanKelinci>
 */
class PerkawinanKelinciFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     * @var string
     */
    protected $model = PerkawinanKelinci::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'induk_betina_id' => $this->faker->numberBetween(1, 10), // Sesuaikan dengan ID induk betina yang ada
            'induk_jantan_id' => $this->faker->numberBetween(1, 10), // Sesuaikan dengan ID induk jantan yang ada
            'tanggal_kawin' => $this->faker->date,
            'tanggal_melahirkan' => $this->faker->date,
            'status' => $this->faker->randomElement(['berhasil', 'gagal']),
            'jumlah_anak' => $this->faker->numberBetween(1, 10),
            'jumlah_anak_hidup' => $this->faker->numberBetween(1, 10),
            'jumlah_anak_mati' => $this->faker->numberBetween(0, 5),
            'catatan' => $this->faker->sentence,
        ];
    }
}
