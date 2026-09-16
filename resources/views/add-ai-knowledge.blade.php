<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola AI Knowledge — EAGLES Basketball Academy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">
    <div class="max-w-6xl mx-auto">
        <!-- Navigation Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">🤖 Kelola Database AI Coach</h1>
                <p class="text-sm text-gray-500">Tambah dan hapus pengetahuan otomatis untuk bot AI Coach.</p>
            </div>
            <div class="flex items-center gap-3">
                @auth
                    <a href="{{ route('admin.registrations') }}"
                        class="text-sm font-semibold text-gray-700 hover:text-blue-600 bg-white px-3 py-1.5 rounded border border-gray-300 shadow-sm">
                        📋 Data Pendaftaran
                    </a>
                @endauth
                <a href="{{ route('landing') }}" class="text-sm font-semibold text-blue-600 hover:underline">
                    &larr; Beranda
                </a>
                @auth
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit"
                            class="text-sm font-semibold bg-red-600 text-white px-3 py-1.5 rounded hover:bg-red-700 transition">
                            Logout
                        </button>
                    </form>
                @endauth
            </div>
        </div>

        <!-- Alert Sukses -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Alert Validation Errors -->
        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Tambah Data -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 border-b pb-2">Tambah Tanya Jawab Baru</h2>
            <form action="{{ route('ai.manage.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2 text-sm">Keyword (Kata Kunci Utama)</label>
                        <input type="text" name="keyword" placeholder="Contoh: lokasi, biaya, jadwal"
                            class="w-full border border-gray-300 p-2.5 rounded text-sm focus:outline-none focus:border-blue-500"
                            required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2 text-sm">Contoh Pertanyaan Pengguna</label>
                        <input type="text" name="question" placeholder="Contoh: Dimana lokasi latihan basket?"
                            class="w-full border border-gray-300 p-2.5 rounded text-sm focus:outline-none focus:border-blue-500"
                            required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2 text-sm">Jawaban Otomatis AI</label>
                    <textarea name="answer" rows="3" placeholder="Tulis jawaban lengkap yang akan diberikan AI..."
                        class="w-full border border-gray-300 p-2.5 rounded text-sm focus:outline-none focus:border-blue-500"
                        required></textarea>
                </div>

                <button type="submit"
                    class="bg-blue-600 text-white font-semibold text-sm px-5 py-2.5 rounded hover:bg-blue-700 transition">
                    + Simpan Data AI
                </button>
            </form>
        </div>

        <!-- Tabel Daftar Data Pengetahuan -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 border-b pb-2">Daftar Pengetahuan AI Saat Ini</h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-200 text-left text-sm">
                    <thead>
                        <tr class="bg-gray-50 text-gray-700">
                            <th class="border border-gray-200 p-3 w-12 text-center">No</th>
                            <th class="border border-gray-200 p-3 w-36">Keyword</th>
                            <th class="border border-gray-200 p-3 w-64">Pertanyaan</th>
                            <th class="border border-gray-200 p-3">Jawaban AI</th>
                            <th class="border border-gray-200 p-3 w-24 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($knowledges as $index => $item)
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-200 p-3 text-center text-gray-500">{{ $index + 1 }}</td>
                                <td class="border border-gray-200 p-3 font-semibold text-blue-600">
                                    <span class="bg-blue-50 text-blue-700 px-2 py-1 rounded text-xs border border-blue-200">
                                        {{ $item->keyword }}
                                    </span>
                                </td>
                                <td class="border border-gray-200 p-3 font-medium text-gray-800">{{ $item->question }}</td>
                                <td class="border border-gray-200 p-3 text-gray-600 leading-relaxed">{{ $item->answer }}
                                </td>
                                <td class="border border-gray-200 p-3 text-center">
                                    <form action="{{ route('ai.manage.destroy', $item->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus data pengetahuan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white px-3 py-1 rounded text-xs font-semibold hover:bg-red-600 transition">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="border border-gray-200 p-6 text-center text-gray-500">
                                    Belum ada data pengetahuan AI. Gunakan form di atas untuk menambahkan pengetahuan
                                    pertama.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>