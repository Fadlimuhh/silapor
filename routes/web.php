<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Report;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ProfileController;

// =====================================================
// LANDING PAGE
// =====================================================

Route::get('/', function () {
    return view('landing.index');
})->name('landing');


// =====================================================
// AUTH
// =====================================================

// Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');


// Register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.process');


// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// =====================================================
// DASHBOARD
// =====================================================

// DASHBOARD ADMIN
Route::get('/dashboard', function () {

    $totalLaporan = Report::count();

    $laporanMenunggu = Report::where('status', 'menunggu')->count();

    $laporanDiproses = Report::where('status', 'diproses')->count();

    $laporanSelesai = Report::where('status', 'selesai')->count();

    $laporanTerbaru = Report::with(['user', 'category'])
        ->latest()
        ->take(5)
        ->get();

    return view('dashboard.index', compact(
        'totalLaporan',
        'laporanMenunggu',
        'laporanDiproses',
        'laporanSelesai',
        'laporanTerbaru'
    ));

})
->middleware(['auth', 'role:admin'])
->name('dashboard');

// DASHBOARD PETUGAS
Route::get('/dashboard/petugas', function () {

    $totalLaporan = Report::count();

    $laporanMenunggu = Report::where('status', 'menunggu')->count();

    $laporanDiproses = Report::where('status', 'diproses')->count();

    $laporanSelesai = Report::where('status', 'selesai')->count();

    $laporanTerbaru = Report::with(['user', 'category'])
        ->latest()
        ->take(5)
        ->get();

    return view('dashboard.petugas', compact(
        'totalLaporan',
        'laporanMenunggu',
        'laporanDiproses',
        'laporanSelesai',
        'laporanTerbaru'
    ));

})
->middleware(['auth', 'role:petugas'])
->name('petugas.dashboard');

// DASHBOARD WARGA
Route::get('/dashboard/warga', function () {

    $userId = Auth::id();

    $totalLaporan = Report::where('user_id', $userId)->count();

    $laporanMenunggu = Report::where('user_id', $userId)
        ->where('status', 'menunggu')
        ->count();

    $laporanDiproses = Report::where('user_id', $userId)
        ->where('status', 'diproses')
        ->count();

    $laporanSelesai = Report::where('user_id', $userId)
        ->where('status', 'selesai')
        ->count();

    $laporanTerbaru = Report::with(['user', 'category'])
        ->where('user_id', $userId)
        ->latest()
        ->take(5)
        ->get();

    return view('dashboard.warga', compact(
        'totalLaporan',
        'laporanMenunggu',
        'laporanDiproses',
        'laporanSelesai',
        'laporanTerbaru'
    ));

})
->middleware(['auth', 'role:warga'])
->name('warga.dashboard');


// =====================================================
// LAPORAN
// =====================================================

// Melihat laporan
Route::get('/laporan', [ReportController::class, 'index'])
    ->middleware('auth')
    ->name('laporan');


// Membuat laporan
Route::get('/laporan/create', [ReportController::class, 'create'])
    ->middleware(['auth', 'role:warga'])
    ->name('laporan.create');

Route::post('/laporan', [ReportController::class, 'store'])
    ->middleware(['auth', 'role:warga'])
    ->name('laporan.store');


// Detail laporan
Route::get('/laporan/{report}', [ReportController::class, 'show'])
    ->middleware('auth')
    ->name('laporan.show');


// Edit laporan
Route::get('/laporan/{report}/edit', [ReportController::class, 'edit'])
    ->middleware('auth')
    ->name('laporan.edit');

Route::put('/laporan/{report}', [ReportController::class, 'update'])
    ->middleware('auth')
    ->name('laporan.update');


// Hapus laporan
Route::delete('/laporan/{report}', [ReportController::class, 'destroy'])
    ->middleware('auth')
    ->name('laporan.destroy');


// Petugas mengubah status laporan
Route::put('/laporan/{report}/status', [ReportController::class, 'updateStatus'])
    ->middleware(['auth', 'role:petugas'])
    ->name('laporan.updateStatus');

Route::put('/laporan/{report}/tanggapan', [ReportController::class, 'updateTanggapan'])
    ->middleware(['auth', 'role:petugas'])
    ->name('laporan.updateTanggapan');


// =====================================================
// KATEGORI - ADMIN
// =====================================================

Route::get('/kategori', [CategoryController::class, 'index'])
    ->middleware(['auth', 'role:admin'])
    ->name('kategori');

Route::get('/kategori/create', [CategoryController::class, 'create'])
    ->middleware(['auth', 'role:admin'])
    ->name('kategori.create');

Route::post('/kategori', [CategoryController::class, 'store'])
    ->middleware(['auth', 'role:admin'])
    ->name('kategori.store');

Route::get('/kategori/{category}/edit', [CategoryController::class, 'edit'])
    ->middleware(['auth', 'role:admin'])
    ->name('kategori.edit');

Route::put('/kategori/{category}', [CategoryController::class, 'update'])
    ->middleware(['auth', 'role:admin'])
    ->name('kategori.update');

Route::delete('/kategori/{category}', [CategoryController::class, 'destroy'])
    ->middleware(['auth', 'role:admin'])
    ->name('kategori.destroy');


// =====================================================
// MASYARAKAT - ADMIN
// =====================================================

Route::resource('masyarakat', MasyarakatController::class)
    ->middleware(['auth', 'role:admin']);


// =====================================================
// PETUGAS - ADMIN
// =====================================================

Route::resource('petugas', PetugasController::class)
    ->parameters(['petugas' => 'petugas'])
    ->middleware(['auth', 'role:admin']);


// =====================================================
// STATISTIK - ADMIN
// =====================================================

Route::get('/statistik', function () {

    $totalLaporan = Report::count();

    $laporanMenunggu = Report::where('status', 'menunggu')->count();

    $laporanDiproses = Report::where('status', 'diproses')->count();

    $laporanSelesai = Report::where('status', 'selesai')->count();

    $laporanDitolak = Report::where('status', 'ditolak')->count();

    $laporanPerKategori = Report::with('category')
        ->get()
        ->groupBy(function ($report) {
            return $report->category->nama ?? 'Tanpa Kategori';
        })
        ->map(function ($reports) {
            return $reports->count();
        });

    return view('statistik.index', compact(
        'totalLaporan',
        'laporanMenunggu',
        'laporanDiproses',
        'laporanSelesai',
        'laporanDitolak',
        'laporanPerKategori'
    ));
})
->middleware(['auth', 'role:admin'])
->name('statistik');


// =====================================================
// PENGATURAN - ADMIN
// =====================================================

Route::get('/pengaturan', [SettingController::class, 'index'])
    ->middleware(['auth', 'role:admin'])
    ->name('pengaturan');

Route::put('/pengaturan', [SettingController::class, 'update'])
    ->middleware(['auth', 'role:admin'])
    ->name('pengaturan.update');


// =====================================================
// PROFIL - SEMUA USER
// =====================================================

Route::get('/profil', [ProfileController::class, 'index'])
    ->middleware('auth')
    ->name('profile');

Route::put('/profil', [ProfileController::class, 'update'])
    ->middleware('auth')
    ->name('profile.update');

Route::put('/profil/password', [ProfileController::class, 'updatePassword'])
    ->middleware('auth')
    ->name('profile.password');