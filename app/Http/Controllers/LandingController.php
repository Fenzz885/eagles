<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Gallery;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // Ambil semua data jadwal tanpa filter is_active
        $schedules = Schedule::all();
        
        // Ambil data galeri terbaru (misal: 6 foto terakhir)
        $galleries = Gallery::latest()->take(6)->get();

        return view('welcome', compact('schedules', 'galleries'));
    }
}