<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    // Tampilkan form tambah pemain
    public function create()
    {
        return view('players.create');
    }

    // Proses simpan data pemain baru
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'city'          => 'required|string|max:100',
            'birth_date'    => 'required|date',
            'team_category' => 'required|string',
            'position'      => 'required|string',
            'image'         => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Upload foto
        $imagePath = $request->file('image')->store('players', 'public');

        Player::create([
            'name'          => $request->name,
            'city'          => $request->city,
            'birth_date'    => $request->birth_date,
            'team_category' => $request->team_category,
            'position'      => $request->position,
            'image'         => $imagePath,
        ]);

        return redirect('/gallery')->with('success', 'Data pemain berhasil ditambahkan!');
    }

    // Hapus pemain
    public function destroy(Player $player)
    {
        if ($player->image) {
            Storage::disk('public')->delete($player->image);
        }

        $player->delete();

        return redirect('/gallery')->with('success', 'Data pemain berhasil dihapus!');
    }
}