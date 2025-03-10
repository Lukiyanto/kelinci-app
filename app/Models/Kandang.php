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
        'nama_kandang',
        'jenis_kandang',
        'lokasi',
        'kapasitas',
        'status_kandang',
        'peternakan_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $latestKandang = self::lates('id')->first();
            $nextNumber = $latestKandang ? ((int) substr($latestKandang, 3)) + 1 : 1;
            $model->kode_kandang = 'KDG' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);
        });
    }
    
    public function peternakan(): BelongsTo
    {
        return $this->belongsTo(Peternakan::class);
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
