@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md max-w-2xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Edit Foto Galeri</h2>
        <a href="{{ route('galleries.index') }}" class="text-gray-600 hover:text-gray-800">← Kembali</a>
    </div>

    <form action="{{ route('galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-gray-700">Judul Kegiatan / Foto</label>
            <input type="text" name="title" value="{{ $gallery->title }}" required class="mt-1 w-full p-2 border border-gray-300 rounded-md">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Kategori Galeri</label>
            <select name="category" class="mt-1 w-full p-2 border border-gray-300 rounded-md">
                <option value="Kegiatan" {{ $gallery->category == 'Kegiatan' ? 'selected' : '' }}>Kegiatan / Event Latihan</option>
                <option value="Siswa" {{ $gallery->category == 'Siswa' ? 'selected' : '' }}>Siswa / Murid Terdaftar</option>
                <option value="Prestasi" {{ $gallery->category == 'Prestasi' ? 'selected' : '' }}>Prestasi / Match</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Foto Saat Ini</label>
            <img src="{{ asset('storage/' . $gallery->image) }}" class="w-32 h-32 object-cover my-2 rounded border">
            <label class="block text-sm font-medium text-gray-700 mt-2">Ganti Gambar (Kosongkan jika tidak diganti)</label>
            <input type="file" name="image" class="mt-1 w-full p-2 border border-gray-300 rounded-md">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Caption / Deskripsi Singkat</label>
            <textarea name="caption" rows="3" class="mt-1 w-full p-2 border border-gray-300 rounded-md">{{ $gallery->caption }}</textarea>
        </div>

        <button type="submit" class="w-full bg-yellow-500 text-white py-2 px-4 rounded-md hover:bg-yellow-600 font-semibold">
            Perbarui Foto
        </button>
    </form>
</div>
@endsection