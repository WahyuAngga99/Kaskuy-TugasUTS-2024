<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body >
    {{-- <div class="bg-white p-8 rounded shadow-md w-80">
        <h2 class="text-2xl font-bold mb-4">Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="border rounded w-full py-2 px-3 focus:outline-none focus:border-blue-400">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-semibold text-gray-600">Password</label>
                <input type="password" id="password" name="password" class="border rounded w-full py-2 px-3 focus:outline-none focus:border-blue-400">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded focus:outline-none focus:bg-blue-600">Login</button>
                <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Create an account</a>
            </div>
        </form>
    </div>


    <br> --}}

    <a href="{{url('')}}" class="absolute top-0 left-0 mt-8 mr-8 px-8 text-gray-600 hover:text-gray-800">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
    </a>


    <!-- component -->
<div class="py-6 pt-48">
    <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
        <div class="hidden lg:flex lg:w-1/2 bg-cover justify-center items-center">
            <img src="{{ asset('image/smklogo.png') }}" class="w-1/2 h-auto">
        </div>

          <div class="w-full p-8 lg:w-1/2">
              <h2 class="text-2xl font-semibold text-gray-700 text-center">KasKuy</h2>
              <p class="text-xl text-gray-600 text-center">Welcome To KaskUy</p>
              <form action="{{ route('login') }}" method="POST">
                @csrf
              <div class="mt-4 flex items-center justify-between">
                  <span class="border-b w-1/5 lg:w-1/4"></span>
                  <p  class="text-xs text-center text-gray-500 uppercase">or login with email</p>
                  <span class="border-b w-1/5 lg:w-1/4"></span>
              </div>
              <div class="mt-4">
                  <label for="email"  class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                  <input type="email" id="email" name="email" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email">
              </div>
              <div class="mt-4">
                  <div class="flex justify-between">
                      <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                      {{-- <a href="#" class="text-xs text-gray-500">Forget Password?</a> --}}
                  </div>
                  <input  type="password" id="password" name="password" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="password">
              </div>
              <div class="mt-8">
                  <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Login</button>
              </div>

              <div class="mt-4 flex items-center justify-between">
                  <span class="border-b w-1/5 md:w-1/4"></span>
                  <p class="text-xs text-gray-500 uppercase text-center">Silahkan Masukan Email Dan Password</p>
                  <span class="border-b w-1/5 md:w-1/4"></span>
              </div>
            </form>
          </div>
      </div>
  </div>
</body>
</html>
