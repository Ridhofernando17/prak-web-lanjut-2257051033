<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Tampilkan profil user dengan data yang diterima dari UserController.
     */
    public function profile($nama, $npm, $nama_kelas)
    {
        // Kirim data ke view profile
        return view('profile', [
            'nama' => $nama,
            'npm' => $npm,
            'nama_kelas' => $nama_kelas
        ]);
    }
}
