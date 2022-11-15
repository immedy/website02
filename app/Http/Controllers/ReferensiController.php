<?php

namespace App\Http\Controllers;

use App\Models\Referensi;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReferensiRequest;
use App\Http\Requests\UpdateReferensiRequest;

class ReferensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.Referensi');
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
     * @param  \App\Http\Requests\StoreReferensiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReferensiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Referensi  $referensi
     * @return \Illuminate\Http\Response
     */
    public function show(Referensi $referensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Referensi  $referensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Referensi $referensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReferensiRequest  $request
     * @param  \App\Models\Referensi  $referensi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReferensiRequest $request, Referensi $referensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Referensi  $referensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Referensi $referensi)
    {
        //
    }
}
