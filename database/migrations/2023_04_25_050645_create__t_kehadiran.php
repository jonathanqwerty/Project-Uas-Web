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
        Schema::create('_t_kehadiran', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->dateTime('tanggal');
            $table->dateTime('jam_masuk');
            $table->dateTime('jam_keluar');
            $table->integer('matkul_id');
            $table->integer('kelas_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_t_kehadiran');
    }
};
