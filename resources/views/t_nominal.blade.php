{{-- @extends('template')

@section('konten')
    <form action="{{ route('kelas.perbarui') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nominal" class="block text-gray-700 text-sm font-bold mb-2">Nominal</label>
            <input type="text" id="nominal" name="nominal" class="border rounded-md py-2 px-4 w-full">
        </div>
        <div class="mb-4">
            <label for="kelas" class="block text-gray-700 text-sm font-bold mb-2">Kelas</label>
            <select name="kelas" id="kelas" class="border rounded-md py-2 px-4 w-full">
                @foreach($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Tambah
        </button>
    </form>
@endsection --}}





<div class="p-2 mx-auto">
    <!-- row -->
    <div class="flex flex-row flex-wrap">
      <div class="flex-shrink w-full max-w-full px-4">
        <p class="mt-3 mb-5 text-xl font-bold">Dashboard</p>
      </div>
      <div class="flex-shrink w-full max-w-full px-4 mb-6 lg:w-1/2">
        <div class="relative px-8 py-6 overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
          <div class="absolute text-indigo-500 ltr:-right-8 rtl:-left-8 -bottom-8">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="h-auto opacity-10 w-36 bi bi-hdd-stack" viewBox="0 0 16 16">
              <path d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z"/>
              <path d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
              <path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
            </svg>
          </div>
          <div class="relative">
            <h4 class="mb-3 text-2xl font-bold text-gray-800 dark:text-gray-200">Selamat Datang  {{ Auth::user()->name }}</h4>
            <form action="#" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="username" class="block text-sm font-medium text-gray-600 dark:text-gray-400">Username</label>
                    <input type="text" name="username" id="username" class="w-full p-2 mt-1 border border-gray-300 rounded-md dark:border-gray-600 focus:outline-none focus:ring focus:border-indigo-500" value=" {{ Auth::user()->email }}" required disabled>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-600 dark:text-gray-400">Password</label>
                    <input type="password" name="password" id="password" class="w-full p-2 mt-1 border border-gray-300 rounded-md dark:border-gray-600 focus:outline-none focus:ring focus:border-indigo-500" value="***********" required disabled>
                </div>
            </form>
          </div>
        </div>
      </div>
      @if(auth()->user() && (auth()->user()->role === 'admin'))
      @foreach ($kelas as $kelasItem)
      <div class="flex-shrink w-full max-w-full px-4 lg:w-1/2">
        <div class="flex flex-row flex-wrap -mx-4">
          <div class="flex-shrink w-1/2 max-w-full px-4 mb-6">
            <div class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
              <div class="flex flex-row">
                <div class="relative self-center w-16 h-16 text-center text-indigo-500 bg-transparent rounded-full sm:bg-indigo-100 dark:bg-gray-900 dark:bg-opacity-20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute w-8 h-8 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bi bi-hdd-stack" viewBox="0 0 16 16">
                      <path d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z"/>
                      <path d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
                      <path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                    </svg>
                  </div>
                <div class="ltr:ml-3 rtl:mr-3">
                    <h2 class="self-center mb-1">Nama Kelas</h2>
                    <p class="text-xl font-semibold">{{ $kelasItem->nama_kelas }}</p>
                    <p class="text-gray-600">
                      Jumlah Siswa: {{ $kelasItem->siswa->count() }}
                  </p>
                  </div>
              </div>
            </div>
          </div>
          @endforeach
          @endif
          {{-- <div class="flex-shrink w-1/2 max-w-full px-4 mb-6">
            <div class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
              <div class="flex flex-row">
                <div class="relative self-center w-16 h-16 text-center text-green-500 bg-transparent rounded-full sm:bg-green-100 dark:bg-gray-900 dark:bg-opacity-20">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute w-8 h-8 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bi bi-globe2" viewBox="0 0 16 16">
                    <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                  </svg>
                </div>
                <div class="ltr:ml-3 rtl:mr-3">
                  <h2 class="self-center mb-1">Pemasukan</h2>
                  <p class="text-xl font-semibold">Rp.{{ $keuangan->jumlah_kas }}</p>
                </div>
              </div>
            </div>
          </div> --}}
          {{-- <div class="self-center flex-shrink w-1/2 max-w-full px-4 mx-auto mt-8">
            <div class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
              <div class="flex flex-row">
                <div class="relative self-center w-16 h-16 text-center text-pink-500 bg-transparent rounded-full sm:bg-pink-100 dark:bg-gray-900 dark:bg-opacity-20">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute w-8 h-8 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bi bi-life-preserver" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm6.43-5.228a7.025 7.025 0 0 1-3.658 3.658l-1.115-2.788a4.015 4.015 0 0 0 1.985-1.985l2.788 1.115zM5.228 14.43a7.025 7.025 0 0 1-3.658-3.658l2.788-1.115a4.015 4.015 0 0 0 1.985 1.985L5.228 14.43zm9.202-9.202-2.788 1.115a4.015 4.015 0 0 0-1.985-1.985l1.115-2.788a7.025 7.025 0 0 1 3.658 3.658zm-8.087-.87a4.015 4.015 0 0 0-1.985 1.985L1.57 5.228A7.025 7.025 0 0 1 5.228 1.57l1.115 2.788zM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg>
                </div>
                <div class="ltr:ml-3 rtl:mr-3">
                  <h2 class="self-center mb-1">Pengeluaran</h2>
                  <p class="text-xl font-semibold">Rp. {{ $keuangan->total_pengeluaran }}</p>
                </div>
              </div>
            </div>
          </div> --}}
          {{-- <div class="flex-shrink w-1/2 max-w-full px-4 mb-6">
            <div class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
              <div class="flex flex-row">
                <div class="relative self-center w-16 h-16 text-center text-yellow-500 bg-transparent rounded-full sm:bg-yellow-100 dark:bg-gray-900 dark:bg-opacity-20">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute w-8 h-8 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bi bi-receipt" viewBox="0 0 16 16">
                    <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
                    <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                </div>
                <div class="ltr:ml-3 rtl:mr-3">
                  <h2 class="self-center mb-1">Invoice</h2>
                  <p class="text-xl font-semibold">31</p>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    <!-- row -->

    <!-- row -->

  </div>


  
