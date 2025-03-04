<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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

    public function jenisKelinci()
    {
        return $this->belongsTo(JenisKelinci::class);
    }

    public function kandang()
    {
        return $this->belongsTo(Kandang::class);
    }
}
