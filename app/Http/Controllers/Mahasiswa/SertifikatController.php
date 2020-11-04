<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Acara;
use App\Models\PesertaAcara;
use Auth;
use PDF;
use DNS2D;

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
    public function cetakSertif($id_acara)
    {
    	$acara = Acara::find($id_acara);
    	$peserta = Auth::user()->nim;
        $partisipasi = PesertaAcara::where(['ID_ACARA' => $id_acara, 'NIM' => $peserta])->first();
        $encrypted = url('/cek-sertifikat')."/".$this->getEncrypted($peserta,$acara->id_acara);
        $qrcode = DNS2D::getBarcodePNG($encrypted, 'QRCODE');
    	$view = $acara->template_sertifikat->FILE_PHP;

    	$pdf = PDF::loadView($view,compact("partisipasi","qrcode","acara"));
    	return $pdf->stream('E-Sertif '.$acara->NAMA_ACARA.' '.$peserta.".pdf");
    }
}
