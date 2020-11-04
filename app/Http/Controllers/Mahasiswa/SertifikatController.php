<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Acara;
use Auth;

class SertifikatController extends Controller
{
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

    //function buat cek sertif
    public function cetakSertif($id_acara,$nim)
    {
    	$acara = Acara::find($id_acara);
    	$peserta = Auth::user()->nim;
    	$view = $acara->template_sertifikat()->FILE_PHP;

    	$pdf = PDF::loadView($view);
    	return $pdf->download('E-Sertif '.$acara->NAMA_ACARA.' '.$peserta);
    }
}
