<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PerkawinanKelinci extends Model
{
    use HasFactory;

    protected $fillable = [
        'induk_betina_id',
        'induk_jantan_id',
        'tanggal_kawin',
        'tanggal_melahirkan',
        'status',
        'jumlah_anak',
        'jumlah_anak_hidup',
        'jumlah_anak_mati',
        'catatan'
    ];

    public function indukBetina(): BelongsTo
    {
        return $this->belongsTo(IndukKelinci::class, 'induk_betina_id');
    }

    public function indukJantan(): BelongsTo
    {
        return $this->belongsTo(IndukKelinci::class, 'induk_jantan_id');
    }
}
