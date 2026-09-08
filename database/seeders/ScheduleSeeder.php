<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {
        Schedule::insert([
            ['day' => 'Senin', 'start_time' => '16:00:00', 'end_time' => '18:00:00', 'category' => 'U12', 'coach' => 'Coach A', 'location' => 'Eagles Main Court'],
            ['day' => 'Selasa', 'start_time' => '18:00:00', 'end_time' => '20:00:00', 'category' => 'U16', 'coach' => 'Coach B', 'location' => 'Eagles Main Court'],
            ['day' => 'Rabu', 'start_time' => '16:00:00', 'end_time' => '18:00:00', 'category' => 'U12', 'coach' => 'Coach A', 'location' => 'Eagles Outdoor Court'],
            ['day' => 'Kamis', 'start_time' => '19:00:00', 'end_time' => '21:00:00', 'category' => 'Elite', 'coach' => 'Coach A', 'location' => 'Eagles Main Court'],
            ['day' => 'Sabtu', 'start_time' => '08:00:00', 'end_time' => '10:00:00', 'category' => 'Semua Kategori (Friendly)', 'coach' => 'Coach B', 'location' => 'Eagles Main Court'],
        ]);
    }
}