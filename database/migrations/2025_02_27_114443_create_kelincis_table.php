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
        Schema::create('kelincis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kelinci')->unique();
            $table->string('nama');
            $table->enum('ras', ['anggora', 'holland lop', 'netherland dwarf', 'lionhead', 'flemish giant', 'rex', 'dutch', 'lop', 'polish', 'jersey wooly', 'mini rex', 'mini lop', 'himalayan', 'californian', 'new zealand', 'satin', 'tan']);
            $table->enum('jenis_kelamin', ['jantan', 'betina']);
            $table->integer('umur');
            $table->string('status');
            $table->string('kondisi');
            $table->string('foto')->nullable();
            $table->string('warna');
            $table->date('tanggal_lahir');
            $table->foreignId('induk_id')->nullable()->constrained('kelincis')->nullOnDelete();
            $table->foreignId('pemilik_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('kandang_id')->nullable()->constrained('kandangs')->nullOnDelete();
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelincis');
    }
};
