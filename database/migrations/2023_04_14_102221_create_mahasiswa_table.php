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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nama');
            $table->string('nim');
            $table->string('jurusan');
            $table->string('ipk');
            $table->enum('jenis_kelamin' , ['L','P']);
            $table->enum('absensi' , ['Hadir','Tidak Hadir'])->default('Tidak Hadir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
