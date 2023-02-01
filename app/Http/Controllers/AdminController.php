<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\vote;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVoteRequest;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{


    public function Dashboard()
    {
        // $UserCount = User::count();
        return view('Admin.dashboard');
    }

    public function Voting()
    {
        // $UserCount = User::count();
        return view('Admin.voting');
    }
    public function DataVoting()
    {

        $vote = vote::all();

        return view('Admin.datavoting', ['vote' => $vote]);
        // $votes = vote::all();
        // return view('Admin.datavoting', compact('votes'));
    }

    public function store(request $request)
    {
        $validated = $request->validate(
            [
                'kode_vote' => 'required',
            ],
            [
                'kode_vote.required' =>  'Kode Tidak Boleh Kosong'
            ]
        );

        if($request->file('image')){
            $extension = $request ->file('image')->getClientOriginalExtension();
            $newName = $request->kode_vote.'-'.now()->timestamp.'-'.$extension;
            $request->file('image')->storeAs('photo_roti',$newName);
        }
        $request['photo_roti'] = $newName;
        $vote = vote::create($request->all());
        return redirect('DataVoting')->with('success', 'Item created successfully!');

    }

    // public function store(request $request)
    // {

    //     if (!$request->has('photo_roti')) {
    //         return response()->json(['message' => 'Missing file'], 422);
    //     }
    //     $file = $request->file('photo_roti');
    //     $name = Str::random(10);
    //     $url = Storage::putFileAs('images', $file, $name . '.' . $file->extension());


    //     $params = $request->validated();
    //     $vote = vote::create($params);

    //     $vote->image = $url;
    //     $vote->save();
    //     dd($vote);
    //         // return redirect()->route('voting')->with('success', 'Sukses, PTPP Berhasil dibuat');
    //     ;
    // }
    // public function addvote_action(Request $request)
    // {

    //     $request->validate(
    //         [
    //             'nomor'         =>  'required|unique:tb_utama',
    //             'jenis'         =>  'required',
    //             'bulan'         =>  'required',
    //             'tgl'           =>  'required',
    //             'kategori'      =>  'required',
    //             'dari'          =>  'required',
    //             'd_dept'        =>  'required',
    //             'kepada'        =>  'required',
    //             'k_dept'        =>  'required',
    //             'lokasi'        =>  'required',
    //             'obyek'         =>  'required',
    //             'keadaan'       =>  'required',
    //             'lampiran1'      => 'mimes:tiff,pjp,jfif,bmp,gif,svg,png,xbm,dib,jxl,jpeg,svgz,jpg,webp,ico,tif,pjpeg,avif,ogm,wmv,webm,ogv,mov,asx,mpeg,mp4,m4v,avi,mkv,3gp,pdf|max:2048',
    //             'lampiran2'      => 'mimes:tiff,pjp,jfif,bmp,gif,svg,png,xbm,dib,jxl,jpeg,svgz,jpg,webp,ico,tif,pjpeg,avif,ogm,wmv,webm,ogv,mov,asx,mpeg,mp4,m4v,avi,mkv,3gp,pdf|max:2048',
    //             'lampiran3'      => 'mimes:tiff,pjp,jfif,bmp,gif,svg,png,xbm,dib,jxl,jpeg,svgz,jpg,webp,ico,tif,pjpeg,avif,ogm,wmv,webm,ogv,mov,asx,mpeg,mp4,m4v,avi,mkv,3gp,pdf|max:2048',
    //             'lampiran4'      => 'mimes:tiff,pjp,jfif,bmp,gif,svg,png,xbm,dib,jxl,jpeg,svgz,jpg,webp,ico,tif,pjpeg,avif,ogm,wmv,webm,ogv,mov,asx,mpeg,mp4,m4v,avi,mkv,3gp,pdf|max:2048',
    //             'lampiran5'      => 'mimes:tiff,pjp,jfif,bmp,gif,svg,png,xbm,dib,jxl,jpeg,svgz,jpg,webp,ico,tif,pjpeg,avif,ogm,wmv,webm,ogv,mov,asx,mpeg,mp4,m4v,avi,mkv,3gp,pdf|max:2048',
    //         ],
    //         [
    //             'nomor.required'         =>  'nomor Tidak Boleh Kosong',
    //             'jenis.required'         =>  'jenis Tidak Boleh Kosong',
    //             'bulan.required'         =>  'bulan Tidak Boleh Kosong',
    //             'tgl.required'           =>  'tgl Tidak Boleh Kosong',
    //             'kategori.required'      =>  'kategori Tidak Boleh Kosong',
    //             'dari.required'          =>  'dari Tidak Boleh Kosong',
    //             'd_dept.required'        =>  'd_dept Tidak Boleh Kosong',
    //             'kepada.required'        =>  'kepada Tidak Boleh Kosong',
    //             'k_dept.required'        =>  'k_dept Tidak Boleh Kosong',
    //             'lokasi.required'        =>  'lokasi Tidak Boleh Kosong',
    //             'obyek.required'         =>  'obyek Tidak Boleh Kosong',
    //             'keadaan.required'       =>  'keadaan Tidak Boleh Kosong',
    //             'lampiran1.mimes' => 'File yang anda masukan tidak diizinkan !!',
    //             'lampiran1.max' => 'File Tidak Boleh Lebih dari 2MB',
    //             'lampiran2.mimes' => 'File yang anda masukan tidak diizinkan !!',
    //             'lampiran2.max' => 'File Tidak Boleh Lebih dari 2MB',
    //             'lampiran3.mimes' => 'File yang anda masukan tidak diizinkan !!',
    //             'lampiran3.max' => 'File Tidak Boleh Lebih dari 2MB',
    //             'lampiran4.mimes' => 'File yang anda masukan tidak diizinkan !!',
    //             'lampiran4.max' => 'File Tidak Boleh Lebih dari 2MB',
    //             'lampiran5.mimes' => 'File yang anda masukan tidak diizinkan !!',
    //             'lampiran5.max' => 'File Tidak Boleh Lebih dari 2MB',
    //         ]
    //     );

    //     if ($request->hasFile('lampiran5')) {
    //         $request->file('lampiran5')->storeAs('uploads/ptpp/lampiran/' . $split[1], $time . '-' . $split[0] . '-' . $split[1] . '-' . $split[2] . '-L5 Rev.00' . '.' . $request->file('lampiran5')->extension());
    //         $path5 = $time . '-' . $split[0] . '-' . $split[1] . '-' . $split[2] . '-L5 Rev.00' . '.' . $request->file('lampiran5')->extension();
    //     } else {
    //         $path5 = '-';
    //     }

    //     $utama = new Modelutama([

    //         'nomor'         =>  $request->nomor,
    //         'jenis'         =>  $request->jenis,
    //         'bulan'         =>  $request->bulan,
    //         'tgl'           =>  $request->tgl,
    //         'kategori'      =>  $request->kategori,
    //         'subkategori'   =>  $request->subkategori,
    //         'dari'          =>  $request->dari,
    //         'd_dept'        =>  $request->d_dept,
    //         'kepada'        =>  $request->kepada,
    //         'k_dept'        =>  $request->k_dept,
    //         'lokasi'        =>  $request->lokasi,
    //         'obyek'         =>  $request->obyek,
    //         'keadaan'       =>  $request->keadaan,
    //         'dibuat'        =>  $request->dibuat,
    //         'status'        =>  'draft',
    //         'id_buat'       =>  $request->id_buat,
    //         'randlink'      =>  $request->randlink,
    //         'lampiran1'     =>  $path1,
    //         'lampiran2'     =>  $path2,
    //         'lampiran3'     =>  $path3,
    //         'lampiran4'     =>  $path4,
    //         'lampiran5'     =>  $path5,
    //     ]);
    //     $utama->save();

    //     require_once __DIR__ . '/status/dari.php';
    //     require_once __DIR__ . '/status/kepada.php';

    //     return redirect()->route('home')->with('success', 'Sukses, PTPP Berhasil dibuat');
    // }
}
