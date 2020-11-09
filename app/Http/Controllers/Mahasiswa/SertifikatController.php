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
        $decrypt = Crypt::decryptString($encrypted);
        
        $data = explode(";", $decrypt);
        $nim = $data[0];
        $id_acara = $data[1];

        if($nim != null && $id_acara != null){
            $partisipasi = PesertaAcara::where(['ID_ACARA' => $id_acara, 'NIM' => $nim])->first();
            if($partisipasi != null){
                $acara = Acara::find($id_acara);
                $qrcode = DNS2D::getBarcodePNG($encrypted, 'QRCODE');
                $view = $acara->template_sertifikat->FILE_PHP;

                $pdf = PDF::loadView($view,compact("partisipasi","qrcode","acara"));
                return $pdf->stream('E-Sertif '.$acara->NAMA_ACARA.' '.$nim.".pdf");
            }else{
                return redirect('/certificate-not-found');
            }
        }
        
    }

    //function buat cek sertif
    public function cetakSertif($id_acara)
    {
    	$acara = Acara::find($id_acara);
    	$peserta = Auth::user()->nim;
        $partisipasi = PesertaAcara::where(['ID_ACARA' => $id_acara, 'NIM' => $peserta])->first();
        $encrypted = url('/cek-sertifikat')."/".$this->getEncrypted($peserta,$id_acara);
        $qrcode = DNS2D::getBarcodePNG($encrypted, 'QRCODE');
    	$view = $acara->template_sertifikat->FILE_PHP;

    	$pdf = PDF::loadView($view,compact("partisipasi","qrcode","acara"));
    	return $pdf->stream('E-Sertif '.$acara->NAMA_ACARA.' '.$peserta.".pdf");
    }

    //function test cetak sertif
    public function testCetakSertif($id_acara)
    {
    	$acara = Acara::find($id_acara);
    	$partisipasi = PesertaAcara::where('ID_ACARA', '=', $id_acara)->first();
        // $partisipasi = PesertaAcara::where(['ID_ACARA' => $id_acara, 'NIM' => $nim])->first();
        $encrypted = url('/cek-sertifikat')."/".$this->getEncrypted($partisipasi,$id_acara);
        $qrcode = DNS2D::getBarcodePNG($encrypted, 'QRCODE');
    	$view = $acara->template_sertifikat->FILE_PHP;

    	$pdf = PDF::loadView($view,compact("partisipasi","qrcode","acara"));
    	return $pdf->stream('E-Sertif '.$acara->NAMA_ACARA.' '.$partisipasi.".pdf");
    }
}
