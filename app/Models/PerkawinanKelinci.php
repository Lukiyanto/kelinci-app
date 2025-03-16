<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->tanggal_kawin = Carbon::now();
            $model->tanggal_melahirkan = Carbon::now()->addDays(30);
            $model->status = 'Sedang Hamil';

            $indukBetina = $model->indukBetina;
            $indukBetina->status_kawin = 'Sedang Hamil';
            $indukBetina->save();
        });

        static::created(function ($model) {
            $indukBetina = $model->indukBetina;
            $indukBetina->status_kawin = 'Sedang Hamil';
            $indukBetina->save();
        });

        static::updated(function ($model) {
            if ($model->status === 'Pasca Melahirkan') {
                $indukBetina = $model->indukBetina;
                $indukBetina->status_kawin = 'Pasca Melahirkan';
                $indukBetina->save();
            }
        });
    }

    public function indukBetina(): BelongsTo
    {
        return $this->belongsTo(IndukKelinci::class, 'induk_betina_id');
    }

    public function indukJantan(): BelongsTo
    {
        return $this->belongsTo(IndukKelinci::class, 'induk_jantan_id');
    }
}
