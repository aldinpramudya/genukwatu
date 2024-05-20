<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rw extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'dusun', 'nomor_rw', 
        'nama_kepala_rw', 
        'no_handphone', 
        'email',
    ];

    public function dusun()
    {
        return $this->belongsTo(Dusun::class);
    }
}