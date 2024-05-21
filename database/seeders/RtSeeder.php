<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class rtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rt')->insert([
            'rw_id' => 1, 
            'nomor_rt' => '001',
            'nama_kepala_rt' => 'SUPENO',
            'jumlah_pria' => 96,
            'jumlah_wanita' => 91,
            'jumlah_kk' => 47,
            'no_handphone' => '081234567892',
            'email' => 'supenoExaple@gmail.com',
        ]);
    }
}
