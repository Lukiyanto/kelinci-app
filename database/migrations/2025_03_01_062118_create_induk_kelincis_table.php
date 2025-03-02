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
            $table->string('nama_induk');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['jantan', 'betina']);
            $table->text('catatan')->nullable();
            $table->foreignId('jenis_ras_id')->constrained('jenis_ras')->cascadeOnDelete();
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
