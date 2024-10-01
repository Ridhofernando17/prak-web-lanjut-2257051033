<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;  // Import model Kelas
use App\Models\UserModel;

class UserController extends Controller
{
    /**
     * Show form to create a new user.
     */
    public function create()
    {
        // Ambil semua kelas dan kirim ke view
        return view('create', [
            'kelas' => Kelas::all(),
        ]);
    }

    /**
     * Store the newly created user.
     */
    public function store(Request $request) // Tambahkan Request $request
    {
        // Lakukan validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        // Buat user baru
        $user = UserModel::create($validatedData);

        // Muat relasi kelas untuk mendapatkan nama_kelas
        $user->load('kelas');

        // Tampilkan data user di view profile
        return view('profile', [
            'nama' => $user->nama,
            'npm' => $user->npm,
            'nama_kelas' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan',
        ]);
    }
}
