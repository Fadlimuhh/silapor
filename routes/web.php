<?php

use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', function () {
    return view('landing.index');
})->name('landing');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/laporan', function () {
    return view('laporan.index');
})->name('laporan');

Route::get('/kategori', function () {
    return view('kategori.index');
})->name('kategori');

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

Route::get('/laporan/create', function () {
    return view('laporan.create');
})->name('laporan.create');

