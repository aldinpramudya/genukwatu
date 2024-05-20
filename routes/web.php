<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\ProfilDesaController::class, 'index'])->name('profil');
Route::get('/sejarah-desa', [App\Http\Controllers\SejarahDesaController::class, 'index'])->name('sejarah');
Route::get('/data-kependudukan', [App\Http\Controllers\DataKependudukanController::class, 'index'])->name('data-kependudukan');
Route::get('/surat-masuk', [App\Http\Controllers\SuratMasukController::class, 'index'])->name('surat-masuk');
Route::get('/surat-keluar', [App\Http\Controllers\SuratKeluarController::class, 'index'])->name('surat-keluar');
Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');

