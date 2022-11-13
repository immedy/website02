<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('LandingPage.HalamanUtama');
    }

    public function CapaianIndikator()
    {
        return view('LandingPage.Informasi.CapaianIndikator');
    }

    public function BeritaKesehatan()
    {
        return view('LandingPage.Informasi.BeritaKesehatan');
    }

    public function JadwaLDokter()
    {
        return view('LandingPage.Informasi.JadwalDokter');
    }

    public function TataTertib()
    {
        return view('LandingPage.Informasi.TataTertib');
    }

    public function KritikdanSaran()
    {
        return view('LandingPage.Informasi.KritikdanSaran');
    }

    public function LaporanKeluhan()
    {
        return view('LandingPage.Informasi.LaporanKeluhan');
    }
}
