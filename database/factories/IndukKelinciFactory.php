<?php

namespace Database\Factories;

use App\Models\IndukKelinci;
use App\Models\Kandang;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

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
        static $number = 1;
        $kode_induk = 'INK' . str_pad($number, 3, '0', STR_PAD_LEFT);

        // Ambil kandang_id secara berurutan
        $kandang = Kandang::orderBy('id')->skip($number - 1)->first();
        $number++;

        $status_kawin = 'Siap Kawin';

        return [
            'jenis_kelinci_id' => 1, // Assuming 'Dutch' has ID 1
            'kandang_id' => $kandang ? $kandang->id : null,
            'kode_induk' => $kode_induk,
            'nama_induk' => $this->faker->firstNameFemale,
            'tanggal_lahir' => Carbon::now()->subYear(),
            'jenis_kelamin' => 'Betina',
            'status_kawin'=> $status_kawin,
            'catatan' => "Induk $kode_induk $status_kawin",
        ];
    }
}
