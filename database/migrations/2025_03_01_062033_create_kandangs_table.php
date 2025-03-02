<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kandangs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kandang')->unique();
            $table->string('nama_kandang');
            $table->string('jenis_kandang');
            $table->string('lokasi')->nullable();
            $table->integer('kapasitas')->default(1);
            $table->enum('status_kandang',['tersedia', 'terisi', 'perbaikan', 'rusak'])->default('tersedia');
            $table->foreignId('peternakan_id')->constrained('peternakans')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kandangs');
    }
};
