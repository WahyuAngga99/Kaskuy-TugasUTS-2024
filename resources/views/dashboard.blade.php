@extends('template')
@section('konten')
<main class="mb-10 -mt-8">
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
      {{-- @if(auth()->user() && (auth()->user()->role === 'admin')) --}}
      <div class="flex-shrink w-full max-w-full px-4 lg:w-1/2">
          <div class="flex flex-row flex-wrap -mx-4">
              @foreach ($kelas as $kelasItem)
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
              @if ($loop->iteration % 2 == 0)
              </div>
              <div class="flex flex-row flex-wrap -mx-4">
              @endif
              @endforeach
          </div>
      </div>
      {{-- @endif --}}
        </div>
      </div>
    </div>
    <!-- row -->

    <!-- row -->

</div>
</div>
</div>

@if(auth()->user() && (auth()->user()->role === 'admin'))
<div class="container mx-auto -mt-80 mb-20 mr-20">
    <div class="mb-6">
        @if ($message = Session::get('success'))
        <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3 mb-6" role="alert">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
            <p>{{ $message }}</p>
        </div>
        @endif
    </div>
  <h1 class="text-2xl font-bold mb-4">User Table</h1>
  <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block mt-2 mb-4 text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button">
      Tambah User
    </button>
  <!-- Tabel untuk menampilkan data user -->
  <table class="min-w-full bg-white border border-gray-300 rounded-lg overflow-hidden">
      <thead class="bg-gray-200 text-gray-700">
          <tr>
              <th class="py-2 px-4">ID</th>
              <th class="py-2 px-4">Username</th>
              <th class="py-2 px-4">Email</th>
              <th class="py-2 px-4">Password</th>
              <!-- Tambahkan kolom-kolom lain yang diperlukan -->
          </tr>
      </thead>
      <tbody class="text-gray-600">
          <!-- Loop untuk setiap data user -->
          @foreach ($users as $user)
          <tr class="text-center">
              <td class="py-2 px-4">{{ $user->id }}</td>
              <td class="py-2 px-4">{{ $user->name }}</td>
              <td class="py-2 px-4">{{ $user->email }}</td>
              <td class="py-2 px-4">********</td>
              <!-- Tampilkan kolom-kolom lainnya jika ada -->
          </tr>
          @endforeach
      </tbody>
  </table>
</div>

<!-- Modal toggle -->


  <!-- Main modal -->
  <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      Terms of Service
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <div class="p-4 md:p-5 space-y-4">
                <form method="POST" action="{{ route('dashboard.store') }}" class="w-full max-w-sm mx-auto">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Name</label>
                        <input type="text" id="name" name="name" required autofocus
                            class="w-full px-3 py-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-3 py-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700">Password</label>
                        <input type="password" id="password" name="password" required autocomplete="new-password"
                            class="w-full px-3 py-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required
                            class="w-full px-3 py-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>

                    <div class="mb-4">
                        <label for="role" class="block text-gray-700">Role</label>
                        <select name="role" id="role" required
                             class="w-full px-3 py-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                        </select>
                    </div>

                    <div id="kelas_section" class="mb-4" style="display: none;">
                        <label for="kelas_id" class="block text-gray-700">Kelas</label>
                        <select name="kelas_id" id="kelas_id"
                             class="w-full px-3 py-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @foreach($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <button type="submit"
                                class="px-4 py-2 bg-indigo-500 text-white rounded hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Register</button>
                    </div>
                </form>
              </div>
              <!-- Modal footer -->
              <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                  {{-- <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button> --}}
                  <button data-modal-hide="default-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
              </div>
          </div>
      </div>
  </div>

</main>
  <script>
    document.getElementById('role').addEventListener('change', function() {
        var role = this.value;
        var kelasSection = document.getElementById('kelas_section');

        if (role === 'petugas'|| role === 'siswa') {
            kelasSection.style.display = 'block';
        } else {
            kelasSection.style.display = 'none';
        }
    });
</script>
@endif
@endsection
