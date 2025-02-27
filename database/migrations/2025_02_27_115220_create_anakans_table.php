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
        Schema::create('anakans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('budidaya_id')->nullable()->constrained('budidayas')->nullOnDelete();
            $table->string('kode_anakan')->unique();
            $table->enum('jenis_kelamin', ['jantan', 'betina']);
            $table->string('warna');
            $table->date('tanggal_lahir');
            $table->enum('status',['tersedia', 'terjual', 'mati'])->default('tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anakans');
    }
};
