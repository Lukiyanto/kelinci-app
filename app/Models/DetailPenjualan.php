<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'penjualan_id',
        'anak_kelinci_id',
        'harga_jual',
        'catatan'
    ];

    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class);
    }

    public function anakKelinci()
    {
        return $this->belongsTo(AnakKelinci::class);
    }
}
