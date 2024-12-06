<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('home');
});

Route::post('/register', [AuthController::class, 'registerPost']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'loginPost']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// Contoh route dengan middleware role
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
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
    Route::get('/orang-tua/dashboard', function () {
        return view('orang-tua.dashboard');
    });
});
