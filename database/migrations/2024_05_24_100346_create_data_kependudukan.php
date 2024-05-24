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
        Schema::create('dataKependudukan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dusun')->nullable();
            $table->string('nama_kepala_rw')->nullable();
            $table->string('nama_kepala_rt');
            $table->integer('jumlah_kk');
            $table->integer('jumlah_pria');
            $table->integer('jumlah_wanita');
            $table->integer('jumlah_pria_wanita');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dataKependudukan');
    }
};
