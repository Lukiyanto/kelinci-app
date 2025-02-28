<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anakan extends Model
{
    use HasFactory;

    protected $fillable = [
        'budidaya_id',
        'kode_anakan',
        'jenis_kelamin',
        'warna',
        'tanggal_lahir',
        'status'
    ];

    public function budidaya()
    {
        return $this->belongTo(Budidaya::class);
    }
}
