<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Kelas;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    public function index($id)
    {
        // Mengambil data kembalian untuk siswa dalam kelas ini
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
        $tabungan = Pembayaran::whereHas('siswa', function ($query) use ($id) {
            $query->where('kelas_id', $id);
        })->get();

        return view('tabungan.index', compact('tabungan','kelas'));
    }

    // public function ambilTabungan1(Request $request, $nis)
    // {
    //     $jumlahAmbil = $request->input('ambil_tabungan');

    //     // Validasi input untuk memastikan jumlah tabungan yang diminta adalah angka positif
    //     if (!is_numeric($jumlahAmbil) || $jumlahAmbil <= 0) {
    //         return redirect()->route('tabungan.index')->with('error', 'Jumlah tabungan yang diminta tidak valid.');
    //     }

    //     // Ambil data pembayaran berdasarkan NIS
    //     $pembayaran = Pembayaran::whereHas('siswa', function ($query) use ($nis) {
    //         $query->where('nis', $nis);
    //     })->first();

    //     // Periksa apakah pembayaran ditemukan
    //     if ($pembayaran) {
    //         $pembayaran->kembalian -= $jumlahAmbil;

    //         if ($pembayaran->kembalian <= 0) {
    //             $classId = $pembayaran->siswa->kelas_id;
    //             $pembayaran->delete();
    //             return redirect()->route('tabungan.index', ['id' => $classId])->with('success', 'Tabungan habis, data pembayaran dihapus.');
    //         } else {
    //             $pembayaran->save();
    //             return redirect()->route('tabungan.index', ['id' => $pembayaran->siswa->kelas_id])->with('success', 'Tabungan berhasil diambil.');
    //         }
    //     }

    //     return redirect()->route('tabungan.index')->with('error', 'Data pembayaran tidak ditemukan.');

    // }

    public function ambilTabungan(Request $request, $nis)
    {
        $jumlahAmbil = $request->input('ambil_tabungan');

        // Ambil data pembayaran berdasarkan NIS
        $pembayaran = Pembayaran::whereHas('siswa', function ($query) use ($nis) {
            $query->where('nis', $nis);
        })->first();

        // Kurangi tabungan sesuai jumlah yang diambil
        $pembayaran->kembalian -= $jumlahAmbil;
        $pembayaran->save();

        return redirect()->route('tabungan.index', $pembayaran->siswa->kelas_id)->with('success', 'Tabungan berhasil diambil.');
    }


}
