<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\PesertaAcara;
use Illuminate\Support\Facades\Crypt;

class AcaraController extends Controller
{
    public function index()
    {
    	$nim = Auth::user()->nim;
    	$acara = PesertaAcara::where('nim',$nim)->get();

    	return view('mahasiswa.acara',compact("acara"));
    }

    //enkripsi dengan parameter nim dan id_acara
    public function getEncrypted($nim,$id_acara)
    {
    	return Crypt::encryptString($nim.";".$id_acara);
    }

    //decrypt dengan parameter encrypted string.
    public function getDecrypted($encrypted)
    {
    	return Crypt::decryptString($encrypted);
    }
}