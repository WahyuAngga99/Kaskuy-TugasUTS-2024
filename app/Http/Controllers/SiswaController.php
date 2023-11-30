<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;
use PDF;
class SiswaController extends Controller
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
        $siswa = siswa::all(); // Admin dapat mengakses semua data kelas

        // $kelas = Kelas::all();
        return view('siswa.create', compact('siswa','kelas'));
    }

    public function cariSiswa(Request $request)
    {
        $kelas = Kelas::all();
        $keyword = $request->input('keyword');
        $siswa = Siswa::where('nama_siswa', 'LIKE', "%$keyword%")
                    ->orWhere('nis', 'LIKE', "%$keyword%")
                    ->orWhere('alamat', 'LIKE', "%$keyword%")
                    ->get();

        return view('kelas.show', compact('siswa','kelas'));
    }


    // public function exportPDF(Request $request)
    // {
    //     $kelasId = $request->kelas_id;
    //     $kelas = Kelas::findOrFail($kelasId); // Ganti dengan cara Anda mendapatkan kelas

    //     $siswas = Siswa::where('kelas_id', $kelasId)->get();
    //     $total_nominals = // Dapatkan total nominal untuk setiap siswa

    //     $pdf = PDF::loadView('pdf.siswa', compact('siswas', 'total_nominals', 'kelas'));

    //     return $pdf->download('siswa_kelas_' . $kelas->nama_kelas . '.pdf');
    // }

    public function create()
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
        $siswa = siswa::all();

        return view('siswa.create', compact('kelas','siswa'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_siswa' => 'required',
            'nis' => 'required|unique:siswa',
            'alamat' => 'required',
            'kelas_id' => 'required', // pastikan kelas_id diperlukan
            // Tambahkan validasi lain jika diperlukan
        ]);

        Siswa::create($validatedData);
        return redirect()->route('siswa.create')->with('success', 'Data siswa berhasil ditambahkan');
    }

    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
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
        return view('siswa.edit', compact('siswa','kelas'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_siswa' => 'required',
            'nis' => 'required|unique:siswa,nis,'.$id,
            'alamat' => 'required',
            // Tambahkan validasi lain jika diperlukan
        ]);

        $data = Siswa::findOrFail($id);
        $data->update($validatedData);
        return redirect()->route('siswa.create')->with('success', 'Data siswa berhasil diperbarui');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.create')->with('success', 'Data siswa berhasil dihapus');
    }
}
