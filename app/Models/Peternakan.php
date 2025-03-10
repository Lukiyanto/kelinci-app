<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Peternakan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_peternakan',
        'alamat_peternakan',
        'email',
        'telepon',
    ];

    public function kandang(): HasMany
    {
        return $this->hasMany(Kandang::class);
    }

    public function indukKelinci(): HasMany
    {
        return $this->hasMany(IndukKelinci::class);
    }
}
