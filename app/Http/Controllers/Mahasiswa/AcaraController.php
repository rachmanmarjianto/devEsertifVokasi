<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\PesertaAcara;

class AcaraController extends Controller
{
    public function index()
    {
    	$nim = Auth::user()->nim;
    	$acara = PesertaAcara::where('nim',$nim)->get();

    	return view('mahasiswa.acara',compact("acara"));
    }
}
