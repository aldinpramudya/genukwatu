<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataKependudukanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\SejarahDesaController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfilDesaController::class, 'index'])->name('profil');
Route::get('/sejarah-desa', [SejarahDesaController::class, 'index'])->name('sejarah');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');



Route::get('/data-kependudukanadmin', function () {
    // Contoh halaman dashboard
    return view('admin.data-kependudukan');
})->name('admin.data-kependudukan');

// check middleware
Route::get('/check', function () {
    return 'Check';
})->middleware('AdminMiddleware');


// Route Surat Masuk User
Route::get('/surat-masuk', [SuratMasukController::class, 'indexUser'])->name('surat-masuk');

//Route Surat Keluar User
Route::get('/surat-keluar', [SuratKeluarController::class, 'indexUser'])->name('surat-keluar');



Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return view('login'); // Mengarahkan ke halaman login
    })->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::group(['middleware' => 'AdminMiddleware'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/data-kependudukan', [DataKependudukanController::class, 'index'])->name('data-kependudukan');

    Route::get('/admin-profile-desa', [ProfilDesaController::class, 'indexAdmin'])->name('admin-profil-desa');
    Route::get('/admin-sejarah-desa', [SejarahDesaController::class, 'indexAdmin'])->name('admin-sejarah-desa');
    Route::get('/admin-data-kependudukan', [DataKependudukanController::class, 'indexAdmin'])->name('admin-data-kependudukan');
    Route::get('/admin-kontak', [KontakController::class, 'indexAdmin'])->name('admin-kontak');
    // Route Fitur Surat Masuk Admin
    Route::get('/admin-surat-masuk', [SuratMasukController::class, 'index'])->name('admin-surat-masuk');
    Route::post('/add-surat-masuk', [SuratMasukController::class, 'store'])->name('surat-masuk.submit');
    Route::put('/edit-surat-masuk/{id}', [SuratMasukController::class, 'update'])->name('surat-masuk.edit');
    Route::delete('/surat-masuk/{id}', [SuratMasukController::class, 'destroy'])->name('surat-masuk.destroy');
    // Route Fitur Surat Keluar Admin
    Route::get('/admin-surat-keluar', [SuratKeluarController::class, 'index'])->name('admin-surat-keluar');
    Route::post('/add-surat-keluar', [SuratKeluarController::class, 'store'])->name('surat-keluar.submit');
    Route::put('/edit-surat-keluar/{id}', [SuratKeluarController::class, 'update'])->name('surat-keluar.edit');
    Route::delete('/surat-keluar/{id}', [SuratKeluarController::class, 'destroy'])->name('surat-keluar.destroy');
});
