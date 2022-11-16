<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReferensiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Models\Referensi;

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
Route::get('/Informasi/JadwalDokter', [WebsiteController::class, 'JadwalDokter']);
Route::get('/Informasi/KritikdanSaran', [WebsiteController::class, 'KritikdanSaran']);
Route::get('/Informasi/TataTertib', [WebsiteController::class, 'TataTertib']);
Route::get('/Informasi/LaporanKeluhan', [WebsiteController::class, 'LaporanKeluhan']);


// Dashboard
 Route::resource('/home', DashboardController::class);
 Route::resource('/referensi', ReferensiController::class);
 Route::resource('/pengguna', UserController::class);