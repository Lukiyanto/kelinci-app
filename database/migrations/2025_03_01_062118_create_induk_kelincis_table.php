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
        Schema::create('induk_kelincis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_induk')->unique();
            $table->string('nama_induk')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin', ['Jantan', 'Betina']);
            $table->text('catatan')->nullable();
            $table->foreignId('jenis_kelinci_id')->nullable()->constrained('jenis_kelincis')->nullOnDelete();
            $table->foreignId('kandang_id')->nullable()->constrained('kandangs')->nullOnDelete();
            $table->timestamps();
        });
    }

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('induk_kelincis');
    }
};
