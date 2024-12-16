<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PrestasiController;






Route::get('/', function () {
    return view('home');
});

Route::post('/register', [AuthController::class, 'registerPost']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'loginPost']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/daftar', [PendaftaranController::class, 'daftar']);
Route::post('/daftar-ortu', [PendaftaranController::class, 'daftar_ortu']);
Route::post('/daftar-berkas', [PendaftaranController::class, 'daftar_berkas']);
Route::post('/daftar-admin', [PendaftaranController::class, 'daftar_admin']);




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

    Route::get('/admin/payments', [AdminController::class, 'payments'])->name('payments');
    Route::get('/admin/user', [AuthController::class, 'user'])->name('user');
    Route::post('/admin/user/add', [AuthController::class, 'registerallpost'])->name('user.post');
    Route::get('/admin/user/add', [AuthController::class, 'registeruser'])->name('user.add');
    Route::get('/admin/user/{id}', [AuthController::class, 'user_edit'])->name('user.edit');
    Route::put('/admin/user/{id}', [AuthController::class, 'user_update'])->name('user.update');
    Route::delete('/admin/user/{id}', [AuthController::class, 'user_destroy'])->name('user.destroy');

    // prestasi
    Route::get('/admin/prestasi', [PrestasiController::class, 'prestasi'])->name('prestasi');
    Route::post('/admin/prestasi/add', [PrestasiController::class, 'registerprestasipost'])->name('prestasi.post');
    Route::get('/admin/prestasi/add', [PrestasiController::class, 'registerprestasi'])->name('prestasi.add');
    Route::get('/admin/prestasi/{id}', [PrestasiController::class, 'prestasi_edit'])->name('prestasi.edit');
    Route::put('/admin/prestasi/{id}', [PrestasiController::class, 'prestasi_update'])->name('prestasi.update');
    Route::delete('/admin/prestasi/{id}', [PrestasiController::class, 'prestasi_destroy'])->name('prestasi.destroy');

    Route::get('/pendaftaran', [PendaftaranController::class, 'pendaftaran_admin'])->name('pendaftaran.admin');


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
    Route::get('/orang-tua', [PendaftaranController::class, 'orang_tua'])->name('orang-tua');
    Route::get('/dokumen', [PendaftaranController::class, 'dokumen'])->name('dokumen');
    Route::get('/informasi', [PaymentController::class, 'showPayment'])->name('informasi');
    Route::post('/confirmation/{id}/', [PendaftaranController::class, 'confirmation'])->name('confirmation');
    // Route::get('/informasi', [PendaftaranController::class, 'informasi'])->name('informasi');
    Route::post('/payment/create', [PaymentController::class, 'createPayment'])->name('payment.create');
});

Route::post('/payment/callback', [PaymentController::class, 'handlePaymentCallback'])->name('payment.callback');