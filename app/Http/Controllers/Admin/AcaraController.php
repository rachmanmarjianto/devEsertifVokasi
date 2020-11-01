<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AcaraController extends Controller
{
    public function index()
    {
        $acara = DB::table('acara')->get();
        return view('admin.acara', compact([
            'acara'
        ]));
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
        
        // dd($request->all());

        $request->validate([
            'file_sertif' => 'required|bail|file|image|mimes:jpg,jpeg',
            'file_daftar_partisipan' => 'required'
        ]);
          
        $file_sertif = $request->file('file_sertif');
        $file_daftar_partisipan = $request->file('file_daftar_partisipan');

        $nama_file_sertif = date('Y_m_d').'_'.$file_sertif->getClientOriginalName();
        $nama_file_daftar_partisipan = date('Y_m_d').'_'.$file_daftar_partisipan->getClientOriginalName();

        $path_sertif = '/storage/sertifikat/'.$nama_file_sertif;
        $path_daftar_partisipan = '/storage/excel/'.$nama_file_daftar_partisipan;

        // Simpan file2 ke storage (public/storage/)
        $file_sertif->move('storage/sertifikat', $nama_file_sertif);
        $file_daftar_partisipan->move('storage/excel', $nama_file_daftar_partisipan);

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

    public function detail_acara($id)
    {
        $acara = DB::table('acara')->where('ID_ACARA', $id)->get();
        
        $id_acara = $id;
        $nama_acara = DB::table('acara')->where('ID_ACARA', $id)->value('NAMA_ACARA');
        $penyelenggara = DB::table('acara')->where('ID_ACARA', $id)->value('PENYELENGGARA');
        $tanggal_penyelenggaraan = DB::table('acara')->where('ID_ACARA', $id)->value('TANGGAL_PENYELENGGARAAN');
        
        $file_sertif = DB::table('acara')->where('ID_ACARA', $id)->value('FILE_SERTIF');
        $file_sertif = str_replace('/storage/sertifikat/', '', $file_sertif);

        $file_nama = DB::table('acara')->where('ID_ACARA', $id)->value('FILE_NAMA');
        $file_nama = str_replace('/storage/excel/', '', $file_nama);

        $id_tahun_akademik = DB::table('acara')->where('ID_ACARA', $id)->value('ID_TAHUN_AKADEMIK');
        $tahun_akademik = DB::table('tahun_akademik')->where('ID_TAHUN_AKADEMIK', $id_tahun_akademik)->value('TAHUN_AKADEMIK');

        $id_jenis_kegiatan = DB::table('acara')->where('ID_ACARA', $id)->value('ID_JENIS_KEGIATAN');
        $jenis_kegiatan = DB::table('jenis_kegiatan')->where('ID_JENIS_KEGIATAN', $id_jenis_kegiatan)->value('JENIS_KEGIATAN');
        
        $id_kelompok_kegiatan = DB::table('jenis_kegiatan')->where('ID_JENIS_KEGIATAN', $id_jenis_kegiatan)->value('ID_KELOMPOK_KEGIATAN');
        $kelompok_kegiatan = DB::table('kelompok_kegiatan')->where('ID_KELOMPOK_KEGIATAN', $id_kelompok_kegiatan)->value('KELOMPOK_KEGIATAN');
        
        $id_tingkat = DB::table('acara')->where('ID_ACARA', $id)->value('ID_TINGKAT');
        $tingkat = DB::table('tingkat')->where('ID_TINGKAT', $id_tingkat)->value('TINGKAT');
        
        return view('admin.detail-acara', compact([
            'id_acara',
            'nama_acara',
            'penyelenggara',
            'tanggal_penyelenggaraan',
            'tahun_akademik',
            'kelompok_kegiatan',
            'jenis_kegiatan',
            'tingkat',
            'file_sertif',
            'file_nama'
        ]));
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
