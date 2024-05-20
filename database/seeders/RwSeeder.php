<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class rwSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rw')->insert([
            'dusun_id' => 1,
            'nomor_rw' => '001',
            'nama_kepala_rw' => 'SISWANTORO',
            'no_handphone' => '085723678132',
            'email' => 'siswantoroExample@gmail.com',
        ]);
    }
}
