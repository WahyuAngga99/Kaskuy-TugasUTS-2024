<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->role === 'admin') {
            $kelas = Kelas::all(); // Admin dapat mengakses semua data kelas
        } elseif ($user->role === 'petugas') {
            $kelas_id = $user->kelas_id;
            $kelas = Kelas::where('id', $kelas_id)->get(); // Hanya ambil data kelas dengan kelas_id petugas
        }elseif ($user->role === 'siswa') {
            $kelas_id = $user->kelas_id;
            $kelas = Kelas::where('id', $kelas_id)->get(); // Hanya ambil data kelas dengan kelas_id petugas
        } else {
            return redirect()->back()->with('error', 'Invalid role');
        }
        $users = User::all();
        // $kelas = Kelas::all();
        return view('dashboard', compact('kelas','users'));
    }
    public function create()
    {
        // Tampilkan formulir pendaftaran dengan pilihan kelas
        $kelas = \App\Models\Kelas::all(); // Sesuaikan dengan model dan nama kelas yang ada

        return view('dashboard', compact('kelas'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:admin,petugas,siswa',
            'kelas_id' => 'required_if:role,petugas,siswa`|exists:kelas,id',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role' => $validatedData['role'],
            'kelas_id' => $validatedData['kelas_id'] ?? null,
        ]);

        // Login user setelah berhasil mendaftar
        // auth()->login($user);

        return redirect('dashboard')->with(['berhasil'=>'Regsitar successfully']);
    }
}
