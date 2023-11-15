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
        Schema::create('pkls', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('NIM')->nullable();
            $table->enum('status', ['BELUM AMBIL', 'SEDANG AMBIL', 'LULUS'])->nullable();
            $table->string('nilai')->nullable();
            $table->binary('scanberita')->nullable();
            $table->enum('approve', ['BELUM DISETUJUI', 'SUDAH DISETUJUI']);
            $table->string('doswal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pkls');
    }
};
