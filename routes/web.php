<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\PlayerController;
use App\Models\Gallery;
use App\Models\Player;

// Route untuk kelola pemain (hanya Admin yang login)
Route::middleware('auth')->group(function () {
    Route::get('/players/create', [PlayerController::class, 'create'])->name('players.create');
    Route::post('/players', [PlayerController::class, 'store'])->name('players.store');
    Route::delete('/players/{player}', [PlayerController::class, 'destroy'])->name('players.destroy');
});

// --- HALAMAN PUBLIK ---
Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');

// RUTE KONTAK (Dibersihkan dari duplikasi)
Route::view('/contact', 'contact')->name('contact');

// RUTE GALLERY (Ditambahkan ->name('gallery') agar login tidak error)
Route::get('/gallery', function () {
    $galleries = Gallery::latest()->get();
    $players   = Player::all();

    return view('gallery', compact('galleries', 'players'));
})->name('gallery');

// Registration Form
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// --- AUTENTIKASI ADMIN ---
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// --- FITUR ADMIN (Akses Terkunci Middleware Auth) ---
Route::middleware('auth')->group(function () {
    // Dashboard untuk Rekap Data Pendaftar Murid
    Route::get('/admin/pendaftar', [AdminDashboardController::class, 'index'])->name('admin.registrations');

    // Aksi CRUD Galeri
    Route::get('/galleries/create', [GalleryController::class, 'create'])->name('galleries.create');
    Route::post('/galleries', [GalleryController::class, 'store'])->name('galleries.store');
    Route::delete('/galleries/{gallery}', [GalleryController::class, 'destroy'])->name('galleries.destroy');

    // Aksi CRUD Tim
    Route::post('/team', [TeamController::class, 'store'])->name('team.store');
    Route::delete('/team/{player}', [TeamController::class, 'destroy'])->name('team.destroy');
});