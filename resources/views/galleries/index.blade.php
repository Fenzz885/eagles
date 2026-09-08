@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Kelola Galeri Foto</h2>
        <a href="{{ route('galleries.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Tambah Foto
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @forelse($galleries as $gallery)
        <div class="border rounded-lg overflow-hidden shadow-sm flex flex-col justify-between">
            <div>
                <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-xs bg-blue-100 text-blue-800 font-semibold px-2 py-0,5 rounded">
                        {{ $gallery->category ?? 'Umum' }}
                    </span>
                    <h3 class="font-bold text-lg mt-2 text-gray-800">{{ $gallery->title }}</h3>
                    <p class="text-sm text-gray-600 mt-1">{{ $gallery->caption }}</p>
                </div>
            </div>
            <div class="p-4 border-t bg-gray-50 flex justify-between items-center">
                <a href="{{ route('galleries.edit', $gallery->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm hover:bg-yellow-600">Edit</a>
                <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus foto ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700">Hapus</button>
                </form>
            </div>
        </div>
        @empty
        <div class="col-span-3 text-center py-8 text-gray-500 border border-dashed rounded-lg">
            Belum ada foto di galeri.
        </div>
        @endforelse
    </div>
</div>
@endsection