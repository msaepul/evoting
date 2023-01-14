<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterDataController extends Controller
{
    public function Indikator()
    {
        // $UserCount = User::count();
        return view('Masterdata.indikator');
    }
}
