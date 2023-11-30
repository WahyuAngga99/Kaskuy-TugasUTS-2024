<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Kelas;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $user = auth()->user();

        if ($user->role === 'admin') {
            return $next($request); // Admin dapat mengakses semua data
        } elseif ($user->role === 'petugas') {
            $kelas_id = $user->kelas_id;
            $kelas = Kelas::find($kelas_id); // Ambil data kelas berdasarkan kelas_id petugas atau siswa

            // Jika kelas ditemukan, lanjutkan permintaan
            if ($kelas) {
                return $next($request);
            } else {
                return redirect()->back()->with('error', 'Access denied');
            }
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        else {
            return redirect()->back()->with('error', 'Invalid role');
        }
    }
}
