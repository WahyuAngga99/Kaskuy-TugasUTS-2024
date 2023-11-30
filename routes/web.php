<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('HalamanUser');
});


use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;

// Rute untuk Kelas
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index')->middleware('checkRole');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create')->middleware('checkRole');
Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store')->middleware('checkRole');
Route::get('/kelas/{id}', [KelasController::class, 'show'])->name('kelas.show')->middleware('checkRole');
Route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit')->middleware('checkRole');
Route::put('/kelas/{id}', [KelasController::class, 'update'])->name('kelas.update')->middleware('checkRole');
Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy')->middleware('checkRole');
// Route::get('/kelas/search', [KelasController::class, 'cariSiswa'])->name('kelas.search');
// Route::get('cari',[KelasController::class,'cari']);
Route::get('/kelas/{id}/export-word', [KelasController::class, 'exportToWord'])->name('kelas.export.word');

// Rute untuk Siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index')->middleware('checkRole');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create')->middleware('checkRole');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store')->middleware('checkRole');
Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show')->middleware('checkRole');
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit')->middleware('checkRole');
Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update')->middleware('checkRole');
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy')->middleware('checkRole');

Route::get('/siswa/export-pdf/{kelas_id}', [SiswaController::class, 'exportPDF'])->name('siswa.export.pdf');
Route::get('/siswa/search', [SiswaController::class, 'cariSiswa'])->name('siswa.search');


use App\Http\Controllers\PembayaranController;

Route::get('/pembayaran/create', [PembayaranController::class, 'create'])->name('pembayaran.create')->middleware('checkRole');
// Route::get('/pembayaran/baca', [PembayaranController::class, 'baca'])->name('pembayaran.baca')->middleware('checkRole');
Route::post('/pembayaran/store', [PembayaranController::class, 'store'])->name('pembayaran.store')->middleware('checkRole');
Route::get('/pembayaran/getStudentInfo', [PembayaranController::class, 'getStudentInfo'])->name('pembayaran.getStudentInfo')->middleware('checkRole');



use App\Http\Controllers\TabunganController;

Route::get('/kelas/{id}/tabungan', [TabunganController::class, 'index'])->name('tabungan.index')->middleware('checkRole');
Route::put('/tabungan/{nis}/ambil', [TabunganController::class, 'ambilTabungan'])->name('tabungan.ambil')->middleware('checkRole');


// routes/web.php

use App\Http\Controllers\PengeluaranController;

Route::get('/pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluaran.index')->middleware('checkRole');
Route::get('/pengeluaran/create', [PengeluaranController::class, 'create'])->name('pengeluaran.create')->middleware('checkRole');
Route::post('/pengeluaran/store', [PengeluaranController::class, 'store'])->name('pengeluaran.store')->middleware('checkRole');
Route::delete('/pengeluaran/{id}',  [PengeluaranController::class, 'destroy'])->name('pengeluaran.destroy')->middleware('checkRole');


// Route::controller(LoginRegisterController::class)->group(function() {
//     Route::get('/register', 'register')->name('register');
//     Route::post('/store', 'store')->name('store');
//     Route::get('/login', 'login')->name('login');
//     Route::post('/authenticate', 'authenticate')->name('authenticate');

//     Route::post('/logout', 'logout')->name('logout');
// });
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    });


    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('checkRole');
Route::get('/dashboard/create', [DashboardController::class, 'create'])->name('dashboard.create')->middleware('checkRole');
Route::post('/dashboard/store', [DashboardController::class, 'store'])->name('dashboard.store')->middleware('checkRole');
