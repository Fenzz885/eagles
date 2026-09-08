@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md max-w-2xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Tambah Jadwal Latihan</h2>
        <a href="{{ route('schedules.index') }}" class="text-gray-600 hover:text-gray-800">← Kembali</a>
    </div>

    <form action="{{ route('schedules.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700">Judul Latihan</label>
            <input type="text" name="title" required class="mt-1 w-full p-2 border border-gray-300 rounded-md" placeholder="Contoh: Latihan Rutin U-16">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Hari</label>
                <input type="text" name="day" required class="mt-1 w-full p-2 border border-gray-300 rounded-md" placeholder="Contoh: Senin & Kamis">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Kelompok Usia</label>
                <input type="text" name="age_group" class="mt-1 w-full p-2 border border-gray-300 rounded-md" placeholder="Contoh: U-16">
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Jam Mulai</label>
                <input type="time" name="start_time" required class="mt-1 w-full p-2 border border-gray-300 rounded-md">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Jam Selesai</label>
                <input type="time" name="end_time" required class="mt-1 w-full p-2 border border-gray-300 rounded-md">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Lokasi</label>
            <input type="text" name="location" required class="mt-1 w-full p-2 border border-gray-300 rounded-md" placeholder="Contoh: Lapangan A EAGLES Court">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Deskripsi (Opsional)</label>
            <textarea name="description" rows="3" class="mt-1 w-full p-2 border border-gray-300 rounded-md"></textarea>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 font-semibold">
            Simpan Jadwal
        </button>
    </form>
</div>
@endsection