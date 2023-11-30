<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.js"></script>

  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gradient-to-b from-gray-200 to-white">
    <header class="absolute top-0 left-0 z-10 flex items-center w-full bg-transparant" data-aos="fade-down">
        <div class="container">
            <div class="relative flex items-center justify-between">
                <div class="px-4">
                    <a href="#home" class="flex flex-wrap block py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block mr-4 -mt-1 w-7 h-7 ltr:mr-2 rtl:ml-2" viewBox="0 0 300.000000 300.000000">
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
                          <h1 class="text-xl font-extrabold text-primary">KasKuy</h1>
                    </a>

                </div>
                <div class="flex items-center px-4 ">
                    <button id="humburger" name="humburger" type="button" class="absolute block right-5 lg:hidden">
                        <span class="transition duration-300 ease-in-out origin-top-left humburger-line"></span>
                        <span class="transition duration-300 ease-in-out humburger-line"></span>
                        <span class="transition duration-300 ease-in-out origin-bottom-left humburger-line"></span>
                    </button>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg
            rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent
            lg:max-w-full lg:shadow-none lg:rounded-none  ">
                <ul class="block lg:flex">
                    <li class="group ">
                        <a href="index1.php" class="flex py-2 mx-8 text-base text-dark group-hover:text-orange-500 dark:text-white">Home</a>
                    </li>

                    <li class="group ">
                        <a href="booking.html" class="flex py-2 mx-8 text-base text-dark group-hover:text-orange-500 dark:text-white">About</a>
                    </li>
                    <li class="group ">
                        <a href="{{route('login')}}" class="flex py-2 mx-8 text-base text-dark group-hover:text-orange-500 dark:text-white">Login</a>
                    </li>


                    {{-- <li class="flex items-center pl-8 mt-3 mr-4 lg:mt-0">
                            <div class="flex">
                                <span class="mr-2 text-sm text-slate-500 dark:text-white">Light</span>
                                <input type="checkbox" class="hidden" id="dark-toggle" >
                                <label for="dark-toggle">
                                    <div class="flex items-center h-5 p-1 rounded-full cursor-pointer w-9 bg-slate-500">
                                        <div class="w-4 h-4 transition duration-300 bg-white rounded-full toggle-circle">

                                        </div>
                                    </div>
                                </label>
                                <span class="ml-2 text-sm text-slate-500 dark:text-white">Dark</span>
                            </div>
                        </li> --}}
                </ul>
            </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full p-4">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->

                <!-- Modal body -->
                <div class="p-4 space-y-4 md:p-5">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 border-t border-gray-200 rounded-b md:p-5 dark:border-gray-600">
                    <button data-modal-hide="static-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                    <button data-modal-hide="static-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                </div>
            </div>
        </div>
    </div> --}}


    <section id="home" class="pb-16 pt-36 dark:bg-dark">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="self-center w-full px-4 lg:w-1/2" data-aos="fade-right">
                    <h1 class="text-base font-semibold text-primary md:text-sm ">Hallo Semua,
                        <span class="block mt-1 text-2xl font-bold text-primary lg:text-3xl ">Hallo<b class="ml-4 typing dark:text-white text-dark"></b></span>
                    </h1>
                    <p class="mt-4 mb-10 font-medium leading-relaxed text-secondary">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta nihil facilis eius corporis pariatur recusandae minima sequi laudantium aut at, amet, non id dignissimos dolores. Quibusdam sed ullam maxime. Distinctio.
                    </p>
                    <a href="#" class="px-8 py-3 text-base font-semibold text-white transition duration-300 ease-in-out rounded-full bg-primary hover:shadow-lg hover:opacity-80">Lanjutkan</a>
                </div>
                <div class="relative self-end w-full px-4 lg:w-1/2">
                    <div class="relative mt-10">
                        <div class="absolute top-0 left-0 w-full h-full opacity-25 bg-gradient-to-r from-blue-200 to-white mix-blend-multiply"></div>
                        <img src="{{asset('image/t2.png')}}" width="550" alt="angga" class="relative max-w-full mx-auto" data-aos="fade-left">
                    </div>
                    <div class="absolute top-0 left-0 w-full h-full opacity-25 bg-gradient-to-r from-blue-200 to-white mix-blend-multiply"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="pb-20 pt-36" >
        <div class="container" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <div class="flex flex-wrap justify-center pt-8 -mx-1 lg:-mx-2">
            <div class="w-full px-4 my-1 mb-8 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                <div class="items-end justify-center p-6 border rounded-lg h-90 opacity-80">
                    <h1 class="text-3xl font-extrabold text-center text-primary elementor-counter-number num" data-val="400">000</h1>
                    <p class="font-semibold text-center text-black">Hours of Work</p>
                </div>


            </div>
            <div class="w-full px-4 my-1 mb-8 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                <div class="items-end justify-center p-6 border rounded-lg h-90 opacity-80">
                    <h1 class="text-3xl font-extrabold text-center text-primary elementor-counter-number num" data-val="500">000</h1>
                    <p class="font-semibold text-center text-black">Hours of Work</p>
                </div>

            </div>
            <div class="w-full px-4 my-1 mb-8 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                <div class="items-end justify-center p-6 border rounded-lg h-90 opacity-80">
                    <h1 class="text-3xl font-extrabold text-center text-primary elementor-counter-number num" data-val="700">000</h1>
                    <p class="font-semibold text-center text-black">Hours of Work</p>
                </div>

            </div>
            <div class="w-full px-4 my-1 mb-8 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                <div class="items-end justify-center p-6 border rounded-lg h-90 opacity-80">
                    <h1 class="text-3xl font-extrabold text-center text-primary elementor-counter-number num" data-val="450">000</h1>
                    <p class="font-semibold text-center text-black">Hours of Work</p>
                </div>

            </div>


        </div>
        </div>
    </section>

    <section id="home" class="pt-36 pb-28">
        <div class="container ">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 -mt-14 lg:w-1/2">
                    <img src="{{asset('image/t3.png')}}" alt="" class="relative max-w-full mx-auto" data-aos="fade-right">
                </div>
                <div class="w-full px-4 lg:w-1/2"  data-aos="fade-left">
                    <div class="mb-4 border-b border-gray-200 dark:border-gray-700" >
                        <h1 class="text-4xl font-bold text-slate-500">Only Quality For Clients</h1>
                        <ul class="flex flex-wrap pt-2 -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                            <li class="mr-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">LUXURY</button>
                            </li>
                            <li class="mr-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">COMFORT</button>
                            </li>
                            <li class="mr-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">PRESTIGE</button>
                            </li>
                        </ul>
                    </div>
                    <div id="myTabContent">
                        <div class="hidden p-4 rounded-lg " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud exercitation proident est nisi. Irure magna elit commodo anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam ad. Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                        </div>
                        <div class="hidden p-4 rounded-lg " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">Ad pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex. Aute sunt incididunt amet commodo est sint nisi deserunt pariatur do. Aliquip ex eiusmod voluptate exercitation cillum id incididunt elit sunt. Qui minim sit magna Lorem id et dolore velit Lorem amet exercitation duis deserunt. Anim id labore elit adipisicing ut in id occaecat pariatur ut ullamco ea tempor duis.</p>
                        </div>
                        <div class="hidden p-4 rounded-lg " id="settings" role="tabpanel" aria-labelledby="settings-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit aliquip nostrud. Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure officia elit do ipsum ullamco Lorem.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </section>


        {{-- <section class="px-10 pt-16 pb-32 dark:bg-dark">
            <div class="w-full px-12">
                <div class="mx-auto mb-12 text-center ">
                    <h2 class="mb-4 text-2xl font-extrabold text-slate-700 sm:text-3xl lg:text-5xl dark:text-white">Tata Cara</h2>
                    <div class="w-full mb-4">
                        <div class="w-1/4 h-1 py-0 mx-auto my-0 bg-orange-500 rounded-t opacity-25"></div>
                      </div>
                    <p class="font-medium text-md text-secondary md:text-lg">Sit labore et officia eiusmod tempor officia eiusmod dolor exercitation nulla dolore ut id velit et ut anim.</p>
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap justify-center pt-4 -mx-1 lg:-mx-2">

                <div class="w-full px-4 my-1 mb-8 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4 ">
            <div class="px-12 mt-8 border rounded-lg shadow dark:bg-dark dark:border-slate-500 hover:bg-orange-500 group">
                <div class="flex justify-center">
                    <img src="{{asset('img/tulis.svg')}}" width="100" alt="" class="hover:animate-pulse">
                </div>
                <div class="px-4 mt-10 mb-10 md:px-2">
                    <h1 class="relative z-10 text-xl font-extrabold text-center text-gray-900 dark:text-white group-hover:text-white">Masukan Laporan</h1>
                    <p class="relative z-10 mt-4 text-sm font-semibold text-center text-gray-700 dark:text-slate-300 group-hover:text-white">Masukan Laporan Keluhan Anda Dengan Jelas & Benar </p>
                    <h1 class="font-bold text-center text-orange-100 text-9xl lg:-mt-32 md:-mt-28 -mt-28 dark:text-orange-300 opacity-80 group-hover:text-orange-500">1</h1>
                </div>
            </div></div>

            <div class="w-full px-4 my-1 mb-8 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
            <div class="px-12 mt-8 border rounded-lg shadow dark:bg-dark dark:border-slate-500 hover:bg-orange-500 group">
                <div class="flex justify-center mt-4">
                    <img src="{{asset('img/processing.svg')}}" width="100" alt="" class="hover:animate-spin">
                </div>
                <div class="px-4 mt-10 mb-10 md:px-2">
                    <h1 class="relative z-10 text-xl font-extrabold text-center text-gray-900 dark:text-white group-hover:text-white">Proses Veritifikasi</h1>
                    <p class="relative z-10 mt-4 text-sm font-semibold text-center text-gray-700 dark:text-slate-300 group-hover:text-white">Tunggu Sampai Laporan Anda Di Veritifikasi</p>
                    <h1 class="font-bold text-center text-orange-100 text-9xl -mt-28 md:-mt-28 lg:-mt-36 opacity-80 dark:text-orange-300 group-hover:text-orange-500">2</h1>
                </div>
            </div></div>

            <div class="w-full px-4 my-1 mb-8 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
            <div class="px-12 mt-8 border rounded-lg shadow dark:bg-dark dark:border-slate-500 hover:bg-orange-500 group">
                <div class="flex justify-center mt-4">
                    <img src="{{asset('img/act.svg')}}" width="100" alt="" class="hover:animate-spin">
                </div>
                <div class="px-4 mt-10 mb-10 md:mb-10 md:px-2">
                    <h1 class="relative z-10 text-xl font-extrabold text-center text-gray-900 dark:text-white group-hover:text-white">Tindak Lanjut</h1>
                    <p class="relative z-10 mt-4 text-sm font-semibold text-center text-gray-700 dark:text-slate-300 group-hover:text-white">Laporan Anda Sedang Tindak Lanjut</p>
                    <h1 class="font-bold text-center text-orange-100 text-9xl -mt-28 lg:-mt-24 md:-mt-28 opacity-80 dark:text-orange-300 group-hover:text-orange-500">3</h1>
                </div>
            </div></div>

            <div class="w-full px-4 my-1 mb-8 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
            <div class="px-12 mt-8 border rounded-lg shadow dark:bg-dark dark:border-slate-500 hover:bg-orange-500 group">
                <div class="flex justify-center mt-4">
                    <img src="{{asset('img/verification.svg')}}" width="100" alt="" class="hover:animate-pulse">
                </div>
                <div class="px-4 mt-10 mb-10 md:mb-12 md:px-2">
                    <h1 class="relative z-10 text-xl font-extrabold text-center text-gray-900 dark:text-white group-hover:text-white">Selesai</h1>
                    <p class="relative z-10 mt-4 text-sm font-semibold text-center text-gray-700 dark:text-slate-300 group-hover:text-white">Laporan Pengaduan Anda Telah Selesai Ditindak</p>
                    <h1 class="font-bold text-center text-orange-100 text-9xl -mt-28 lg:-mt-32 md:-mt-28 opacity-80 dark:text-orange-300 group-hover:text-orange-500">4</h1>
                </div>
            </div></div>


            </div>
            </section> --}}








    <footer class="pt-24 pb-12 bg-dark">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 font-medium text-slate-300 md:w-1/3">
                    <h2 class="mb-5 text-4xl font-bold text-white">ANZZ</h2>
                    <h3 class="mb-2 text-2xl font-bold">Hubungi kami</h3>
                    <p class="">@wahyuanggasaputra753@gmail.com</p>
                    <p class="">JL.ruwet.kab-ruwet.kec-ruwet</p>
                    <p class="">Jember</p>
                </div>
                <div class="w-full px-4 mb-12 lg:w-1/3">
                    <h3 class="mb-5 text-xl font-semibold text-white">Kategpri Tulisan</h3>
                    <ul class=" text-slate-300">
                        <li>
                            <a href="#" class="inline-block mb-3 text-base hover:text-primary">Progamming</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block mb-3 text-base hover:text-primary">Teknologi</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block mb-3 text-base hover:text-primary">Gaya Hidup</a>
                        </li>
                    </ul>
                </div>

            <div class="w-full px-4 mb-12 lg:w-1/3">
                <h3 class="mb-5 text-xl font-semibold text-white">Tutan</h3>
                    <ul class=" text-slate-300">
                        <li>
                            <a href="#home" class="inline-block mb-3 text-base hover:text-primary">Home</a>
                        </li>
                        <li>
                            <a href="#about" class="inline-block mb-3 text-base hover:text-primary">About</a>
                        </li>
                        <li>
                            <a href="#portofolio" class="inline-block mb-3 text-base hover:text-primary">Portofolio</a>
                        </li>
                        <li>
                            <a href="#clients" class="inline-block mb-3 text-base hover:text-primary">Clients</a>
                        </li>
                        <li>
                            <a href="#blog" class="inline-block mb-3 text-base hover:text-primary">Blog</a>
                        </li>
                        <li>
                            <a href="#contact" class="inline-block mb-3 text-base hover:text-primary">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-full pt-10 border-t border-slate-700">
                <div class="flex items-center justify-center mb-5">
                    <!-- youtube -->
                    <a class="flex items-center justify-center mr-3 border rounded-full w-9 h-9 text-slate-300 border-slate-300 hover:bg-primary hover:border-primary hover:text-white" href="https://youtube.com" target="_blank">
                        <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <!-- instagram -->
                    <a class="flex items-center justify-center mr-3 border rounded-full w-9 h-9 text-slate-300 border-slate-300 hover:bg-primary hover:border-primary hover:text-white" href="https://instagram.com/" target="_blank">
                    <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>
                    <!-- wa -->
                    <a class="flex items-center justify-center mr-3 border rounded-full w-9 h-9 text-slate-300 border-slate-300 hover:bg-primary hover:border-primary hover:text-white" href="https://WhatsApp.com" target="_blank">
                    <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    </a>
                    <!-- twitter -->
                    <a class="flex items-center justify-center mr-3 border rounded-full w-9 h-9 text-slate-300 border-slate-300 hover:bg-primary hover:border-primary hover:text-white" href="https://twitter.com" target="_blank">
                    <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                    <!-- tik tok -->
                    <a class="flex items-center justify-center mr-3 border rounded-full w-9 h-9 text-slate-300 border-slate-300 hover:bg-primary hover:border-primary hover:text-white" href="https://tiktok.com/@ayongoding99" target="_blank">
                    <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                    </a>
                </div>
                <p class="text-xs font-medium text-center text-slate-500">Dibuat dengan <span class="text-pink-500">❤</span> Oleh <a href="https://tiktok.com/@ayongoding99" target="_blank" class="font-bold text-primary">AyoNgoding99</a>, Menggunakan <a href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500">TailwindCss</a></p>
            </div>
        </div>
    </footer>
    <a href="#home" class="fixed hidden justify-center items-center x-[9999] bottom-4 right-4 h-14 w-14 bg-primary rounded-full
    p-4 hover:animate-pulse" id="top">
    <span class="block w-5 h-5 mt-2 rotate-45 border-t-2 border-l-2"></span>
    </a>
    <script>
      const mengetik = new Typed(".typing",{
    strings:[" Jangan Lupa Membayar Kas","Karena Itu Untuk Kalian","& Untuk Kelas Kalian"],
    typeSpeed: 100,
    backSpeed: 50,
    loop: true,
      });

      </script>
      <script>
        let valueDisplays = document.querySelectorAll(".num");
        let interval = 4000;

        valueDisplays.forEach((valueDisplay) => {
            let startValue = 0;
            let endValue = parseInt(valueDisplay.getAttribute("data-val"));
            let duration = Math.floor(interval / endValue);
            let counter = setInterval(function()  {
                startValue +=1;
                valueDisplay.textContent = startValue;
                if (startValue == endValue){
                    clearInterval(counter);
                }
            }, duration);
        })
      </script>

    @vite('resources/js/js.js')
</body>
</html>
