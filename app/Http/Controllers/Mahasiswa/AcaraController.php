<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\PesertaAcara;
use Illuminate\Support\Facades\DB;

class AcaraController extends Controller
{
    public function index()
    {
    	$nim = Auth::user()->nim;
        $acara = PesertaAcara::where('nim',$nim)->get();
        $nama_mahasiswa = DB::table('user')->where('nim', $nim)->value('NAMA_USER');

    	return view('mahasiswa.acara',compact("acara", "nama_mahasiswa"));
    }

    // public function update_nama_mahasiswa(Request $request)
    // {
    //     $nim = Auth::user()->nim;
    //     $nama = $request->nama;

    //     DB::table('user')->where('nim', $nim)->update([
    //         'NAMA_USER' => $nama
    //     ]);

    //     $status_update_nama = "Berhasil!";

    //     return redirect('/mahasiswa-acara')->with('status_update_nama', 'Berhasil!');
    // }

}