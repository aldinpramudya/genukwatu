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
        Schema::create('surat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jenis_surat')->constrained('jenis_surat')->onDelete('cascade');
            $table->string('nama_pengirim');
            $table->string('arah_surat');
            $table->string('no_telepon');
            $table->string('judul_surat');
            $table->date('tanggal_masuk');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat');
    }
};
