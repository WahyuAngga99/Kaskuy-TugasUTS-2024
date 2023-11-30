<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pembayaran;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index()
    {
        // $pengeluaran = Pengeluaran::all();
        // return view('pengeluaran', compact('pengeluaran','kelas'));
        $pengeluarans = Pengeluaran::all();
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
        return view('pengeluaran', compact('pengeluarans','kelas'));
    }
//     public function index($id)
// {
//     $user = auth()->user();

//     if ($user->role === 'admin') {
//         // Admin can access all pengeluarans
//         $pengeluarans = Pengeluaran::all();
//         $kelas = Kelas::all(); // Admin dapat mengakses semua data kelas
//     } elseif ($user->role === 'petugas' || $user->role === 'siswa') {
//         $kelas_id = $user->kelas_id;
//         $kelas = Kelas::where('id', $kelas_id)->get(); // Hanya ambil data kelas dengan kelas_id petugas
//         $pengeluarans = Pengeluaran::whereIn('kelas_id', $kelas->pluck('id'))->get(); // Filter pengeluarans by kelas_id
//     } else {
//         return redirect()->back()->with('error', 'Invalid role');
//     }
//     $pengeluarans = Pengeluaran::where('kelas_id', $id)->get();

//     return view('pengeluaran', compact('pengeluarans', 'kelas'));
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
        return view('pengeluaran', compact('kelas'));
    }

  public function store(Request $request)
{
    $validatedData = $request->validate([
        'keterangan' => 'required',
        'nominal' => 'required',
        'tanggal' => 'required|date',
        'kelas_id' => 'required', // Pastikan validasi kelas_id ditambahkan di sini
    ]);

    $pengeluaran = new Pengeluaran();
    $pengeluaran->keterangan = $validatedData['keterangan'];
    $pengeluaran->nominal = $validatedData['nominal'];
    $pengeluaran->tanggal = $validatedData['tanggal'];
    $pengeluaran->kelas_id = $validatedData['kelas_id']; // Pastikan 'kelas_id' diisi di sini
    $pengeluaran->save();



    return redirect()->back()->with('success', 'Data pengeluaran berhasil disimpan');
}
public function destroy($id)
{
    $pengeluaran = Pengeluaran::findOrFail($id);
    $deletedNominal = $pengeluaran->nominal; // Simpan nominal yang akan dihapus
    $kelasId = $pengeluaran->kelas_id;

    // Hapus data pengeluaran
    $pengeluaran->delete();

    // Mengambil total nominal untuk kelas ini (pembayaran yang tersisa setelah pengeluaran dihapus)
    $total_nominals = Pembayaran::whereHas('siswa', function ($query) use ($kelasId) {
        $query->where('kelas_id', $kelasId);
    })->selectRaw('sum(nominal) as total_nominal')->first();

    $totalKeseluruhanNominal = $total_nominals->total_nominal ?? 0;
    $totalKeseluruhanNominal += $deletedNominal; // Tambahkan nominal yang dihapus ke total

    // Simpan kembali total keseluruhan nominal yang telah diperbarui pada kelas
    $kelas = Kelas::findOrFail($kelasId);
    $kelas->totalKeseluruhanNominal = $totalKeseluruhanNominal;
    $kelas->save();

    return redirect()->route('pengeluaran.index')->with('success', 'Data pengeluaran berhasil dihapus');
}



}
