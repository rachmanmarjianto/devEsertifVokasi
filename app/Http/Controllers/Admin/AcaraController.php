<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcaraController extends Controller
{
    public function index()
    {
        return view('admin.acara');
    }

    public function buat_acara()
    {
        return view('admin.buat-acara');
    }

    public function store_acara(Request $request)
    {
        //maaf dam lancang bikin:") wkwkwkw ini ya script buat insert file sertifnya hehe insyaallah bener:v gak bisa nyoba soalnyaaa.-.
        $request->validate([
            'file_sertif' => 'required|bail|file|image|mimes:jpg,jpeg'
        ]);
          
        Storage::disk('local')->put('sertifikat/'.$request->nama_acara, $request->file_sertif);

        $path = 'storage/sertifikat/'.$request->nama_acara.$request->file('file_sertif')->extension();

    }

    public function detail_acara()
    {
        return view('admin.detail-acara');
    }
}
