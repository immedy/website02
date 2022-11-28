<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\Referensi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.Berita',[
            'referensi' => Referensi::where('jenis','=','6')->get(),
            'berita' => berita::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ValidasiBerita = $request->validate([
            'referensi_id'  => 'required',
            'berita'        => 'required',
            'judul'         => 'required',
            'gambar'        => 'required|image|mimes:jpeg,png,jpg|file|max:200'
        ]);
        $ValidasiBerita ['user_id'] = 1;
        $ValidasiBerita ['status'] = 1;
        $ValidasiBerita['exeprt'] = Str::limit(strip_tags($request->berita, 65));
        $ValidasiBerita['gambar'] = $request->file('gambar')->store('FotoBerita');
        berita::create($ValidasiBerita);
        if($ValidasiBerita){
            Alert::toast('Kategori Berhasil Ditambahkan');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('LandingPage.DetailPage.DetailBerita',[
            'berita'    => berita::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
