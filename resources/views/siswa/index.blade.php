@extends('template')

@section('konten')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-semibold mb-4">Daftar Siswa</h1>
                    <a href="{{ route('siswa.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Tambah Siswa</a>

                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Nama Siswa</th>
                                <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">NIS</th>
                                <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Alamat</th>
                                <th class="px-6 py-3 bg-gray-100"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $data)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap">{{ $data->nama_siswa }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap">{{ $data->nis }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap">{{ $data->alamat }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                        {{-- <a href="{{ route('siswa.show', $data->id) }}" class="text-indigo-600 hover:text-indigo-900">Detail</a> --}}
                                        <a href="{{ route('siswa.edit', $data->id) }}" class="text-indigo-600 hover:text-indigo-900 ml-4">Edit</a>
                                        <form action="{{ route('siswa.destroy', $data->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="text-red-600 hover:text-red-900 ml-4">Hapus</button>
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
@endsection
