<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KaryawanController;


// ======================
// FRONTEND
// ======================
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/tentang-kami', [FrontendController::class, 'about'])->name('about');
Route::get('/artikel', [FrontendController::class, 'articles'])->name('articles');
Route::get('/artikel/{slug}', [FrontendController::class, 'articleDetail'])->name('article.detail');
Route::get('/portofolio', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/layanan', [FrontendController::class, 'layanan'])->name('layanan');
Route::get('/kontak', [FrontendController::class, 'kontak'])->name('kontak');

// ======================
// ADMIN (middleware auth)
// ======================
Route::middleware(['auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('articles', ArticleController::class);
        Route::resource('portfolios', PortfolioController::class);
        Route::resource('users', UserController::class);
        Route::resource('attendances', AttendanceController::class);
        Route::resource('karyawans', KaryawanController::class);
    });

// ======================
// ABSENSI KARYAWAN (login user biasa)
// ======================
Route::middleware(['auth'])->group(function () {
    Route::get('/absensi', [App\Http\Controllers\AttendanceController::class, 'index'])->name('absensi.index');
    Route::post('/absensi/check-in', [App\Http\Controllers\AttendanceController::class, 'checkIn'])->name('absensi.checkin');
    Route::post('/absensi/check-out', [App\Http\Controllers\AttendanceController::class, 'checkOut'])->name('absensi.checkout');
});


require __DIR__.'/auth.php';
