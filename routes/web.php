<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\ReportController;

// Prototype HTML lama menggunakan tautan seperti PUB-02.html.
// Alihkan ke lokasi statis sebenarnya agar tautan lama tidak menjadi 404.
Route::get('/{prototypePage}.html', function (string $prototypePage) {
    $prototypePath = public_path("fasilitasqu/pages/{$prototypePage}.html");

    abort_unless(is_file($prototypePath), 404);

    return redirect("/fasilitasqu/pages/{$prototypePage}.html");
})->where('prototypePage', '[A-Za-z]+-[A-Za-z0-9]+');

Route::get('/', function () {
    return view('auth.landing');
});

// AUTENTIKASI TAMU
Route::middleware('guest')->group(function () {
    Route::get('/login', [WebAuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [WebAuthController::class, 'login'])
        ->name('login.process');
});

// SEMUA ROUTE PENGGUNA LOGIN
Route::middleware('auth')->group(function () {

    // LOGOUT
    Route::post('/logout', [WebAuthController::class, 'logout'])
        ->name('logout');

    // DASHBOARD UTAMA
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // DASHBOARD MASYARAKAT
    Route::middleware('role:masyarakat')->group(function () {
        Route::get('/masyarakat/dashboard', [DashboardController::class, 'masyarakat'])
            ->name('dashboard.masyarakat');
    });

    // DASHBOARD ADMIN
    Route::middleware('role:admin')->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'admin'])
            ->name('dashboard.admin');
    });

    // DASHBOARD PETUGAS
    Route::middleware('role:petugas')->group(function () {
        Route::get('/petugas/dashboard', [DashboardController::class, 'petugas'])
            ->name('dashboard.petugas');
    });

    // DASHBOARD KOORDINATOR
    Route::middleware('role:koordinator')->group(function () {
        Route::get('/koordinator/dashboard', [DashboardController::class, 'koordinator'])
            ->name('dashboard.koordinator');
    });

    // KELOLA KATEGORI, FASILITAS, DAN LAPORAN - ADMIN
    Route::middleware('role:admin')
        ->prefix('admin')
        ->name('admin.')
        ->group(function () {

            // KELOLA KATEGORI
            Route::resource('categories', CategoryController::class)
                ->except(['show', 'destroy']);

            Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])
                ->name('categories.destroy');

            // KELOLA FASILITAS
            Route::resource('facilities', FacilityController::class)
                ->except(['show']);

            // DAFTAR LAPORAN ADMIN
            Route::get('/reports', [ReportController::class, 'adminIndex'])
                ->name('reports.index');

            // VERIFIKASI DAN PENOLAKAN LAPORAN
            Route::post('/reports/{report}/verify', [ReportController::class, 'verify'])
                ->name('reports.verify');

            // PENUGASAN LAPORAN KEPADA PETUGAS
            Route::post('/reports/{report}/assign', [ReportController::class, 'assign'])
                ->name('reports.assign');
        });

    // PELAPORAN MASYARAKAT
    Route::middleware('role:masyarakat')->group(function () {

        // DAFTAR LAPORAN MASYARAKAT
        Route::get('/reports', [ReportController::class, 'index'])
            ->name('reports.index');

        // FORM BUAT LAPORAN
        Route::get('/reports/create', [ReportController::class, 'create'])
            ->name('reports.create');

        // SIMPAN LAPORAN
        Route::post('/reports', [ReportController::class, 'store'])
            ->name('reports.store');
    });

    // PROGRES PENANGANAN LAPORAN - PETUGAS
    Route::post('/reports/{report}/progress', [ReportController::class, 'updateProgress'])
        ->middleware('role:petugas')
        ->name('reports.progress');

    // FOTO LAPORAN PRIVAT - mengikuti hak akses detail laporan
    Route::get('/reports/{report}/photos/{photo}', [ReportController::class, 'showPhoto'])
        ->middleware('role:masyarakat,admin,petugas,koordinator')
        ->name('reports.photos.show');

    // DETAIL LAPORAN UNTUK SEMUA ROLE
    Route::get('/reports/{report}', [ReportController::class, 'show'])
        ->middleware('role:masyarakat,admin,petugas,koordinator')
        ->name('reports.show');
});
