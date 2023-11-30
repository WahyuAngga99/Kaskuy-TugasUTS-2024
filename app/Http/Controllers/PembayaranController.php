<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\Kelas;

class PembayaranController extends Controller
{
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
        return view('pembayaran.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nominal' => 'required',
            'nis' => 'required',
            'jumlah_bayar' => 'required',
            'kembalian' => 'required',
        ]);

        $siswa = Siswa::where('nis', $request->nis)->firstOrFail();

        $kelasNama = $request->nama_kelas;
        $kelas = Kelas::where('nama_kelas', $kelasNama)->first();

        if ($kelas) {
            $kelasId = $kelas->id;

            $pembayaran = new Pembayaran();
            $pembayaran->fill($validatedData);
            $pembayaran->kelas_id = $kelasId;
            $pembayaran->siswa()->associate($siswa);
            $pembayaran->save();

            return redirect()->route('pembayaran.create')->with('success', 'Pembayaran Berhasil');
        } else {
            return redirect()->route('pembayaran.create')->with('error', 'Nama kelas tidak ditemukan');
        }
    }





    public function getStudentInfo(Request $request)
    {
        $nis = $request->nis;
        $siswa = Siswa::where('nis', $nis)->with('kelas')->first();

        if ($siswa) {
            $nama_kelas = $siswa->kelas->nama_kelas ?? null;

            return response()->json([
                'nama_siswa' => $siswa->nama_siswa,
                'nama_kelas' => $nama_kelas,
            ]);
        } else {
            return response()->json(['error' => 'Siswa tidak ditemukan'], 404);
        }
    }


}
