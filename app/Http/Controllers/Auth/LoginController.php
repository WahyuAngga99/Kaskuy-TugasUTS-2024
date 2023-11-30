<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Menampilkan form login
    }

    public function login(Request $request)
    {
        // Lakukan validasi login disini
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, redirect ke lokasi yang ditentukan
            return redirect()->intended('/dashboard');
        } else {
            // Jika autentikasi gagal, kembali ke form login
            return back()->withInput()->withErrors(['email' => 'Email atau password salah']);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout(); // Logout user
        return redirect('/login');
    }


}

