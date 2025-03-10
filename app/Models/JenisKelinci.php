<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisKelinci extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_jenis',
        'deskripsi',
        'harga_jual'
    ];

    public function indukKelinci(): HasMany
    {
        return $this->hasMany(IndukKelinci::class);
    }

    public function anakKelinci(): HasMany
    {
        return $this->hasMany(AnakKelinci::class);
    }
}
