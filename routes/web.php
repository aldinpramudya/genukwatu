<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [App\Http\Controllers\ProfilDesaController::class, 'index'])->name('profil');
Route::get('/sejarah-desa', [App\Http\Controllers\SejarahDesaController::class, 'index'])->name('sejarah');
Route::get('/data-kependudukan', [App\Http\Controllers\DataKependudukanController::class, 'index'])->name('data-kependudukan');
Route::get('/surat-masuk', [App\Http\Controllers\SuratMasukController::class, 'index'])->name('surat-masuk');
Route::get('/surat-keluar', [App\Http\Controllers\SuratKeluarController::class, 'index'])->name('surat-keluar');
Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');


Route::get('/login', function () {
    return view('login'); // Mengarahkan ke halaman login
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/data-kependudukanadmin', function () {
    // Contoh halaman dashboard
    return view('admin.data-kependudukan');
})->name('data-kependudukanadmin');
