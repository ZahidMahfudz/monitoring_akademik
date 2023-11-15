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
        Schema::create('irs', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('nim')->nullable();
            $table->integer('semester')->nullable();
            $table->integer('sks')->nullable();
            $table->string('scanirs')->nullable();
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
        Schema::dropIfExists('irs');
    }
};
