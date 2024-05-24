<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [App\Http\Controllers\ProfilDesaController::class, 'index'])->name('profil');
Route::get('/sejarah-desa', [App\Http\Controllers\SejarahDesaController::class, 'index'])->name('sejarah');
// Route::get('/data-kependudukan', [App\Http\Controllers\DataKependudukanController::class, 'index'])->name('data-kependudukan');
Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');

Route::get('/login', function () {
    return view('login'); // Mengarahkan ke halaman login
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Route::get('/data-kependudukanadmin', function () {
//     // Contoh halaman dashboard
//     return view('admin.data-kependudukan');
// })->name('data-kependudukanadmin');


Route::get('/data-kependudukan', [App\Http\Controllers\DataKependudukanController::class, 'indexAdmin'])->name('admin.data-kependudukan');
Route::post('/add-data-kependudukan', [App\Http\Controllers\DataKependudukanController::class, 'store'])->name('admin.data-kependudukan.submit');
Route::put('/edit-data-kependudukan/{id}', [App\Http\Controllers\DataKependudukanController::class, 'update'])->name('admin.data-kependudukan.edit');
Route::delete('/data-kependudukan/{id}', [App\Http\Controllers\DataKependudukanController::class, 'destroy'])->name('admin.data-kependudukan.destroy');


// Route Fitur Surat Masuk
Route::get('/surat-masuk', [App\Http\Controllers\SuratMasukController::class, 'index'])->name('surat-masuk');
Route::post('/add-surat-masuk', [App\Http\Controllers\SuratMasukController::class, 'store'])->name('surat-masuk.submit');
Route::put('/edit-surat-masuk/{id}', [App\Http\Controllers\SuratMasukController::class, 'update'])->name('surat-masuk.edit');
Route::delete('/surat-masuk/{id}', [App\Http\Controllers\SuratMasukController::class, 'destroy'])->name('surat-masuk.destroy');

// Route Fitur Surat Keluar
Route::get('/surat-keluar', [App\Http\Controllers\SuratKeluarController::class, 'index'])->name('surat-keluar');
Route::post('/add-surat-keluar', [App\Http\Controllers\SuratKeluarController::class, 'store'])->name('surat-keluar.submit');
Route::put('/edit-surat-keluar/{id}', [App\Http\Controllers\SuratKeluarController::class, 'update'])->name('surat-keluar.edit');
Route::delete('/surat-keluar/{id}', [App\Http\Controllers\SuratKeluarController::class, 'destroy'])->name('surat-keluar.destroy');




