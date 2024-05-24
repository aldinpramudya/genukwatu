<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use App\Http\Controllers\Controller;
use App\Models\Surat;
use Illuminate\Http\Request;
use App\Models\JenisSurat;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suratMasuk = Surat::with('jenisSurat')->where('arah_surat', 'Surat Masuk')->get();
        // dd($suratMasuk);
        return view('admin.surat-masuk', compact('suratMasuk'));
    }
    
    public function indexUser(){
        $suratMasuk = Surat::with('jenisSurat')->where('arah_surat', 'Surat Masuk')->get();
        return view('surat-masuk', compact('suratMasuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $suratMasuk = new Surat;
        $suratMasuk->judul_surat = $request->input('judul_surat');
        $suratMasuk->id_jenis_surat = $request->input('jenis_surat');
        $suratMasuk->nama_pengirim = $request->input('nama_pengirim');
        $suratMasuk->arah_surat = 'Surat Masuk';
        $suratMasuk->no_telepon = $request->input('no_telepon');
        $suratMasuk->tanggal_masuk = $request->input('tanggal_masuk');

        $suratMasuk->save();
        return redirect()->route('surat-masuk');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuratMasuk $suratMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $find = Surat::find($id);
        $find->judul_surat = $request->input('judul_surat');
        $find->id_jenis_surat = $request->input('jenis_surat');
        $find->nama_pengirim = $request->input('nama_pengirim');
        $find->no_telepon = $request->input('no_telepon');
        if ($request->filled('tanggal_masuk')) {
            $find->tanggal_masuk = $request->input('tanggal_masuk');
        }
        $find->save();
        return redirect()->route('surat-masuk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $surat = Surat::findOrFail($id);
        $surat->delete();

        return redirect()->route('surat-masuk')->with('success', 'Surat berhasil dihapus.');
    }
}
