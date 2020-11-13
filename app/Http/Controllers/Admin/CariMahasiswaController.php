<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CariMahasiswaController extends Controller
{
    public function index(){
        return view('admin.cari-mahasiswa');
    }

    public function find_data(){
        $input_nim = $_POST['id'];
        $checker = DB::table('user')->where('nim', $input_nim)->exists();

        if ($checker == false) {
            return response()->json(['error_msg' => 'Maaf, data mahasiswa tidak ditemukan.'], 404);
        } else {
            $peserta_acara = DB::table('peserta_acara')->where('NIM', $input_nim)->get();
            $nama_mhs = DB::table('user')->where('nim', $input_nim)->value('NAMA_USER');
            $acara = array();

            $acara[] = array([
                'nama' => $nama_mhs
            ]);

            foreach ($peserta_acara as $peserta_acara) {
                $acara[] = DB::table('acara')->where('ID_ACARA', $peserta_acara->ID_ACARA)->get(['NAMA_ACARA', 'TANGGAL_PENYELENGGARAAN']);
            }
            return response()->json($acara);
        }       
    }
}
