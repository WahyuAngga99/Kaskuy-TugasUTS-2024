@extends('template')

@section('konten')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-4 md:px-0 mt-20">

                    {{-- <p>Total Pemasukan: {{ $totalKeseluruhanNominal }}</p> --}}
                    <div class="flex-shrink w-full md:w-auto px-4">
                    <div class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
                        <div class="flex flex-row">
                        <div class="relative self-center w-16 h-16 text-center text-blue-500 bg-transparent rounded-full sm:bg-blue-100 dark:bg-gray-900 dark:bg-opacity-20">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute w-8 h-8 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bi bi-hdd-stack" viewBox="0 0 16 16">
                                <path d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z"/>
                                <path d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
                                <path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                              </svg>
                        </div>
                        <div class="ltr:ml-3 rtl:mr-3">
                          <h2 class="self-center mb-1">Nama Kelas</h2>
                          <p class="text-xl font-semibold"> {{ $kelas->nama_kelas }}</p>
                          <p class="text-gray-600">
                            Jumlah Siswa: {{ $kelas->siswa->count() }}
                        </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink w-full md:w-auto px-4">
                    <div class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
                        <div class="flex flex-row">
                        <div class="relative self-center w-16 h-16 text-center text-green-500 bg-transparent rounded-full sm:bg-green-100 dark:bg-gray-900 dark:bg-opacity-20">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute w-8 h-8 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bi bi-globe2" viewBox="0 0 16 16">
                            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                          </svg>
                        </div>
                        <div class="ltr:ml-3 rtl:mr-3">
                          <h2 class="self-center mb-1">Pemasukan</h2>
                          <p class="text-xl font-semibold">Rp.{{ $totalKeseluruhanNominal }}</p>
                          <p>Bulan ini</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="self-center flex-shrink w-full md:w-auto px-4">
                    <div class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
                      <div class="flex flex-row">
                        <div class="relative self-center w-16 h-16 text-center text-pink-500 bg-transparent rounded-full sm:bg-pink-100 dark:bg-gray-900 dark:bg-opacity-20">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute w-8 h-8 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bi bi-life-preserver" viewBox="0 0 16 16">
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm6.43-5.228a7.025 7.025 0 0 1-3.658 3.658l-1.115-2.788a4.015 4.015 0 0 0 1.985-1.985l2.788 1.115zM5.228 14.43a7.025 7.025 0 0 1-3.658-3.658l2.788-1.115a4.015 4.015 0 0 0 1.985 1.985L5.228 14.43zm9.202-9.202-2.788 1.115a4.015 4.015 0 0 0-1.985-1.985l1.115-2.788a7.025 7.025 0 0 1 3.658 3.658zm-8.087-.87a4.015 4.015 0 0 0-1.985 1.985L1.57 5.228A7.025 7.025 0 0 1 5.228 1.57l1.115 2.788zM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                          </svg>
                        </div>
                        <div class="ltr:ml-3 rtl:mr-3">
                          <h2 class="self-center mb-1">Pengeluaran</h2>
                          <p class="text-xl font-semibold">Rp. {{ $total_pengeluaran }}</p>
                          <p>Bulan ini</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @if(auth()->user() && (auth()->user()->role === 'admin'|| auth()->user()->role === 'petugas'))
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <h1 class="text-2xl font-semibold mb-4">Detail Kelas</h1>
                    <p><strong>ID:</strong> {{ $kelas->id }}</p> --}}
                    {{-- <p><strong>Nama Kelas:</strong> {{ $kelas->nama_kelas }}</p> --}}
                    {{-- <p>Total Pengeluaran: {{ $total_pengeluaran }}</p> --}}


<div class="bg-gray-100 px-4 py-4 rounded ">
                    <h2 class="text-xl font-semibold mb-4">Tambah Pengeluaran</h2>
                    <form action="{{ route('pengeluaran.store') }}" method="POST" class="flex flex-wrap justify-between">
                        @csrf
                        <input type="text" id="kelas_id" name="kelas_id" value="{{ $kelas->id }}" hidden>

                        <div class="w-full md:w-1/3 mb-4">
                            <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                            <input type="text" id="keterangan" name="keterangan" class="w-full px-3 py-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <div class="w-full md:w-1/3 mb-4">
                            <label for="nominal" class="block text-sm font-medium text-gray-700">Nominal</label>
                            <input type="text" id="nominal" name="nominal" class="w-full px-3 py-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <div class="w-full md:w-1/3 mb-4">
                            <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal" class="w-full px-3 py-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <div class="w-full flex items-center justify-end mt-4 md:justify-start md:w-full">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-4">Simpan</button>
                            {{-- @if(auth()->user() && (auth()->user()->role === 'admin'|| auth()->user()->role === 'petugas')) --}}
                            @if(auth()->user() && (auth()->user()->role === 'admin'|| auth()->user()->role === 'petugas'))
                                <a href="{{ route('pengeluaran.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mr-4"> Lihat Data Pengeluaran</a>
                                <a href="{{ route('kelas.export.word', ['id' => $kelas->id]) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-4">Export to Word</a>
                                <a href="{{ route('tabungan.index', $kelas->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Lihat Data Tabungan</a>
                                @endif

                            {{-- @endif --}}
                        </div>
                    </form>

                </div>
                @endif
                    <h2 class="text-xl font-semibold mt-4 mb-4">Daftar Siswa:</h2>
                    <!-- Contoh: Jika halaman menampilkan detail kelas -->
{{-- <a href="{{ route('siswa.export.pdf', ['kelas_id' => $kelas->id]) }}" class="mt-6 mb-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Export to PDF</a> --}}
<form class="flex items-center MB-6" action="{{ route('kelas.show', $kelas->id) }}"  method="GET">
    @csrf
    <label for="voice-search" class="sr-only">Search</label>
    <div class="relative w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7v3a5.006 5.006 0 0 1-5 5H6a5.006 5.006 0 0 1-5-5V7m7 9v3m-3 0h6M7 1h2a3 3 0 0 1 3 3v5a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3Z"/>
            </svg>
        </div>
        <input type="text" value="{{ $cari }}" name="cari" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
    </div>
    <button type="submit" value="cari" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
    </button>
</form>


                    <div class="overflow-x-auto mt-6">
                        <table class="min-w-full border-collapse border border-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">No Absen</th>
                                    <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">NIS</th>
                                    <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Nama Siswa</th>
                                    <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Alamat</th>
                                    <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Nominal</th>
                                    @if(auth()->user() && (auth()->user()->role === 'admin'))
                                    <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Action</th>
                                    @endif
                                    <!-- Tambah kolom lain jika diperlukan -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelas->siswa as $index => $siswa)
                                <tr class="border-b border-gray-200">
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $index + 1 }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $siswa->nis }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $siswa->nama_siswa }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $siswa->alamat }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @foreach($total_nominals as $total)
                                                @if($total->nis == $siswa->nis)
                                                    {{ $total->total_nominal }}
                                                @endif
                                            @endforeach
                                        </td>
                                        @if(auth()->user() && (auth()->user()->role === 'admin'))
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="{{ route('siswa.edit', $siswa->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                            </form>
                                        </td>
                                        @endif
                                        <!-- Tambah kolom lain jika diperlukan -->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                    {{-- <div class="mt-4">
                        @if(auth()->user() && (auth()->user()->role === 'admin'|| auth()->user()->role === 'petugas'))
                        <a href="{{ route('tabungan.index', $kelas->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Lihat Data Tabungan</a>
                        @endif
                    </div> --}}

    {{-- @if(auth()->user() && (auth()->user()->role === 'admin'|| auth()->user()->role === 'petugas'))

    <div class="mt-4">
        <a href="{{ route('pengeluaran.index') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"> Lihat Data Pengeluaran</a>
    </div>
    @endif --}}

                    <div class="mt-6">
                        <a href="{{ url('/')}}" class="text-indigo-600 hover:text-indigo-900">Kembali</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
