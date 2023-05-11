<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuMenuController extends Controller
{
    public function TentangRs()
    {
        return view('Dashboard.TentangRs');
    }

    public function TambahTentangRs()
    {
        return view('Dashboard.detail.DetailTentangRS');
    }
}
