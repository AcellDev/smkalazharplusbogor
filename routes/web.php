<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| ROUTE DARURAT: Jalankan ini sekali di hosting untuk menghubungkan Storage
|--------------------------------------------------------------------------
*/
Route::get('/buat-storage-link', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('storage:link');
        return 'Mantap! Storage link berhasil dibuat. Sekarang coba upload gambarnya lagi.';
    } catch (\Exception $e) {
        return 'Gagal membuat storage link: ' . $e->getMessage();
    }
});

/*
|--------------------------------------------------------------------------
| 1. Route Halaman Publik (Bisa Diakses Semua Orang)
|--------------------------------------------------------------------------
*/
Route::get('/', [BerandaController::class, 'index']);

Route::get('/profil', function () {
    return view('profile'); 
});

Route::get('/program', function () {
    $jurusans = \App\Models\Jurusan::all();
    return view('program', compact('jurusans'));
});

Route::get('/galeri', [GaleriController::class, 'index']);

/*
|--------------------------------------------------------------------------
| 2. Route Autentikasi (Login & Logout Admin)
|--------------------------------------------------------------------------
*/
Route::get('/admin/login', [AuthController::class, 'login'])->name('login');
Route::post('/admin/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| 3. Route Panel Admin (Wajib Login / Dilindungi Middleware Auth)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    
    // Dashboard Admin
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Kelola Jurusan
    Route::get('/admin/jurusan', [JurusanController::class, 'index']);
    Route::post('/admin/jurusan/store', [JurusanController::class, 'store']);
    Route::post('/admin/jurusan/update/{id}', [JurusanController::class, 'update']);
    Route::delete('/admin/jurusan/delete/{id}', [JurusanController::class, 'destroy']);

    // Kelola Kontak
    Route::get('/admin/kontak', [KontakController::class, 'edit']);
    Route::post('/admin/kontak/update', [KontakController::class, 'update']);

    // Kelola Galeri
    Route::get('/admin/galeri', [GaleriController::class, 'adminIndex']);
    Route::post('/admin/galeri/store', [GaleriController::class, 'store']);
    Route::delete('/admin/galeri/delete/{id}', [GaleriController::class, 'destroy']);
    Route::post('/admin/galeri/update/{id}', [GaleriController::class, 'update']);
    
});