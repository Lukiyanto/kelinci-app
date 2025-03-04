<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKelinci extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_jenis',
        'deskripsi',
        'harga_jual'
    ];
}
