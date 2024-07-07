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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('amount');
            $table->string('reference');
            $table->string('merchant_ref')->nullable();
            $table->string('status');

            $table->foreignId('income_id')->constrained('income');
            $table->foreignId('siswa_id')->constrained('siswa');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
