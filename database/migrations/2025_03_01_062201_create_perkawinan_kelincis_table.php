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
        Schema::create('perkawinan_kelincis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('induk_betina_id')->constrained('induk_kelincis')->cascadeOnDelete();
            $table->foreignId('induk_jantan_id')->constrained('induk_kelincis')->cascadeOnDelete();
            $table->date('tanggal_kawin')->nullable();
            $table->date('tanggal_melahirkan')->nullable();
            $table->enum('status_perkawinan', ['berhasil', 'gagal', 'menunggu'])->default('menunggu');
            $table->integer('jumlah_anak')->nullable();
            $table->integer('jumlah_anak_hidup')->nullable();
            $table->integer('jumlah_anak_mati')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkawinan_kelincis');
    }
};
