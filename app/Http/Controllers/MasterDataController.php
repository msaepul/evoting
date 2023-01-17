<?php

namespace App\Http\Controllers;

use App\Models\aspek;
use Illuminate\Http\Request;

class MasterDataController extends Controller
{
    public function Indikator()
    {
        $aspeks = aspek::all();
        return view('Masterdata.indikator', compact('aspeks'));
    }
    public function IndikatorProses(Request $request)
    {
        $validated = $request->validate([
            'aspek' => 'required|max:100',
            'ket' => 'max:255',

        ]);


        $aspek = aspek::create($request->all());

        // $departemen = Departemen::all();
        // $cabang = Cabang::all();
        $aspeks = aspek::all();
        return view('Masterdata.indikator', compact('aspeks'));
    }

    public function updateIndikator(Request $request, $id)
    {
        $aspek = aspek::find($id);
        $input = $request->all();
        $aspek->fill($input)->save();

        return redirect('Indikator');
    }
    public function deleteIndikator($id)
    {
        $aspek = aspek::find($id);
        $aspek->delete();

        return redirect('Indikator');
    }
}
