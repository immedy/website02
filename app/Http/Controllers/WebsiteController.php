<?php

namespace App\Http\Controllers;

use Reflector;
use App\Models\berita;
use App\Models\dokter;
use App\Models\keluhan;
use App\Models\instalasi;
use App\Models\Referensi;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('LandingPage.HalamanUtama', [
            'berita' => berita::with('referensi')->orderBy('created_at', 'desc')->paginate(3),
            'dokter' => dokter::with('ReferensiSmf')->get()
        ]);
    }

    public function CapaianIndikator()
    {
        return view('LandingPage.Informasi.CapaianIndikator');
    }

    public function BeritaKesehatan()
    {
        return view('LandingPage.Informasi.BeritaKesehatan', [
            'berita' => berita::where('status', '=', '1')->orderBy('created_at', 'desc')->get()
        ]);
    }

    public function JadwaLDokter()
    {
        return view('LandingPage.Informasi.JadwalDokter', [
            'dokter' => dokter::all()
        ]);
    }

    public function TataTertib()
    {
        return view('LandingPage.Informasi.TataTertib', [
            'tatib' => instalasi::where('jenis', '15')->get()
        ]);
    }

    public function LaporanKeluhan()
    {
        return view('LandingPage.Informasi.LaporanKeluhan', [
            'DPJP' => dokter::where('status', '1')->get(),
            'instalasi' => Referensi::where('jenis', '=', '4')->get(),
            'keluarga' => Referensi::where('jenis', '8')->get()
        ]);
    }

    public function BeritaDetail($id)
    {
        $EnskripsiID = Crypt::decryptString($id);
        return view('LandingPage.DetailPage.DetailBerita', [
            'berita' => berita::findOrfail($EnskripsiID)
        ]);
    }

    public function InstalasiGawatDarurat()
    {
        return view('LandingPage.Fasilitas.InstalasiRawatdarurat', [
            'IGD' => instalasi::where('jenis', '3')->get()
        ]);
    }
    public function InstalasiKamarOperasi()
    {
        return view('LandingPage.Fasilitas.InstalasiKamarOperasi', [
            'OK' => instalasi::where('jenis', '31')->get()
        ]);
    }
    public function InstalasiRawatJalan()
    {
        return view('LandingPage.Fasilitas.InstalasiRawatJalan');
    }
    public function InstalasiRawatInap()
    {
        return view('LandingPage.Fasilitas.InstalasiRawatInap');
    }

    public function ErrorPage()
    {
        return view('LandingPage.ErrorPage');
    }

    public function StoreKeluhan(Request $request)
    {
        $ValidasiKeluhan = $request->validate([
            'namapelapor' => 'required',
            'alamtpelapor' => 'required',
            'nohandphone' => 'required',
            'hubungan'      => 'required',
            'namapasien'    => 'required',
            'norm'          => 'required',
            'tempatlahir'   => 'required',
            'tanggallahir' => 'required',
            'alamatpasien' => 'required',
            'keluhan'       => 'required'
        ]);
        keluhan::create($ValidasiKeluhan);
        if($ValidasiKeluhan){
            alert()->success('Sukses','Laporan Keluhanan Anda telah Kami Terima')->showConfirmButton('Confirm', '#3085d6');
            return back();
        }
    }
}
