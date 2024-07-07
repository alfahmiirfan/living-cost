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
        Schema::create('income', function (Blueprint $table) {
            $table->id();

            $table->string('bukti_pembayaran')->nullable();
            $table->date('upload_date')->nullable();
            $table->unsignedBigInteger('amount');
            $table->string('status');
            $table->string('month');
            $table->string('name');
            $table->string('nisn');
            $table->string('year');

            $table->foreignId('month_id')->constrained('month');
            $table->foreignId('siswa_id')->constrained('siswa');
            $table->foreignId('year_id')->constrained('year');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('income');
    }
};
