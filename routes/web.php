<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AdminController;




Route::get('/', function () {
    return view('home');
});

Route::post('/register', [AuthController::class, 'registerPost']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'loginPost']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/daftar', [PendaftaranController::class, 'daftar']);

// Contoh route dengan middleware role
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'admin'])->name('admin');
    Route::get('/admin/validation', [AdminController::class, 'validation'])->name('validation');

    // Route tambahan
    Route::get('/admin/validation/{id}', [AdminController::class, 'show'])->name('validation.show');
    Route::post('/admin/validation/{id}/verify', [AdminController::class, 'verify'])->name('validation.verify');
    Route::post('/admin/validation/{id}/reject', [AdminController::class, 'reject'])->name('validation.reject');
    Route::get('/admin/validation/{id}/edit', [AdminController::class, 'edit'])->name('validation.edit');
    Route::put('/admin/validation/{id}', [AdminController::class, 'update'])->name('validation.update');
    Route::delete('/admin/validation/{id}', [AdminController::class, 'destroy'])->name('validation.destroy');

});

Route::middleware(['auth', 'role:kepala_sekolah'])->group(function () {
    Route::get('/kepala/dashboard', function () {
        return view('kepala-sekolah.dashboard');
    });
});

Route::middleware(['auth', 'role:owner'])->group(function () {
    Route::get('/owner/dashboard', function () {
        return view('owner.dashboard');
    });
});

Route::middleware(['auth', 'role:orang_tua'])->group(function () {
    Route::get('/pendaftaran', [PendaftaranController::class, 'pendaftaran'])->name('pendaftaran');
    Route::get('/informasi', [PendaftaranController::class, 'informasi'])->name('informasi');
    Route::post('/confirmation/{id}/', [PendaftaranController::class, 'confirmation'])->name('confirmation');

});
