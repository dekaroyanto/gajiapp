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
        Schema::create('totalgajis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('karyawan_id')->constrained('karyawans');
            $table->integer('angsuran');
            $table->integer('bpjs');
            $table->integer('kasbon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('totalgajis');
    }
};
