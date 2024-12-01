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
        Schema::create('absens', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('siswa_id');
        $table->date('tanggal');
        $table->enum('status', ['Hadir', 'Sakit', 'Izin', 'Alpha']);
        $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absens');
    }
};
