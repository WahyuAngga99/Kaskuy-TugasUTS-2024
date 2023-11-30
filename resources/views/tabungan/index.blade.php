@extends('/template')

@section('konten')
    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-semibold mb-4">Tabel Tabungan</h1>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Siswa</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIS</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nominal Tabungan</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ambil Tabungan</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($tabungan as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->siswa->nama_siswa }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->siswa->nis }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->kembalian }}</td>
                                    @if(auth()->user() && (auth()->user()->role === 'admin'|| auth()->user()->role === 'petugas'))
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <form action="{{ route('tabungan.ambil', $item->siswa->nis) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="number" name="ambil_tabungan" class="mt-1 bg-gray-100 px-2 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Jumlah yang akan diambil">
                                            <button type="submit" class="mt-2 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Ambil</button>
                                        </form>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
