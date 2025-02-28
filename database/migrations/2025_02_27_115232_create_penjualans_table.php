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
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anakan_id')->constrained('anakans')->onDelete('cascade');
            $table->string('kode_penjualan')->unique();
            $table->date('tanggal_penjualan');
            $table->decimal('total_harga', 10, 2);
            $table->enum('status', ['terjual', 'tersedia'])->default('tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
