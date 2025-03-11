<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class AnakKelinci extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_anak',
        'nama_anak',
        'tanggal_lahir',
        'jenis_kelamin',
        'status_anak',
        'perkawinan_id',
        'jenis_kelinci_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $latestAnakKelinci = self::latest('id')->first();
            $nextNumber = $latestAnakKelinci ? ((int) substr($latestAnakKelinci->kode_anak, 3)) + 1 : 1;
            $model->kode_anak = 'ANK' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
        });
    }

    public function perkawinan(): BelongsTo
    {
        return $this->belongsTo(PerkawinanKelinci::class);
    }

    public function jenisKelinci(): BelongsTo
    {
        return $this->belongsTo(JenisKelinci::class);
    }
}
