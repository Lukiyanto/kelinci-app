<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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
        'jenis_ras_id'
    ];

    public function perkawinan()
    {
        return $this->belongsTo(PerkawinanKelinci::class);
    }

    public function ras()
    {
        return $this->belongsTo(JenisRas::class, 'jenis_ras_id');
    }
}
