<?php

// File: app/Http/Controllers/KelasController.php
namespace App\Http\Controllers;
use App\Models\Pembayaran;
use App\Models\Pengeluaran;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpWord\Element\Table;
use PhpOffice\PhpWord\Shared\Converter;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

class KelasController extends Controller
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
        // Admin dapat mengakses semua data kelas

        // $kelas = Kelas::all();
        return view('template', compact('kelas'));
    }

    public function exportToWord($id)
    {
        $kelas = Kelas::findOrFail($id);
        $siswa = $kelas->siswa;
        $total_nominals = Pembayaran::whereHas('siswa', function ($query) use ($id) {
            $query->where('kelas_id', $id);
        })->selectRaw('sum(nominal) as total_nominal, nis')->groupBy('nis')->get();
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();

        $table = $section->addTable();
        $table->addRow();
        $table->addCell(4000)->addText('No Absen');
        $table->addCell(4000)->addText('NIS');
        $table->addCell(4000)->addText('Nama Siswa');
        $table->addCell(4000)->addText('Alamat');
        $table->addCell(4000)->addText('Nominal');

        foreach ($siswa as $index => $data) {
            $table->addRow();
            $table->addCell(4000)->addText($index + 1);
            $table->addCell(4000)->addText($data->nis);
            $table->addCell(4000)->addText($data->nama_siswa);
            $table->addCell(4000)->addText($data->alamat);

            // Get the total nominal data for this particular student
            $nominal = $total_nominals->where('nis', $data->nis)->first();

            if ($nominal) {
                $table->addCell(4000)->addText($nominal->total_nominal);
            } else {
                $table->addCell(4000)->addText('No Data');
            }
        }

        $filename = 'Data_Siswa_Kelas_' . $kelas->id . '.docx';
        $path = storage_path('app/public/exports/' . $filename);
        $phpWord->save($path);

        // Redirect ke file yang diunduh
        return response()->download($path)->deleteFileAfterSend(true);
    }

    // public function cariSiswa(Request $request)
    // {
    //     $kelas = Kelas::all();
    //     $keyword = $request->input('keyword');
    //     $siswa = Siswa::where('nama_siswa', 'LIKE', "%$keyword%")
    //                 ->orWhere('nis', 'LIKE', "%$keyword%")
    //                 ->orWhere('alamat', 'LIKE', "%$keyword%")
    //                 ->get();

    //     return view('kelas.show', compact('siswa','kelas'));
    // }
    // public function cari(Request $request)
    // {
    //     // Mencari siswa berdasarkan kriteria pencarian
    //     $cari = $request->input('cari');
    //     $siswa = Siswa::where('nama_siswa', 'LIKE', "%$cari%")
    //         ->orWhere('nis', 'LIKE', "%$cari%")
    //         ->orWhere('alamat', 'LIKE', "%$cari%")
    //         ->with('kelas') // Mengambil informasi kelas dari siswa
    //         ->paginate(10);

    //     // Mengambil total nominal pembayaran untuk setiap NIS dalam kelas ini
    //     $total_nominals = Pembayaran::whereHas('siswa', function ($query){
    //         $query->where('kelas_id');
    //     })->selectRaw('sum(nominal) as total_nominal, nis')->groupBy('nis')->get();

    //     // Menghitung total keseluruhan nominal pembayaran
    //     $totalKeseluruhanNominal = $total_nominals->sum('total_nominal');

    //     // Menghitung total pengeluaran untuk kelas ini
    //     $total_pengeluaran = Pengeluaran::where('kelas_id')->sum('nominal');

    //     // Mengurangi total keseluruhan nominal dengan total pengeluaran
    //     $totalKeseluruhanNominal -= $total_pengeluaran;

    //     // Mengambil informasi kelas
    //     $kelas = Kelas::all();

    //     return view('kelas.show', compact('siswa', 'kelas', 'totalKeseluruhanNominal'));
    // }



    public function show($id, Request $request)
    {

        $kelas = Kelas::findOrFail($id);
        $cari = $request->input('cari');

        $siswa = Siswa::where('kelas_id', $id);

        if ($cari) {
            $siswa = $siswa->where(function ($query) use ($cari) {
                $query->where('nama_siswa', 'like', '%' . $cari . '%')
                      ->orWhere('nis', 'like', '%' . $cari . '%')
                      ->orWhere('alamat', 'like', '%' . $cari . '%');
            });
        }

        $siswa = $siswa->get();


        // Mengambil total nominal pembayaran untuk setiap NIS dalam kelas ini
        $total_nominals = Pembayaran::whereHas('siswa', function ($query) use ($id) {
            $query->where('kelas_id', $id);
        })->selectRaw('sum(nominal) as total_nominal, nis')->groupBy('nis')->get();

        // Menghitung total keseluruhan nominal pembayaran
        $totalKeseluruhanNominal = $total_nominals->sum('total_nominal');

        // Menghitung total pengeluaran untuk kelas ini
        $total_pengeluaran = Pengeluaran::where('kelas_id', $id)->sum('nominal');

        // Mengurangi total keseluruhan nominal dengan total pengeluaran
        $totalKeseluruhanNominal -= $total_pengeluaran;

        return view('kelas.show', compact('kelas', 'total_nominals', 'totalKeseluruhanNominal', 'total_pengeluaran','cari'));
    }
    public function create()
    {
        $kelas = Kelas::all();
        return view('kelas.create', compact('kelas'));

    }

    public function store(Request $request)
    {
        $kelas = new Kelas();
        $kelas->nama_kelas = $request->input('nama_kelas');
        $kelas->save();

        return redirect()->route('kelas.create')->with('success', 'Kelas berhasil ditambahkan.');
    }


    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->nama_kelas = $request->input('nama_kelas');
        $kelas->save();

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus.');
    }
}
