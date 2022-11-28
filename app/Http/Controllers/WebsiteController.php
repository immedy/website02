<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\dokter;
use App\Models\instalasi;
use App\Models\Referensi;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Crypt;
use Reflector;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('LandingPage.HalamanUtama',[
            'berita' => berita::orderBy('created_at','desc')->get(),
            'dokter' => dokter::all()
        ]);
    }

    public function CapaianIndikator()
    {
        return view('LandingPage.Informasi.CapaianIndikator');
    }

    public function BeritaKesehatan()
    {
        return view('LandingPage.Informasi.BeritaKesehatan', [
            'berita' => berita::where('status','=','1')->orderBy('created_at','desc')->get()
        ]);
    }

    public function JadwaLDokter()
    {
        return view('LandingPage.Informasi.JadwalDokter',[
            'dokter' => dokter::all()
        ]);
    }

    public function TataTertib()
    {
        return view('LandingPage.Informasi.TataTertib',[
            'tatib' => instalasi::where('referensi_id','15')->get()
        ]);
    }

    public function KritikdanSaran()
    {
        return view('LandingPage.Informasi.KritikdanSaran');
    }

    public function LaporanKeluhan()
    {
        return view('LandingPage.Informasi.LaporanKeluhan',[
            'DPJP' => dokter::where('status','1')->get(),
            'layanan' => Referensi::all()
        ]);
    }
    
    public function BeritaDetail($id)
    {
        $EnskripsiID = Crypt::decryptString($id);
        return view('LandingPage.DetailPage.DetailBerita',[
            'berita' =>berita::findOrfail($EnskripsiID)
        ]);
    }
}
