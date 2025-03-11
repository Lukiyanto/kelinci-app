<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_transaksi',
        'tanggal_transaksi',
        'total_harga',
        'nama_pembeli',
        'telepon_pembeli'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            do {
                $randomNumber = mt_rand(100000, 999999);
                $nomorTransaksi = 'TPK' . $randomNumber;
            } while (self::where('nomor_transaksi', $nomorTransaksi)->exists());

            $model->nomor_transaksi = $nomorTransaksi;
        });
    }

    public function detailPenjualan(): HasMany
    {
        return $this->hasMany(DetailPenjualan::class);
    }
}
