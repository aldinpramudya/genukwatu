<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rt extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'rw', 
        'nomor_rt', 
        'nama_kepala_rt', 
        'jumlah_pria', 
        'jumlah_wanita', 
        'jumlah_kk', 
        'no_handphone', 
        'email',
    ];

    public function rw()
    {
        return $this->belongsTo(Rw::class);
    }
}
