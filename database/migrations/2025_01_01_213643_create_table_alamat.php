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
        Schema::create('kategori_laporan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('kategori_laporan');
            $table->string('status');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('foto');
            $table->timestamps();
        });

        Schema::create('alamat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('laporan_id')->index()->nullable();
            $table->foreign('laporan_id')->references('id')->on('laporan');

            $table->text('jalan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kode_pos')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat');
    }
};
