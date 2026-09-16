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
use App\Http\Controllers\AiChatController;
use App\Models\Gallery;
use App\Models\Player;

// --- HALAMAN PUBLIK ---
Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');

Route::view('/contact', 'contact')->name('contact');

Route::get('/gallery', function () {
    $galleries = Gallery::latest()->get();
    $players = Player::all();
    return view('gallery', compact('galleries', 'players'));
})->name('gallery');

// Rute untuk bertanya ke AI (Bisa diakses publik)
Route::post('/ai/ask', [AiChatController::class, 'ask'])->name('ai.ask');

// Registration Form
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// --- AUTENTIKASI ---
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// --- FITUR ADMIN (Akses Terkunci Middleware Auth) ---
Route::middleware('auth')->group(function () {

    // Kelola Pemain
    Route::get('/players/create', [PlayerController::class, 'create'])->name('players.create');
    Route::post('/players', [PlayerController::class, 'store'])->name('players.store');
    Route::delete('/players/{player}', [PlayerController::class, 'destroy'])->name('players.destroy');

    // Dashboard Pendaftar
    Route::get('/admin/pendaftar', [AdminDashboardController::class, 'index'])->name('admin.registrations');

    // Kelola Galeri
    Route::get('/galleries/create', [GalleryController::class, 'create'])->name('galleries.create');
    Route::post('/galleries', [GalleryController::class, 'store'])->name('galleries.store');
    Route::delete('/galleries/{gallery}', [GalleryController::class, 'destroy'])->name('galleries.destroy');

    // Kelola Tim
    Route::post('/team', [TeamController::class, 'store'])->name('team.store');
    Route::delete('/team/{player}', [TeamController::class, 'destroy'])->name('team.destroy');

    // Kelola Knowledge Base AI
    Route::get('/ai-manage', [AiChatController::class, 'index'])->name('ai.manage.index');
    Route::post('/ai-manage', [AiChatController::class, 'store'])->name('ai.manage.store');
    Route::delete('/ai-manage/{id}', [AiChatController::class, 'destroy'])->name('ai.manage.destroy');
});