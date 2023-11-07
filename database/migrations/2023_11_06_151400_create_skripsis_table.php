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
        Schema::create('skripsis', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('NIM')->nullable();
            $table->enum('status', ['BELUM AMBIL', 'SEDANG AMBIL', 'LULUS'])->nullable();
            $table->string('nilai')->nullable();
            $table->integer('lama_studi')->nullable();
            $table->date('tgl_lulus_sidang')->nullable();
            $table->binary('scan_berita_acara')->nullable();
            $table->enum('aprove', ['BELUM DISETUJUI', 'SUDAH DISETUJUI']);
            $table->foreignId('doswal_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skripsis');
    }
};
