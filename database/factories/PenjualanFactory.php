<?php

namespace Database\Factories;

use App\Models\Penjualan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penjualan>
 */
class PenjualanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penjualan::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nomor_transaksi' => $this->faker->unique()->numerify('TRX###'),
            'tanggal_transaksi' => $this->faker->date,
            'total_harga' => $this->faker->numberBetween(100000, 1000000),
            'nama_pembeli' => $this->faker->name,
            'telepon_pembeli' => $this->faker->phoneNumber,
        ];
    }
}
