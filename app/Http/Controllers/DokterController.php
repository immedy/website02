<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\dokter;
use App\Models\Referensi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.Dokter',[
            'dokter' => dokter::orderBy('created_at','desc')->get(),
            'smf' => Referensi::where('jenis','3')->get(),
            'poliklinik' => Referensi::where('jenis','2')->get()
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
        $ValidasiDokter = $request->validate([
            'smf' => 'required',
            'poliklinik' => 'required',
            'nama' => 'required',
            'gambar'        => 'required|image|mimes:jpeg,png,jpg|file|max:200',
            'senin' =>  'nullable',
            'selasa' =>  'nullable',
            'rabu' =>  'nullable',
            'kamis' =>  'nullable',
            'jumat' =>  'nullable',
        ]);
        $ValidasiDokter['user_id'] = 1;
        $ValidasiDokter['status'] = 1;
        $ValidasiDokter['gambar'] = $request->file('gambar')->store('FotoDokter');
        dokter::create($ValidasiDokter);
        if($ValidasiDokter){
            Alert::toast('Dokter Berhasil Ditambahkan');
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
        //
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
