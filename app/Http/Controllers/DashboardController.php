<?php

namespace App\Http\Controllers;

use App\Models\instalasi;
use App\Models\Referensi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.home',[
            'dashboard' => instalasi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.detail.createinstalasi',[
            'kategori' => Referensi::where('jenis','=','4')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ValidasiInstalasi = $request->validate([
            'referensi_id' => 'required',
            'unit'         => 'required',
            'gambar'       => 'required|image|mimes:jpeg,png,jpg|file|max:200',
            'textarea'     => 'required'
        ]);
        $ValidasiInstalasi ['status'] = 1;
        $ValidasiInstalasi ['user_id'] = 1;
        $ValidasiInstalasi['gambar'] = $request->file('gambar')->store('FotoInstalasi');
        instalasi::create($ValidasiInstalasi);
        if($ValidasiInstalasi){
            Alert::toast('Berhasil Ditambahkan');
            return redirect('/home');
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
