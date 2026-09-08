@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Kelola Jadwal Latihan</h2>
        <a href="{{ route('schedules.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Tambah Jadwal
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border-collapse border border-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="border p-3 text-left">Judul Latihan</th>
                <th class="border p-3 text-left">Hari & Jam</th>
                <th class="border p-3 text-left">Lokasi</th>
                <th class="border p-3 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($schedules as $schedule)
            <tr class="hover:bg-gray-50">
                <td class="border p-3 font-semibold">{{ $schedule->title }} <br> <span class="text-sm text-gray-500">{{ $schedule->age_group }}</span></td>
                <td class="border p-3">{{ $schedule->day }} <br> <span class="text-sm text-gray-500">{{ $schedule->start_time }} - {{ $schedule->end_time }}</span></td>
                <td class="border p-3">{{ $schedule->location }}</td>
                <td class="border p-3 flex justify-center gap-2">
                    <a href="{{ route('schedules.edit', $schedule->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm hover:bg-yellow-600">Edit</a>
                    <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus jadwal ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="border p-4 text-center text-gray-500">Belum ada data jadwal.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection