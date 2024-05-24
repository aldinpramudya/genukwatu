<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKependudukan extends Model
{
    use HasFactory;

    protected $table = 'datakependudukan';

    protected $fillable = [
        'nama_dusun',
        'nama_kepala_rw',
        'nama_kepala_rt',
        'jumlah_kk',
        'jumlah_pria',
        'jumlah_wanita',
        'jumlah_pria_wanita'
    ];
}
