<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebAuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
  feature/landing_page
    return view('pub_01');
    return redirect()->route('login');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [WebAuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [WebAuthController::class, 'login'])
        ->name('login.process');
});

Route::middleware('auth')->group(function () {

    Route::post('/logout', [WebAuthController::class, 'logout'])
        ->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::middleware('role:masyarakat')->group(function () {
        Route::get('/masyarakat/dashboard', [DashboardController::class, 'masyarakat'])
            ->name('dashboard.masyarakat');
    });

    Route::middleware('role:admin')->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'admin'])
            ->name('dashboard.admin');
    });

    Route::middleware('role:petugas')->group(function () {
        Route::get('/petugas/dashboard', [DashboardController::class, 'petugas'])
            ->name('dashboard.petugas');
    });

    Route::middleware('role:koordinator')->group(function () {
        Route::get('/koordinator/dashboard', [DashboardController::class, 'koordinator'])
            ->name('dashboard.koordinator');
    });
});