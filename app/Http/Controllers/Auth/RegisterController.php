<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        // Tampilkan formulir pendaftaran dengan pilihan kelas
        $kelas = \App\Models\Kelas::all(); // Sesuaikan dengan model dan nama kelas yang ada

        return view('regrister', compact('kelas'));
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:admin,petugas',
            'kelas_id' => 'required_if:role,petugas`|exists:kelas,id',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role' => $validatedData['role'],
            'kelas_id' => $validatedData['kelas_id'] ?? null,
        ]);

        // Login user setelah berhasil mendaftar
        auth()->login($user);

        return redirect('/dashboard')->with(['berhasil'=>'Regsitar successfully']);
    }
}
