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
        Schema::create('khs', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('nim')->nullable();
            $table->integer('semester')->nullable();
            $table->integer('sks_semester')->nullable();
            $table->integer('sks_kumulatif')->nullable();
            $table->float('ip')->nullable();
            $table->binary('scankhs')->nullable();
            $table->enum('approve', ['BELUM DISETUJUI', 'SUDAH DISETUJUI'])->nullable();
            $table->string('doswal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khs');
    }
};
