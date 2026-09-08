@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md max-w-2xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Edit Jadwal Latihan</h2>
        <a href="{{ route('schedules.index') }}" class="text-gray-600 hover:text-gray-800">← Kembali</a>
    </div>

    <form action="{{ route('schedules.update', $schedule->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-gray-700">Judul Latihan</label>
            <input type="text" name="title" value="{{ $schedule->title }}" required class="mt-1 w-full p-2 border border-gray-300 rounded-md">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Hari</label>
                <input type="text" name="day" value="{{ $schedule->day }}" required class="mt-1 w-full p-2 border border-gray-300 rounded-md">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Kelompok Usia</label>
                <input type="text" name="age_group" value="{{ $schedule->age_group }}" class="mt-1 w-full p-2 border border-gray-300 rounded-md">
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Jam Mulai</label>
                <input type="time" name="start_time" value="{{ $schedule->start_time }}" required class="mt-1 w-full p-2 border border-gray-300 rounded-md">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Jam Selesai</label>
                <input type="time" name="end_time" value="{{ $schedule->end_time }}" required class="mt-1 w-full p-2 border border-gray-300 rounded-md">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Lokasi</label>
            <input type="text" name="location" value="{{ $schedule->location }}" required class="mt-1 w-full p-2 border border-gray-300 rounded-md">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Deskripsi (Opsional)</label>
            <textarea name="description" rows="3" class="mt-1 w-full p-2 border border-gray-300 rounded-md">{{ $schedule->description }}</textarea>
        </div>

        <button type="submit" class="w-full bg-yellow-500 text-white py-2 px-4 rounded-md hover:bg-yellow-600 font-semibold">
            Perbarui Jadwal
        </button>
    </form>
</div>
@endsection