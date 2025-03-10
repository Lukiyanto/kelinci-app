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

    public function perkawinan(): BelongsTo
    {
        return $this->belongsTo(PerkawinanKelinci::class);
    }

    public function jenisKelinci(): BelongsTo
    {
        return $this->belongsTo(JenisKelinci::class);
    }
}
