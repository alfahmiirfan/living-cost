<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('email')->nullable()->unique();
            $table->string('kata_sandi');
            $table->string('nama');
            $table->string('otp')->nullable();
            // admin
            $table->string('id_admin')->nullable()->unique();
            // siswa
            $table->string('nisn')->nullable()->unique();
            $table->string('tahun_masuk')->nullable();
            $table->string('angkatan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
