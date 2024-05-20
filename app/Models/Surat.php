<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Surat extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_jenis_surat', 
        'nama_pengirim', 
        'arah_surat', 
        'no_telepon', 
        'judul_surat', 
        'tanggal_masuk'
    ];

    public function jenisSurat()
    {
        return $this->belongsTo(JenisSurat::class, 'id_jenis_surat');
    }
}
