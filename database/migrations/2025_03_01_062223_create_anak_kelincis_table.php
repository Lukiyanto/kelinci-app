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
        Schema::create('anak_kelincis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_anak')->unique();
            $table->string('nama_anak');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['jantan', 'betina', 'belum diketahui'])->default('belum diketahui');
            $table->enum('status_anak', ['hidup', 'mati'])->default('hidup');
            $table->foreignId('perkawinan_id')->constrained('perkawinan_kelincis')->cascadeOnDelete();
            $table->foreignId('jenis_kelinci_id')->constrained('jenis_kelincis')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anak_kelincis');
    }
};
