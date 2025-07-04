<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BerandaController;


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/test-db', function() {
    try {
        DB::connection()->getPdo();
        return "Connected successfully to database: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return "Could not connect to the database. Error: " . $e->getMessage();
    }
});

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'home'])->name('dashboard.home');
    Route::get('/tampil', [DashboardController::class, 'tampil'])->name('dashboard.tampil');
    Route::get('/tambah', [DashboardController::class, 'tambah'])->name('dashboard.tambah');
    Route::get('/dashboard/edit/{id}', [DashboardController::class, 'edit'])->name('dashboard.edit');
    Route::put('/update/{id}', [DashboardController::class, 'update'])->name('dashboard.update');
    Route::delete('/dashboard/hapus/{id}', [DashboardController::class, 'hapus'])->name('dashboard.hapus');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/dashboard/store', [DashboardController::class, 'store'])->name('dashboard.store');

Route::get('/detail/{id}', [DetailController::class, 'show'])->name('detail.show');

Route::get('/kategori/wisatareligi', [KategoriController::class, 'religi'])->name('kategori.religi');
Route::get('/kategori/wisatamangrove', [KategoriController::class, 'mangrove'])->name('kategori.mangrove');
Route::get('/kategori/wisatasejarah', [KategoriController::class, 'sejarah'])->name('kategori.sejarah');

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
