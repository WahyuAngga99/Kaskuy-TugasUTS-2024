<!--
Template Name: Taildash - Tailwind Dashboard Admin Template
Author: Aribudin
Website: https://www.tailwinddashboard.com
Contact: support@tailwinddashboard.com
Purchase: https://themes.tailwindtemplate.net/taildash
License: You must have a valid license purchased only from official store (the above link) in order to legally use the theme for your project.
-->
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Taildash | Tailwind Dashboard Template</title>
  <meta name="description" content="Tailwind Dashboard Template">
  <link rel="stylesheet" id="stylesheet" href="src/css/style.css">
  <link rel="stylesheet" href="src/css/customizer.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&amp;display=swap" rel="stylesheet">
  <link rel="icon" href="src/img/favicon.png">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-sans text-base font-normal text-gray-600 dark:text-gray-400 dark:bg-gray-900">
  <div x-data="{ open: false }" class="overflow-x-hidden bg-gray-100 wrapper dark:bg-gray-900 dark:bg-opacity-40">
    <nav id="sidebar-menu" x-description="Mobile menu" x-bind:aria-expanded="open" :class="{ 'w-64 md:w-0': open, 'w-0 md:w-64': !(open) }" class="fixed w-64 h-screen transition-all duration-500 ease-in-out bg-white shadow-sm dark:bg-gray-800">
      <div class="h-full overflow-y-auto scrollbars">
        <div class="py-5 text-center mh-18">
          <a href="#" class="relative">
            <h2 class="px-4 overflow-hidden text-2xl font-semibold text-gray-200 max-h-9 hidden-compact">
              <svg xmlns="http://www.w3.org/2000/svg" class="inline-block -mt-1 w-7 h-7 ltr:mr-2 rtl:ml-2" viewBox="0 0 300.000000 300.000000">
                <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                  <path class="text-pink-500" d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                  -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                  -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                  5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                  58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                  465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z"/>
                  <path class="text-indigo-500" d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                  0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                  -687 428 -110 29 -111 28 -153 -37z"/>
                  <path class="text-indigo-500" d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                  l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                  62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                  -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                  -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                  217 -10 16 -14 14 -45 -18z"/>
                </g>
              </svg><span class="text-gray-700 dark:text-gray-200">KasKuy</span>
            </h2>
            <h2 class="hidden mx-auto text-3xl font-semibold logo-compact">
              <svg xmlns="http://www.w3.org/2000/svg" class="inline-block -mt-1 w-7 h-7" viewBox="0 0 300.000000 300.000000">
                <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                  <path class="text-pink-500" d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                  -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                  -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                  5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                  58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                  465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z"/>
                  <path class="text-indigo-500" d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                  0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                  -687 428 -110 29 -111 28 -153 -37z"/>
                  <path class="text-indigo-500" d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                  l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                  62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                  -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                  -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                  217 -10 16 -14 14 -45 -18z"/>
                </g>
              </svg>
            </h2>
          </a>
        </div>

        <ul id="side-menu" x-data="{selected:1}" class="w-full float-none flex flex-col font-medium ltr:pl-1.5 rtl:pr-1.5">
          <li class="relative">
            <a  class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="{{url('dashboard')}}">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-house-door" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
              </svg>
              <span>Dashboards</span>
            </a>
          </li>

          @if(auth()->user() && (auth()->user()->role === 'admin'))

          <li>
              <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="{{ route('kelas.create') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-calendar4-week" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
                <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
            </svg>
            <!-- <i class="mr-2 fas fa-calendar-alt"></i> -->
            <span>Tambah Kleas</span>
        </a>
    </li>
    <li>
        <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="{{route('siswa.create')}}">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-calendar4-week" viewBox="0 0 16 16">
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
                <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-calendar-alt"></i> -->
              <span>Tambah Siswa</span>
            </a>
        </li>
        @endif
          {{-- <li>
            <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="{{route('kelas.baca')}}">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-calendar4-week" viewBox="0 0 16 16">
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
                <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-calendar-alt"></i> -->
              <span>Tambah Nominal</span>
            </a>
          </li> --}}
          <li class="relative">
            <a  :class="{ 'text-indigo-500 dark:text-gray-300': selected == 5 }" @click="selected !== 5 ? selected = 5 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-layout-sidebar-inset" viewBox="0 0 16 16">
                <path d="M14 2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                <path d="M3 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-columns"></i> -->
              <span>Kelas</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 5, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 5) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 5, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 5) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            @if($kelas)
            @foreach($kelas as $item)
                <ul x-show="selected == 5" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
                    <li class="relative">
                        @if(isset($item->id))
                            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ route('kelas.show', $item->id) }}">{{ $item->nama_kelas }}</a>
                        @endif
                    </li>
                </ul>
            @endforeach

        @endif

          <li>
            <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="{{route('pembayaran.create')}}">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-calendar4-week" viewBox="0 0 16 16">
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
                <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-calendar-alt"></i> -->
              <span>Pembayaran</span>
            </a>
          </li>
          {{-- <li>
            <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="{{url('tagihan')}}">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-calendar4-week" viewBox="0 0 16 16">
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
                <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-calendar-alt"></i> -->
              <span>Tagihan</span>
            </a>
          </li> --}}

          <!-- dropdown -->
          <li class="relative">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-shop" viewBox="0 0 16 16">
                        <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                    </svg>
                    <!-- <i class="mr-2 fas fa-store"></i> -->
                    <span>Log Out</span>
                    <!-- caret -->

                </button>
            </form>

            <!-- dropdown menu -->
            {{-- <ul x-show="selected == 2" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative">
                <a class="block clear-both w-full px-6 py-2 whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="ecommerce/product.html">Products</a>
              </li>
              <li class="relative">
                <a class="block clear-both w-full px-6 py-2 whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="ecommerce/product-detail.html">Product Details</a>
              </li>

            </ul> --}}
          </li>

          <!-- dropdown -->


          <!-- dropdown -->




          <!-- dropdown -->













        </ul>

        <!-- Banner -->
        <!-- <div class="px-4 box-banner">
          <div class="p-4 my-8 text-center bg-gray-300 bg-opacity-50 rounded-lg dark:bg-gray-700">
            <h4 class="inline-block mb-2 font-bold">Sales Report</h4>
            <div class="mb-3 text-sm">
              Monthly sales report is ready for download!
            </div>


          </div>
        </div>end banner -->
      </div>
    </nav>

    <div x-bind:aria-expanded="open" :class="{ 'ltr:ml-64 ltr:-mr-64 md:ltr:ml-0 md:ltr:mr-0 rtl:mr-64 rtl:-ml-64 md:rtl:mr-0 md:rtl:ml-0': open, 'ltr:ml-0 ltr:mr-0 md:ltr:ml-64 rtl:mr-0 rtl:ml-0 md:rtl:mr-64': !(open) }" class="flex flex-col min-h-screen transition-all duration-500 ease-in-out ltr:ml-64 rtl:mr-64">
      <!-- Navbar -->
      <nav :class="{ 'ltr:left-64 ltr:-right-64 md:ltr:left-0 md:ltr:right-0 rtl:right-64 rtl:-left-64 md:rtl:right-0 md:rtl:left-0': open, 'ltr:left-0 ltr:right-0 md:ltr:left-64 rtl:right-0 rtl:left-0 md:rtl:right-64': !(open) }" class="fixed z-50 flex flex-row items-center justify-between px-6 py-2 mt-0 pb-6 transition-all duration-500 ease-in-out bg-white shadow-sm flex-nowrap ltr:left-0 md:ltr:left-64 ltr:right-0 rtl:right-0 md:rtl:right-64 rtl:left-0 dark:bg-gray-800" id="desktop-menu">
        <!-- sidenav button-->
        <button id="navbartoggle" type="button" class="inline-flex items-center justify-center text-gray-800 hover:text-gray-600 dark:text-gray-300 dark:hover:text-gray-200 focus:outline-none focus:ring-0" aria-controls="sidebar-menu" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
          <span class="sr-only">Mobile menu</span>
          <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed" class="hidden w-8 h-8" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
            <path class="hidden md:block" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            <path class="md:hidden" d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
          </svg>

          <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block w-8 h-8" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
            <path class="md:hidden" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            <path class="hidden md:block" d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
          </svg>
          <!-- <i class="text-2xl fas fa-bars"></i> -->
        </button>

        <!-- Search -->
        {{-- <form class="hidden mx-5 sm:inline-block md:hidden lg:inline-block">
          <div class="relative flex flex-wrap items-stretch w-full">
            <input type="text" class="relative flex-grow flex-shrink max-w-full px-4 py-2 overflow-x-auto text-sm leading-5 text-gray-800 bg-gray-100 border border-gray-100 ltr:rounded-l rtl:rounded-r focus:outline-none focus:border-gray-200 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Search…" aria-label="Search">
            <div class="flex -mr-px">
              <button class="flex items-center px-4 py-2 leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 ltr:-ml-1 rtl:-mr-1 ltr:rounded-r rtl:rounded-l hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <!-- <i class="fas fa-search"></i> -->
              </button>
            </div>
          </div>
        </form> --}}

        <!-- menu -->
        <ul class="flex mt-2 ltr:ml-auto rtl:mr-auto">
          <!-- Customizer (Only for demo purpose) -->
          {{-- <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="flex px-4 py-3 text-sm rounded-full focus:outline-none" aria-controls="mobile-canvas" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
              <span class="sr-only">Customizer</span>
              <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
              </svg>
              <!-- <i class="text-2xl fas fa-cog"></i> -->
            </a>

            <!-- Right Offcanvas -->
            <div class="fixed inset-0 z-50 w-full h-full" id="mobile-canvas" x-description="Mobile menu" x-show="open" style="display: none;">
              <!-- bg open -->
              <span class="fixed inset-x-0 top-0 w-full h-full bg-gray-900 bg-opacity-70"></span>

              <nav id="mobile-nav" class="fixed top-0 z-40 flex flex-col h-full overflow-auto bg-white ltr:right-0 rtl:left-0 w-72 dark:bg-gray-800 scrollbars show" x-show="open" @click.away="open=false" x-description="Mobile menu" role="menu" aria-orientation="vertical" aria-labelledby="navbartoggle" x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="ltr:translate-x-full rtl:-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="ltr:translate-x-full rtl:-translate-x-full">
                <div class="p-6 text-gray-100 bg-indigo-500 border-b border-gray-200 dark:border-gray-700">
                  <div class="flex flex-row justify-between">
                    <h3 class="font-bold text-md">Customizer</h3>
                    <button @click="open = false" type="button" class="inline-block w-4 h-4">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block text-gray-100 bi bi-x-lg" viewBox="0 0 16 16" id="x-lg"><path d="M1.293 1.293a1 1 0 011.414 0L8 6.586l5.293-5.293a1 1 0 111.414 1.414L9.414 8l5.293 5.293a1 1 0 01-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 01-1.414-1.414L6.586 8 1.293 2.707a1 1 0 010-1.414z"></path></svg>
                      <!-- <i class="fas fa-times"></i> -->
                    </Button>
                  </div>
                </div>
                <div class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Color Scheme</p>
                  <div class="flex flex-row">
                    <div class="relative inline-block w-8 py-3 mt-0.5 ltr:mr-3 rtl:ml-3 align-middle select-none transition duration-200 ease-in">
                      <input type="checkbox" name="lightdark" id="lightdark" class="absolute block w-5 h-5 bg-white border-2 rounded-full appearance-none cursor-pointer toggle-checkbox dark:bg-gray-900 dark:border-gray-700"/>
                      <label for="lightdark" class="block h-5 overflow-hidden bg-gray-300 rounded-full cursor-pointer toggle-label dark:bg-gray-700"></label>
                    </div>
                    <p class="self-center text-sm text-gray-500">Light and Dark</p>
                  </div>
                </div>
                <div class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Sidebar Color</p>
                  <div class="flex flex-row">
                    <div class="relative inline-block w-8 py-3 mt-0.5 ltr:mr-3 rtl:ml-3 align-middle select-none transition duration-200 ease-in">
                      <input type="checkbox" name="sidecolor" id="sidecolor" class="absolute block w-5 h-5 bg-white border-2 rounded-full appearance-none cursor-pointer toggle-checkbox dark:bg-gray-900 dark:border-gray-700"/>
                      <label for="sidecolor" class="block h-5 overflow-hidden bg-gray-300 rounded-full cursor-pointer toggle-label dark:bg-gray-700"></label>
                    </div>
                    <p class="self-center text-sm text-gray-500">Light and Dark</p>
                  </div>
                </div>
                <div class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Direction</p>
                  <div class="flex flex-row">
                    <div class="relative inline-block w-8 py-3 mt-0.5 ltr:mr-3 rtl:ml-3 align-middle select-none transition duration-200 ease-in">
                      <input  type="checkbox" name="rtlmode" id="rtlmode" class="absolute block w-5 h-5 bg-white border-2 rounded-full appearance-none cursor-pointer toggle-checkbox dark:bg-gray-900 dark:border-gray-700"/>
                      <label for="rtlmode" class="block h-5 overflow-hidden bg-gray-300 rounded-full cursor-pointer toggle-label dark:bg-gray-700"></label>
                    </div>
                    <p class="self-center text-sm text-gray-500">LTR and RTL</p>
                  </div>
                </div>
                <div class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Layout</p>
                  <div class="relative mb-3">
                    <a href="index.html" class="inline-block py-2 px-2.5 mt-2 rounded text-sm text-gray-500 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:hover:bg-opacity-60 hover:text-indigo-500 hover:bg-gray-200 self-center">Default</a>
                    <a href="layout-compact.html" class="inline-block py-2 px-2.5 mt-2 rounded text-sm text-gray-500 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:hover:bg-opacity-60 hover:text-indigo-500 hover:bg-gray-200 self-center">Compact</a>
                    <a href="layout-topnav.html" class="inline-block py-2 px-2.5 mt-2 rounded text-sm text-gray-500 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:hover:bg-opacity-60 hover:text-indigo-500 hover:bg-gray-200 self-center">Topnav</a>
                  </div>
                </div>
                <div id="customcolor" class="px-6 py-3 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Primary Color</p>
                  <div class="relative my-3">
                    <div id="custred" title="red" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-red-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custyellow" title="yellow" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-yellow-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custgreen" title="green" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-green-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custblue" title="blue" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-blue-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custpurple" title="purple" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-purple-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custpink" title="pink" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-pink-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custindigo" title="reset color" class="inline-block cursor-pointer">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                      <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
                    </svg></div>
                  </div>
                </div>
                <div class="px-6 pt-6">
                  <div x-data="{ open: true }" x-show="open" class="relative flex items-center justify-between p-3 mb-4 text-yellow-900 bg-yellow-100 rounded-lg">
                    <div>
                      How to apply? please read the documentation on <a href="docs/customize.html" class="font-semibold underline">Customize page</a>
                    </div>
                    <button type="button" @click="open = false">
                      <span class="text-2xl">×</span>
                      <!-- <i class="fas fa-times"></i> -->
                    </button>
                  </div>
                </div>
              </nav>
            </div>
          </li> --}}
          <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="flex px-3 text-sm rounded-full focus:outline-none" id="user-menu-button" @click="open = ! open">
              <div class="relative">
                <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                  </svg>
                <span title="online" class="flex justify-center absolute -bottom-0.5 ltr:right-1 rtl:left-1 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
              </div>
              <span class="self-center hidden md:block ltr:ml-1 rtl:mr-1"></span>
            </a>
            <ul x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md" style="min-width:12rem;display: none;">
              <li class="relative">
                <div class="flex flex-row flex-wrap items-center px-3 py-4 -mx-4">
                  <div class="flex-shrink w-1/3 max-w-full px-4">
                  </div>
                  <div class="flex-shrink w-2/3 max-w-full px-4 ltr:pl-1 rtl:pr-1">
                    <div class="font-bold"><a href="#" class="text-gray-800 dark:text-gray-300 hover:text-indigo-500">Ari Budin</a></div>
                    <div class="mt-1 text-sm text-gray">Professional Front end developer.</div>
                  </div>
                </div>
              </li>
              <li class="relative">
                <hr class="my-0 border-t border-gray-200 dark:border-gray-700">
              </li>
              <li class="relative">
                <a class="block clear-both w-full px-6 py-2 whitespace-nowrap hover:text-indigo-500" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-gear" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-cog"></i> --> Settings &amp; Privacy
                </a>
              </li>
              <li class="relative">
                <a class="block clear-both w-full px-6 py-2 whitespace-nowrap hover:text-indigo-500" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-question-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-question-circle"></i> --> Help &amp; Support
                </a>
              </li>
              <li class="relative">
                <a class="block clear-both w-full px-6 py-2 whitespace-nowrap hover:text-indigo-500" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-translate" viewBox="0 0 16 16">
                    <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                    <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-language"></i> --> Change Language
                  </a>
              </li>
              <li class="relative">
                <hr class="my-0 border-t border-gray-200 dark:border-gray-700">
              </li>
              <li class="relative">
                <a class="block clear-both w-full px-6 py-2 whitespace-nowrap hover:text-indigo-500" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-sign-out-alt"></i> --> Sign out
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- End Navbar -->
<main class="px-4 pt-40">

        @yield('konten')
</main>


      {{-- <footer class="p-6 bg-white shadow-sm dark:bg-gray-800">
        <div class="mx-auto">
          <div class="flex flex-row flex-wrap -mx-4">
            <div class="flex-shrink w-full max-w-full px-4 text-center md:w-1/2 md:ltr:text-left md:rtl:text-right">
              <ul class="ltr:pl-0 rtl:pr-0">
                <li class="inline-block ltr:mr-3 rtl:ml-3">
                  <a class="hover:text-indigo-500" href="#">Support</a>
                </li>
                <li class="inline-block ltr:mr-3 rtl:ml-3">
                  <a class="hover:text-indigo-500" href="#">Help Center</a>
                </li>
                <li class="inline-block ltr:mr-3 rtl:ml-3">
                  <a class="hover:text-indigo-500" href="#">Privacy</a>
                </li>
                <li class="inline-block ltr:mr-3 rtl:ml-3">
                  <a class="hover:text-indigo-500" href="#">Terms of Service</a>
                </li>
              </ul>
            </div>
            <div class="flex-shrink w-full max-w-full px-4 text-center md:w-1/2 md:ltr:text-right md:rtl:text-left">
              <p class="mt-3 mb-0 md:mt-0">
                <a href="index.html" class="hover:text-indigo-500">Tailnet</a> | All right reserved
              </p>
            </div>
          </div>
        </div>
      </footer> --}}
    </div>
  </div>

  @vite('resources/js/customizer.js')
  @vite('resources/js/cdn.min.js')

</body>

</html>
