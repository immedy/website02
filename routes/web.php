<?php

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
Route::get('/CapaianIndikator', [WebsiteController::class, 'CapaianIndikator']);
Route::get('/BeritaKesehatan', [WebsiteController::class, 'BeritaKesehatan']);
Route::get('/JadwalDokter', [WebsiteController::class, 'JadwalDokter']);
Route::get('/KritikdanSaran', [WebsiteController::class, 'KritikdanSaran']);
Route::get('/TataTertib', [WebsiteController::class, 'TataTertib']);
Route::get('/LaporanKeluhan', [WebsiteController::class, 'LaporanKeluhan']);


// Website