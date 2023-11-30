<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class CheckRoleAndKelas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
{
    // Mendapatkan data pengguna yang sedang login
    $user = $request->user();

    // Periksa jika pengguna tidak ada atau tidak memiliki peran
    if (!$user || empty($roles)) {
        return redirect()->route('login');
    }

    // Cek peran pengguna
    if (!$user->hasRole($roles)) {
        return redirect()->route('forbidden');
    }

    // Jika peran pengguna adalah petugas atau siswa, cek kelasnya
    if ($user->hasRole('petugas', 'siswa')) {
        $userClass = $user->class; // Mengambil kelas pengguna

        // Lakukan pengecekan apakah pengguna memiliki akses ke kelas yang sesuai
        // Lakukan pengecekan dengan data request atau rute tertentu
        // Misalnya:
        // if ($request->kelas_id !== $userClass->id) {
        //     return redirect()->route('forbidden');
        // }
    }

    return $next($request);
}


}
