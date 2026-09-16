<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReportController;

// Landing Page
Route::get('/', function () {
    return view('landing.index');
})->name('landing');

// Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/laporan', [ReportController::class, 'index'])
    ->name('laporan');

Route::get('/laporan/create', [ReportController::class, 'create'])
    ->name('laporan.create');

Route::post('/laporan', [ReportController::class, 'store'])
    ->name('laporan.store');

Route::get('/laporan/{report}/edit', [ReportController::class, 'edit'])
    ->name('laporan.edit');

Route::put('/laporan/{report}', [ReportController::class, 'update'])
    ->name('laporan.update');

Route::delete('/laporan/{report}', [ReportController::class, 'destroy'])
    ->name('laporan.destroy');

Route::get('/kategori', [CategoryController::class, 'index'])
    ->name('kategori');

Route::get('/kategori/create', [CategoryController::class, 'create'])
    ->name('kategori.create');

Route::post('/kategori', [CategoryController::class, 'store'])
    ->name('kategori.store');

Route::get('/kategori/{category}/edit', [CategoryController::class, 'edit'])
    ->name('kategori.edit');

Route::put('/kategori/{category}', [CategoryController::class, 'update'])
    ->name('kategori.update');

Route::delete('/kategori/{category}', [CategoryController::class, 'destroy'])
    ->name('kategori.destroy');

Route::get('/laporan/{report}', [ReportController::class, 'show'])
    ->name('laporan.show');

Route::get('/masyarakat', function () {
    return view('masyarakat.index');
})->name('masyarakat');

Route::get('/petugas', function () {
    return view('petugas.index');
})->name('petugas');

Route::get('/statistik', function () {
    return view('statistik.index');
})->name('statistik');

Route::get('/pengaturan', function () {
    return view('pengaturan.index');
})->name('pengaturan');

Route::get('/profil', function () {
    return view('profil.index');
})->name('profile');
