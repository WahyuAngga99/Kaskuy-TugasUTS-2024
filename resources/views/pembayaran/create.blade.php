@extends('/template')

@section('konten')
<div class="py-6">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="mb-6">
                    @if ($message = Session::get('success'))
                    <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3 mb-6" role="alert">
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                </div>
                <h1 class="text-2xl font-semibold mb-4">Form Pembayaran</h1>
                <form action="{{ route('pembayaran.store') }}" method="POST" id="pembayaranForm">
                    @csrf

                    <!-- Bagian pertama -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-4">
                        <div class="col-span-1">
                            <label for="nis" class="block text-sm font-medium text-gray-700">NIS</label>
                            <input type="text" id="nis" name="nis" class="w-full px-3 py-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="col-span-1">
                            <label for="nama_siswa" class="block text-sm font-medium text-gray-700">Nama Siswa</label>
                            <input type="text" id="nama_siswa" name="nama_siswa" readonly class="w-full px-3 py-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 bg-gray-100 cursor-not-allowed">
                        </div>
                        <div class="col-span-1">
                            <label for="nama_kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                            <input type="text" id="nama_kelas" name="nama_kelas" readonly class="w-full px-3 py-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 bg-gray-100 cursor-not-allowed">
                        </div>
                    </div>

                    <!-- Bagian kedua -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div class="col-span-1">
                            <label for="nominal" class="block text-sm font-medium text-gray-700">Nominal</label>
                            <input type="text" id="nominal" name="nominal" class="w-full px-3 py-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="col-span-1">
                            <label for="jumlah_bayar" class="block text-sm font-medium text-gray-700">Pembayaran</label>
                            <input type="text" id="jumlah_bayar" name="jumlah_bayar" class="w-full px-3 py-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="col-span-1">
                            <label for="kembalian" class="block text-sm font-medium text-gray-700">Kembalian</label>
                            <input type="text" id="kembalian" name="kembalian" readonly class="w-full px-3 py-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 bg-gray-100 cursor-not-allowed">
                        </div>
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#nis').on('change', function () {
                var nis = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: '/pembayaran/getStudentInfo',
                    data: {nis: nis},
                    success: function (response) {
                        if (response.error) {
                            alert(response.error);
                        } else {
                            $('#nama_siswa').val(response.nama_siswa);
                            $('#nama_kelas').val(response.nama_kelas);
                        }
                    }
                });
            });

            $('#nominal, #jumlah_bayar').on('input', function () {
                var nominal = $('#nominal').val();
                var pembayaran = $('#jumlah_bayar').val();
                var kembalian = parseFloat(pembayaran) - parseFloat(nominal);
                if (!isNaN(kembalian)) {
                    $('#kembalian').val(kembalian.toFixed(2));
                }
            });
        });
    </script>
@endsection
