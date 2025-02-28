<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelinci extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_kelinci',
        'nama_kelinci',
        'ras',
        'jenis_kelamin',
        'umur',
        'status',
        'kondisi',
        'foto',
        'warna',
        'tanggal_lahir',
        'induk_id',
        'pemilik_id',
        'kandang_id',
        'catatan'
    ];

    public function induk()
    {
        return $this->belongsTo(Kelinci::class, 'induk_id');
    }

    public function pemilik()
    {
        return $this->belongsTo(User::class, 'pemilik_id');
    }

    public function kandang()
    {
        return $this->belongsTo(Kandang::class, 'kandang_id');
    }
}
