<?php

namespace Database\Factories;

use App\Models\DetailPenjualan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailPenjualan>
 */
class DetailPenjualanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DetailPenjualan::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'penjualan_id' => $this->faker->numberBetween(1, 10), // Sesuaikan dengan ID penjualan yang ada
            'anak_kelinci_id' => $this->faker->numberBetween(1, 10), // Sesuaikan dengan ID anak kelinci yang ada
            'harga_jual' => $this->faker->numberBetween(100000, 1000000),
            'catatan' => $this->faker->sentence,
        ];
    }
}
