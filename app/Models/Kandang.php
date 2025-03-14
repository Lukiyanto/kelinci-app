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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $latestKandang = self::latest('id')->first();
            $nextNumber = $latestKandang ? ((int) substr($latestKandang->kode_kandang, 3)) + 1 : 1;
            $model->kode_kandang = 'KDG' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);
        });
    }
    
    public function indukKelinci(): HasMany
    {
        return $this->hasMany(IndukKelinci::class);
    }

    public function anakKelinci(): HasMany
    {
        return $this->hasMany(AnakKelinci::class);
    }
}
