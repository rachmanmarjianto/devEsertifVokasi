<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AcaraController extends Controller
{
    public function index()
    {
        return view('admin.acara');
    }

    public function buat_acara()
    {
        $tahun_akademik = DB::table('tahun_akademik')->orderBy('ID_TAHUN_AKADEMIK', 'desc')->get();
        $kelompok_kegiatan = DB::table('kelompok_kegiatan')->get();
        
        return view('admin.buat-acara', compact([
            'tahun_akademik',
            'kelompok_kegiatan'
        ]));
    }

    public function req_data_jenis_kegiatan()
    {
        $id_kelompok_kegiatan = $_POST['id'];
        $jenis_kegiatan = DB::table('jenis_kegiatan')->where('ID_KELOMPOK_KEGIATAN', $id_kelompok_kegiatan)->get();
        return response()->json($jenis_kegiatan);
    }

    public function store_acara(Request $request)
    {
        
        dd($request->all());

        // $request->validate([
        //     'file_sertif' => 'required|bail|file|image|mimes:jpg,jpeg',
        //     'file_daftar_partisipan' => 'required'
        // ]);
          
        $file_sertif = $request->file('file_sertif');
        $file_daftar_partisipan = $request->file('file_daftar_partisipan');
        
        $nama_file_sertif = $request->input_nama_acara . $file_sertif->getClientOriginalExtension();
        $nama_file_daftar_partisipan = $request->input_nama_acara . $file_daftar_partisipan->getClientOriginalExtension();
        
        // $nama_file_sertif = $request->input_nama_acara . $file_sertif->extension();
        // $nama_file_daftar_partisipan = $request->input_nama_acara . $file_daftar_partisipan->extension();

        // $nama_file_sertif = $file_sertif->getClientOriginalName() . $file_sertif->getClientOriginalExtension();
        // $nama_file_daftar_partisipan = $file_daftar_partisipan->getClientOriginalName() . $file_daftar_partisipan->getClientOriginalExtension();
        

        $path_sertif = '/storage/sertifikat/'.$nama_file_sertif;
        $path_daftar_partisipan = '/storage/excel/'.$nama_file_daftar_partisipan;

        // Simpan file2 ke storage (public/storage/)
        \File::put(base_path().'/public'.$path_sertif, $file_sertif);
        \File::put(base_path().'/public'.$path_daftar_partisipan, $file_daftar_partisipan);

        // Insert DB
        DB::table('acara')->insert([
            'ID_TEMPLATE' => $request->input_template,
            'ID_TINGKAT' => $request->input_tingkat,
            'ID_TAHUN_AKADEMIK' => $request->input_tahun_akademik,
            'ID_JENIS_KEGIATAN' => $request->input_jenis_kegiatan,
            'NAMA_ACARA' => $request->input_nama_acara,
            'PENYELENGGARA' => $request->input_penyelenggara,
            'TANGGAL_PENYELENGGARAAN' => $request->input_tanggal_penyelenggaraan,
            'FILE_SERTIF' => $path_sertif,
            'FILE_NAMA' => $path_daftar_partisipan
        ]);

        return redirect('/admin-acara');

    }

    public function detail_acara()
    {
        return view('admin.detail-acara');
    }

    public function store_acara_backup(Request $request)
    {
        
        dd($request);

        $request->validate([
            'file_sertif' => 'required|bail|file|image|mimes:jpg,jpeg',
            'file_daftar_partisipan' => 'required'
        ]);
          
        Storage::disk('local')->put('sertifikat/'.$request->nama_acara, $request->file_sertif);
        $path = 'storage/sertifikat/'.$request->nama_acara.$request->file('file_sertif')->extension();

    }

}
