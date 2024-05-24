<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilDesaController extends Controller
{
    public function index(){
        return view('profil-desa');
    }

    public function indexAdmin(){
        return view('admin.profil-desa');
    }
}
