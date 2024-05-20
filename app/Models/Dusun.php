<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dusun extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_dusun',
        'no_handphone',
        'email'
    ];
}
