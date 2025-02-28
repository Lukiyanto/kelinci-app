<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandang extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_kandang',
        'nama_kandang',
        'jenis_ayam',
        'lokasi',
        'kapasitas',
        'status'
    ];
}
