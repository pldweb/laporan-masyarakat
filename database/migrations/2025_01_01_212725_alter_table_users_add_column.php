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

        Schema::create('role', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('nomor_telepon')->after('password')->nullable();
            $table->unsignedBigInteger('role_id')->nullable()->after('nomor_telepon');

            $table->foreign('role_id')->references('id')->on('role');

        });
    }
};
