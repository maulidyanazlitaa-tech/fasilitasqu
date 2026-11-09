<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FacilityController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ReportController;

// Login tanpa autentikasi
Route::post('/login', [AuthController::class, 'login'])
    ->middleware('throttle:5,1');

// Endpoint yang membutuhkan autentikasi
Route::middleware('auth:sanctum')->group(function () {

    // Authentication
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);

    // Fasilitas: dapat diakses seluruh pengguna yang login
    Route::get('/facilities', [FacilityController::class, 'index']);
    Route::get('/facilities/{facility}', [FacilityController::class, 'show']);

    // Pengelolaan fasilitas: khusus admin
    Route::middleware('role:admin')->group(function () {
        Route::post('/facilities', [FacilityController::class, 'store']);
        Route::put('/facilities/{facility}', [FacilityController::class, 'update']);
        Route::delete('/facilities/{facility}', [FacilityController::class, 'destroy']);
    });

    // Category: dapat diakses semua pengguna yang login
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/categories/{category}', [CategoryController::class, 'show']);

    // Pengelolaan kategori: khusus admin
    Route::middleware('role:admin')->group(function () {
        Route::post('/categories', [CategoryController::class, 'store']);
        Route::put('/categories/{category}', [CategoryController::class, 'update']);
        Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);
    });

    // Report API
    Route::get('/reports', [ReportController::class, 'index']);
    Route::post('/reports', [ReportController::class, 'store'])
    ->middleware('role:masyarakat');
    Route::get('/reports/{report}', [ReportController::class, 'show']);
    Route::post('/reports/{report}/verify', [ReportController::class, 'verify'])
    ->middleware('role:admin');
});
