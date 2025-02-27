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
        Schema::create('budidayas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelinci_jantan_id')->nullable()->constrained('kelincis')->nullOnDelete();
            $table->foreignId('kelinci_betina_id')->nullable()->constrained('kelincis')->nullOnDelete();
            $table->date('tanggal_kawin');
            $table->date('tanggal_melahirkan')->nullable();
            $table->integer('jumlah_anak');
            $table->enum('status', ['hamil', 'melahirkan', 'menyusui', 'belum kawin'])->default('belum kawin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budidayas');
    }
};
