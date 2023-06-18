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
        Schema::create('_m__mahasiswa', function (Blueprint $table) {
            $table->string('id');
            $table->string('NIM')->primary();
            $table->string('Nama');
            $table->string('Jurusan');
            $table->string('IPK');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_m__mahasiswa');
    }
};
