@extends('template')

@section('konten')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-semibold mb-4">Edit Siswa</h1>
                    @if ($errors->any())
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="nama_siswa" class="block text-gray-700 font-bold mb-2">Nama Siswa</label>
                            <input type="text" name="nama_siswa" id="nama_siswa" value="{{ $siswa->nama_siswa }}" class="border rounded px-3 py-2 w-full">
                        </div>
                        <div class="mb-4">
                            <label for="nis" class="block text-gray-700 font-bold mb-2">NIS</label>
                            <input type="text" name="nis" id="nis" value="{{ $siswa->nis }}" class="border rounded px-3 py-2 w-full">
                        </div>
                        <div class="mb-4">
                            <label for="alamat" class="block text-gray-700 font-bold mb-2">Alamat</label>
                            <input type="text" name="alamat" id="alamat" value="{{ $siswa->alamat }}" class="border rounded px-3 py-2 w-full">
                        </div>
                        <div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                            <a href="{{ route('siswa.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
