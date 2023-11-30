<!-- index.blade.php -->

@extends('template')

@section('konten')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-6 bg-white border-b border-gray-200">

                    <h1 class="text-2xl font-semibold mb-4">Data Pengeluaran</h1>

                    <div class="mt-8">
                        <table class="min-w-full border-collapse border border-gray-200">
                            <thead>
                                <tr>
                                    <th>Keterangan</th>
                                    <th>Nominal</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pengeluarans as $pengeluaran)
                                    <tr class="text-center">
                                        <td>{{ $pengeluaran->keterangan }}</td>
                                        <td>{{ $pengeluaran->nominal }}</td>
                                        <td>{{ $pengeluaran->tanggal }}</td>
                                        <td>
                                            <form action="{{ route('pengeluaran.destroy', $pengeluaran->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
