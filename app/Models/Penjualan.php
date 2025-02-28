<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_penjualan',
        'anakan_id',
        'tanggal_penjualan',
        'total_harga',
        'status'
    ];

    public function anakan()
    {
        return $this->belongsTo(Anakan::class);
    }
}
