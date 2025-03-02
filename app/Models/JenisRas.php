<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisRas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_ras',
        'deskripsi',
        'harga_jual'
    ];
}
