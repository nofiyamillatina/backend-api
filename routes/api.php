<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

// 1. Endpoint Publik (Bisa diakses tanpa login/token)[cite: 116, 118]
Route::post('/login', [AuthController::class, 'login']);

// 2. Endpoint Terproteksi (Wajib membawa Bearer Token)[cite: 109, 115, 116]
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/logout', [AuthController::class, 'logout']);
    
    // Kelompokkan route produk di dalam middleware ini agar aman[cite: 115]
    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/products', [ProductController::class, 'store']);
});
