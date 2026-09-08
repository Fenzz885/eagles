<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
        // Mengambil semua data jadwal dari database
        $schedules = Schedule::all();
        
        // Mengirim data ke view schedule.blade.php
        return view('schedule', compact('schedules'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'day'         => 'required|string|max:100',
            'start_time'  => 'required',
            'end_time'    => 'required',
            'location'    => 'required|string|max:255',
            'age_group'   => 'nullable|string|max:100',
            'description' => 'nullable|string',
        ]);

        Schedule::create($validated);

        return redirect()->route('schedules.index')->with('success', 'Jadwal berhasil ditambahkan!');
    }

    public function edit(Schedule $schedule)
    {
        return view('schedules.edit', compact('schedule'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'day'         => 'required|string|max:100',
            'start_time'  => 'required',
            'end_time'    => 'required',
            'location'    => 'required|string|max:255',
            'age_group'   => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'is_active'   => 'boolean',
        ]);

        $schedule->update($validated);

        return redirect()->route('schedules.index')->with('success', 'Jadwal berhasil diperbarui!');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return redirect()->route('schedules.index')->with('success', 'Jadwal berhasil dihapus!');
    }
}