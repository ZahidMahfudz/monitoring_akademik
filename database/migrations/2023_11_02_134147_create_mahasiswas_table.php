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
        $table->string('NIM')->unique();
        $table->string('nama');
        $table->string('alamat');
        $table->string('kab_kota');
        $table->string('provinsi');
        $table->string('angkatan');
        $table->string('jalur_masuk');
        $table->string('email')->unique();
        $table->string('no_hp');
        $table->enum('status', ['AKTIF', 'TIDAK AKTIF']);
        $table->binary('foto_mahasiswa')->nullable();
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
