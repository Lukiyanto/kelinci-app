<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class IndukKelinci extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_kelinci_id',
        'kandang_id',
        'kode_induk',
        'nama_induk',
        'tanggal_lahir',
        'jenis_kelamin',
        'status_kawin',
        'catatan',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $prefix = $model->jenis_kelamin === 'Betina' ? 'IKB' : 'IKJ';
            $latestIndukKelinci = self::where('kode_induk', 'like', $prefix . '%')->latest('id')->first();
            $nextNumber = $latestIndukKelinci ? ((int) substr($latestIndukKelinci->kode_induk, 3)) + 1 : 1;
            $model->kode_induk = $prefix . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);
        });
    }

    protected static function booted()
    {
        static::created(function ($indukKelinci) {
            $kandang = $indukKelinci->kandang;
            $kandang->status_kandang = 'Terisi';
            $kandang->save();
        });

        static::deleted(function ($indukKelinci) {
            $kandang = $indukKelinci->kandang;
            $kandang->status_kandang = 'Tersedia';
            $kandang->save();
        });
    }
    
    public function kandang(): BelongsTo
    {
        return $this->belongsTo(Kandang::class);
    }

    public function jenisKelinci(): BelongsTo
    {
        return $this->belongsTo(JenisKelinci::class);
    }

    public function anakKelinci(): HasMany
    {
        return $this->hasMany(AnakKelinci::class);
    }

    public function perkawinan(): BelongsTo
    {
        return $this->belongsTo(PerkawinanKelinci::class);
    }
}
