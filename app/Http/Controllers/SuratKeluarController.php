<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Surat; // Import the Surat class

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suratKeluar = Surat::with('jenisSurat')->where('arah_surat', 'Surat Keluar')->get();
        return view('admin.surat-keluar', compact('suratKeluar'));
    }

    public function indexUser(){
        $suratKeluar = Surat::with('jenisSurat')->where('arah_surat', 'Surat Keluar')->get();
        return view('surat-keluar', compact('suratKeluar'));
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
        $suratKeluar = new Surat;
        $suratKeluar->judul_surat = $request->input('judul_surat');
        $suratKeluar->id_jenis_surat = $request->input('jenis_surat');
        $suratKeluar->nama_pengirim = $request->input('nama_pengirim');
        $suratKeluar->arah_surat = 'Surat Keluar';
        $suratKeluar->no_telepon = $request->input('no_telepon');
        $suratKeluar->tanggal_masuk = $request->input('tanggal_masuk');

        $suratKeluar->save();
        return redirect()->route('surat-keluar');
    }

    /**
     * Display the specified resource.
     */
    public function show(SuratKeluar $suratKeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuratKeluar $suratKeluar)
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
        return redirect()->route('surat-keluar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $surat = Surat::findOrFail($id);
        $surat->delete();

        return redirect()->route('surat-keluar')->with('success', 'Surat berhasil dihapus.');
    }
}
