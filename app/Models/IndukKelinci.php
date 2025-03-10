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
        'kode_induk',
        'nama_induk',
        'tanggal_lahir',
        'jenis_kelamin',
        'catatan',
        'jenis_kelinci_id',
        'kandang_id'
    ];

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
        return $this->belongsTo(PerkawinanKelinci::class); // Tambahkan ini jika diperlukan
    }
}
