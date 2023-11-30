@extends('template')

@section('konten')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-semibold mb-4">Edit Kelas</h1>

                    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="nama_kelas" class="block text-gray-700 font-bold mb-2">Nama Kelas</label>
                            <input type="text" name="nama_kelas" id="nama_kelas" value="{{ $kelas->nama_kelas }}" class="border rounded px-3 py-2 w-full">
                        </div>

                        <!-- Tambahkan input untuk kolom lain jika diperlukan -->

                        <div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                            <a href="{{ route('kelas.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
