<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class suratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('surat')->insert([
            'id_jenis_surat' => 1,
            'nama_pengirim' => 'USPRIUTNO',
            'arah_surat' => 'Masuk',
            'no_telepon' => '081234567893',
            'judul_surat' => 'Surat Pindah Istri',
            'tanggal_masuk' => now(),
        ]);
    }
}
