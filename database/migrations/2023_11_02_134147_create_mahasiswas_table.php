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
    Schema::create('mahasiswas', function (Blueprint $table) {
        $table->id();
        $table->string('NIM')->unique()->nullable();
        $table->string('nama')->nullable();
        $table->string('alamat')->nullable();
        $table->string('kab_kota')->nullable();
        $table->string('provinsi')->nullable();
        $table->string('angkatan')->nullable();
        $table->string('jalur_masuk')->nullable();
        $table->string('email')->unique()->nullable();
        $table->string('no_hp')->nullable();
        $table->enum('status', ['AKTIF', 'TIDAK AKTIF'])->nullable();
        $table->binary('foto_mahasiswa')->nullable();
        $table->string('doswal')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
