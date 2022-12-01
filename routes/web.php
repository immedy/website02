<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ReferensiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Website
Route::get('/', [WebsiteController::class, 'index']);
Route::get('/Informasi/CapaianIndikator', [WebsiteController::class, 'CapaianIndikator']);
Route::get('/Informasi/BeritaKesehatan', [WebsiteController::class, 'BeritaKesehatan']);
Route::get('/Informasi/BeritaKesehatan/{id}', [WebsiteController::class, 'BeritaDetail']);
Route::get('/Informasi/JadwalDokter', [WebsiteController::class, 'JadwalDokter']);
Route::get('/Informasi/KritikdanSaran', [WebsiteController::class, 'KritikdanSaran']);
Route::get('/Informasi/TataTertib', [WebsiteController::class, 'TataTertib']);
Route::get('/Informasi/LaporanKeluhan', [WebsiteController::class, 'LaporanKeluhan']);
Route::get('/TestView', function () {
    return view('Testview.tetsview');
});
Route::get('/Fasilitas/InstalasiRawatdarurat',[WebsiteController::class, 'InstalasiGawatDarurat']);
Route::get('/Fasilitas/InstalasiKamarOperasi',[WebsiteController::class, 'InstalasiKamarOperasi']);




// Dashboard
 Route::resource('/home', DashboardController::class)->middleware('auth');
 Route::resource('/referensi', ReferensiController::class)->middleware('auth');
 Route::resource('/pengguna', UserController::class)->middleware('auth');
 Route::resource('/berita', BeritaController::class)->middleware('auth');
 Route::resource('/dokter', DokterController::class)->middleware('auth');
 Route::get('/login',[UserLoginController::class,'index'])->name('login');
 Route::post('/auth', [UserLoginController::class, 'authenticate']);
 route::post('/logout', [UserLoginController::class, 'logout'])->middleware('auth');
 Route::POST('getJenis',[DashboardController::class, 'getJenis']);