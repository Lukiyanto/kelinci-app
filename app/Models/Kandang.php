<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kandang extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_kandang',
        'lokasi_kandang',
        'kapasitas',
        'status_kandang',
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
