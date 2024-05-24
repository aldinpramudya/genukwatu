<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisSurat extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'jenis_surat';

    protected $fillable = [
        'nama'
    ];

    public function surat(){
        return $this->hasMany(Surat::class, 'id_jenis_surat', 'id');
    }
}
