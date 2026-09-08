<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // Menampilkan form registrasi
    public function index()
    {
        return view('register'); // Pastikan nama file bladenya register.blade.php
    }

    // Memproses data form
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required|string|max:255',
            'tempat' => 'required|string|max:255',
            'dd' => 'required|numeric|min:1|max:31',
            'mm' => 'required|string',
            'yyyy' => 'required|numeric|min:1990|max:' . date('Y'),
            'kategori' => 'required|string',
            'wa' => 'required|string|max:20',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:5120', // Maks 5MB
        ]);

        // Mengubah Bulan menjadi angka untuk format tanggal
        $months = [
            'Januari' => '01', 'Februari' => '02', 'Maret' => '03', 'April' => '04',
            'Mei' => '05', 'Juni' => '06', 'Juli' => '07', 'Agustus' => '08',
            'September' => '09', 'Oktober' => '10', 'November' => '11', 'Desember' => '12'
        ];
        
        $monthNum = $months[$request->mm];
        
        // Gabungkan tanggal, bulan, tahun menjadi format YYYY-MM-DD
        $tanggal_lahir = $request->yyyy . '-' . $monthNum . '-' . str_pad($request->dd, 2, '0', STR_PAD_LEFT);

        // Menangani Upload Foto
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            // Simpan foto di folder storage/app/public/players_photos
            $fotoPath = $request->file('foto')->store('players_photos', 'public');
        }

        // Simpan ke Database
        Player::create([
            'nama' => $request->nama,
            'tempat' => $request->tempat,
            'tanggal_lahir' => $tanggal_lahir,
            'kategori' => $request->kategori,
            'wa' => $request->wa,
            'foto' => $fotoPath,
        ]);

        // Redirect kembali ke halaman registrasi dengan pesan sukses
        return redirect()->route('register')->with('success', 'Pendaftaran berhasil! Tim admin akan segera menghubungi Anda via WhatsApp.');
    }
}
