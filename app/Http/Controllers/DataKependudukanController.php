<?php

namespace App\Http\Controllers;

use App\Models\DataKependudukan;

use Illuminate\Http\Request;

class DataKependudukanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexGuest()
    {
        $dataPenduduk = DataKependudukan::all();

        // Menghitung total untuk setiap kolom yang relevan
        $totalKK = $dataPenduduk->sum('jumlah_kk');
        $totalLK = $dataPenduduk->sum('jumlah_pria');
        $totalP = $dataPenduduk->sum('jumlah_wanita');
        $totalLP = $dataPenduduk->sum('jumlah_pria_wanita');

        // Menambahkan baris total ke koleksi data penduduk
        // $dataPenduduk->push([
        //     'nama_dusun' => 'TOTAL',
        //     'nama_rw' => null,
        //     'nama_rt' => null,
        //     'jumlah_kk' => $totalKK,
        //     'jumlah_pria' => $totalLK,
        //     'jumlah_wanita' => $totalP,
        //     'jumlah_pria_wanita' => $totalLP
        // ]);

        return view('data-kependudukan', compact('dataPenduduk','totalKK','totalLK','totalP','totalLP'));
    }
    public function indexAdmin()
    {
        $dataPenduduk = DataKependudukan::all();

        // Menghitung total untuk setiap kolom yang relevan
        $totalKK = $dataPenduduk->sum('jumlah_kk');
        $totalLK = $dataPenduduk->sum('jumlah_pria');
        $totalP = $dataPenduduk->sum('jumlah_wanita');
        $totalLP = $dataPenduduk->sum('jumlah_pria_wanita');

        return view('admin.data-kependudukan', compact('dataPenduduk','totalKK','totalLK','totalP','totalLP'));
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

        $dataKependudukan = new DataKependudukan;
        $dataKependudukan->nama_dusun = $request->input('nama_dusun');
        $dataKependudukan->nama_kepala_rw = $request->input('nama_kepala_rw');
        $dataKependudukan->nama_kepala_rt = $request->input('nama_kepala_rt');
        $dataKependudukan->jumlah_kk = $request->input('jumlah_kk');
        $dataKependudukan->jumlah_pria = $request->input('jumlah_pria');
        $dataKependudukan->jumlah_wanita = $request->input('jumlah_wanita');
        $dataKependudukan->jumlah_pria_wanita = $request->input('jumlah_pria_wanita');

        $dataKependudukan->save();
        return redirect()->route('admin.data-kependudukan');

    }

    /**
     * Display the specified resource.
     */
    public function show(DataKependudukan $dataKependudukan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataKependudukan $dataKependudukan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $find = DataKependudukan::find($id);
        $find->nama_dusun = $request->input('nama_dusun');
        $find->nama_kepala_rw = $request->input('nama_kepala_rw');
        $find->nama_kepala_rt = $request->input('nama_kepala_rt');
        $find->jumlah_kk = $request->input('jumlah_kk');
        $find->jumlah_pria = $request->input('jumlah_pria');
        $find->jumlah_wanita = $request->input('jumlah_wanita');
        $find->jumlah_pria_wanita = $request->input('jumlah_pria_wanita');

        $find->save();
        return redirect()->route('admin.data-kependudukan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = DataKependudukan::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.data-kependudukan')->with('success', 'Data berhasil dihapus.');
    }
}
