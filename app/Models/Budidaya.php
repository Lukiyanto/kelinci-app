<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budidaya extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_budidaya',
        'jenis_budidaya',
        'luas_budidaya',
        'lokasi_budidaya',
        'tanggal_mulai',
        'tanggal_panen',
        'status'
    ];

    public function anakan()
    {
        return $this->hasMany(Anakan::class);
    }
}
