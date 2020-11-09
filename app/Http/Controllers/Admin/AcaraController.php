<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Acara;
use App\Models\User;
use App\Models\PesertaAcara;
use App\Models\Partisipasi;
use App\Models\TemplateSertifikat;
use App\Models\TahunAkademik;
use App\Imports\PartisipanImport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\HeadingRowImport;
use Redirect;
use Input;
use Illuminate\Support\Facades\Storage;

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

    public function edit_acara($id)
    {
        $tahun_akademik = DB::table('tahun_akademik')->orderBy('ID_TAHUN_AKADEMIK', 'desc')->get();
        $kelompok_kegiatan = DB::table('kelompok_kegiatan')->get();
        $data = Acara::select('*')->where('ID_ACARA', '=', $id)->get();
        
        return view('admin.edit-acara', compact([
            'tahun_akademik',
            'kelompok_kegiatan',
            'data'
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

        // $request->validate([
        //     'file_sertif' => 'required|bail|file|image|mimes:jpg,jpeg,png',
        //     'file_daftar_partisipan' => 'required|file|mimes:xls,xlsx'
        // ]);
          
        // $file_sertif = $request->file('file_sertif');
        // $file_daftar_partisipan = $request->file('file_daftar_partisipan');

        // $nama_file_sertif = date('Y_m_d').'_'.$file_sertif->getClientOriginalName();
        // $nama_file_daftar_partisipan = date('Y_m_d').'_'.$file_daftar_partisipan->getClientOriginalName();

        // $path_sertif = '/storage/sertifikat/'.$nama_file_sertif;
        // $path_daftar_partisipan = '/storage/excel/'.$nama_file_daftar_partisipan;

        // Simpan file2 ke storage (public/storage/)
        // $file_sertif->move('storage/sertifikat', $nama_file_sertif);
        // $file_daftar_partisipan->move('storage/excel', $nama_file_daftar_partisipan);

        // $headings = (new HeadingRowImport)->toArray(public_path().$path_daftar_partisipan);

        // $headings = $headings[0][0];

        // if($headings[0] == "nim" && $headings[1] == "nama" && $headings[2] == "partisipasi"){
            // Insert DB
            DB::table('acara')->insert([
                // 'ID_TEMPLATE' => $request->input_template,
                'ID_TINGKAT' => $request->input_tingkat,
                'ID_TAHUN_AKADEMIK' => $request->input_tahun_akademik,
                'ID_JENIS_KEGIATAN' => $request->input_jenis_kegiatan,
                'NAMA_ACARA' => $request->input_nama_acara,
                'PENYELENGGARA' => $request->input_penyelenggara,
                'TANGGAL_PENYELENGGARAAN' => $request->input_tanggal_penyelenggaraan,
                // 'FILE_SERTIF' => $path_sertif,
                // 'FILE_NAMA' => $path_daftar_partisipan
            ]);

            //ambil id acara
            $acara = Acara::select('id_acara')->where([
                // 'ID_TEMPLATE' => $request->input_template,
                'ID_TINGKAT' => $request->input_tingkat,
                'ID_TAHUN_AKADEMIK' => $request->input_tahun_akademik,
                'ID_JENIS_KEGIATAN' => $request->input_jenis_kegiatan,
                'NAMA_ACARA' => $request->input_nama_acara,
                'PENYELENGGARA' => $request->input_penyelenggara,
                'TANGGAL_PENYELENGGARAAN' => $request->input_tanggal_penyelenggaraan,
                // 'FILE_SERTIF' => $path_sertif,
                // 'FILE_NAMA' => $path_daftar_partisipan
            ])->first();

            // $partisipan = Excel::toArray(new PartisipanImport, public_path().$path_daftar_partisipan);

            // for($i=0;$i<count($partisipan[0]);$i++){
            //     $id_partisipasi = Partisipasi::where('ID_JENIS_KEGIATAN',$request->input_jenis_kegiatan)->where('PARTISIPASI',$partisipan[0][$i]['partisipasi'])->value('ID_PARTISIPASI');

            //     if ($id_partisipasi != null) {
            //         $partisipan[0][$i]["id_partisipasi"] = $id_partisipasi;
            //     }
            //     else{
            //         $partisipan[0][$i]["id_partisipasi"] = null;
            //     }

            //     //mengecek apakah ada nim di tabel user. Jika tidak ada, dibuat akun baru.
            //     if(!User::where('nim', $partisipan[0][$i]['nim'])->exists()){
            //         User::create([
            //             'nim' => $partisipan[0][$i]['nim'],
            //             'NAMA_USER' => $partisipan[0][$i]['nama'],
            //             'password' => bcrypt($partisipan[0][$i]['nim']),
            //             'ID_TIPE_USER' => 2,
            //             'STATUS' => 1
            //         ]);
            //     }

                //mengubah atau menambahkan peserta acara
        //         PesertaAcara::insert([
        //             'NIM' =>  $partisipan[0][$i]['nim'],
        //             'ID_ACARA' =>  $acara->id_acara,
        //             'ID_PARTISIPASI'  => $partisipan[0][$i]['id_partisipasi']
        //         ]);
        //     }
        // }
        // else{
        //     return Redirect::back()->withErrors(['File partisipan tidak sesuai format']);
        // }

        return redirect('/admin/detail-acara/'.$acara->id_acara);

    }

    public function store_edit_acara(Request $request){
        DB::table('acara')->where('ID_ACARA', '=', $request->id_acara)->update([
            'ID_TINGKAT' => $request->input_tingkat,
            'ID_TAHUN_AKADEMIK' => $request->input_tahun_akademik,
            'ID_JENIS_KEGIATAN' => $request->input_jenis_kegiatan,
            'NAMA_ACARA' => $request->input_nama_acara,
            'PENYELENGGARA' => $request->input_penyelenggara,
            'TANGGAL_PENYELENGGARAAN' => $request->input_tanggal_penyelenggaraan
        ]);

        return redirect('/admin/detail-acara/'.$request->id_acara);
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

        $partisipan = PesertaAcara::where('id_acara',$id)->get();

        $partisipasi = Partisipasi::where('ID_JENIS_KEGIATAN',$id_jenis_kegiatan)->get();     
        
        $status = PesertaAcara::where('id_acara',$id)->exists();

        $template = TemplateSertifikat::all();
            
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
            'file_nama',
            'partisipan',
            'partisipasi',
            'status',
            'template'
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

    public function update_peserta(Request $request,$id)
    {
        $data = $request->data;

        $count=0;

        //mengecek apakah ada nim di tabel user. Jika tidak ada, dibuat akun baru.
        if(!User::where('nim', $data['nim'])->exists()){
            User::create([
                'nim' => $data['nim'],
                'NAMA_USER' => $data['nama'],
                'password' => bcrypt($data['nim']),
                'ID_TIPE_USER' => 2,
                'STATUS' => 1
            ]);
            $count++;
        }

        $peserta = PesertaAcara::where([
            'NIM' =>  $data['nim'],
            'ID_ACARA' =>  $id,
        ]);

        //mengubah atau menambahkan peserta acara
        $peserta->update([
            'NIM' =>  $data['nim'],
            'ID_ACARA' =>  $id,
            'ID_PARTISIPASI'  => $data['id_partisipasi']
        ]);

        //mengambil nama partisipasi untuk ditambilkan di tabel read peserta
        $data['partisipasi'] = Partisipasi::where('ID_PARTISIPASI',$data['id_partisipasi'])->value('PARTISIPASI');

        return response()->json(["results" => true, "data" => $data, "count" => $count]);
    }

    public function storeSertif(Request $request)
    {
        $request->validate([
            'template' => 'required',
            'id_acara' => 'required',
            'file_sertif' => 'required|file|image|mimes:jpg,jpeg,png',
        ]);

        $acara = Acara::find($request->id_acara);

        $file_sertif = $request->file('file_sertif');
        $nama_file_sertif = date('Y_m_d').'_'.$file_sertif->getClientOriginalName();
        $path_sertif = '/storage/sertifikat/'.$nama_file_sertif;

        // Simpan file2 ke storage (public/storage/)
        $file_sertif->move('storage/sertifikat', $nama_file_sertif);

        $acara->FILE_SERTIF = $path_sertif;
        $acara->ID_TEMPLATE = $request->template;
        $acara->save();

        // dd($request->all());

        return redirect('/admin/detail-acara/'.$request->id_acara);
    }

    public function storePartisipan(Request $request)
    {
        $request->validate([
            'id_acara' => 'required',
            'file_daftar_partisipan' => 'required|file|mimes:xls,xlsx',
        ]);

        $peserta = PesertaAcara::where('ID_ACARA', $request->id_acara)->delete();

        $acara = Acara::find($request->id_acara);

        $file_daftar_partisipan = $request->file('file_daftar_partisipan');
        $nama_file_daftar_partisipan = date('Y_m_d').'_'.$file_daftar_partisipan->getClientOriginalName();
        $path_daftar_partisipan = '/storage/excel/'.$nama_file_daftar_partisipan;

        // Simpan file ke storage (public/storage/)
        $file_daftar_partisipan->move('storage/excel', $nama_file_daftar_partisipan);

        // Insert DB
        $acara->FILE_NAMA = $path_daftar_partisipan;
        $acara->save();

        $id_jenis_kegiatan = Acara::select('ID_JENIS_KEGIATAN')->where('ID_ACARA', '=', $request->id_acara)->first();

        $headings = (new HeadingRowImport)->toArray(public_path().$path_daftar_partisipan);

        $headings = $headings[0][0];

        if($headings[0] == "nim" && $headings[1] == "nama" && $headings[2] == "partisipasi"){

            $partisipan = Excel::toArray(new PartisipanImport, public_path().$path_daftar_partisipan);

            for($i=0;$i<count($partisipan[0]);$i++){
                $id_partisipasi = Partisipasi::where('ID_JENIS_KEGIATAN', $id_jenis_kegiatan->ID_JENIS_KEGIATAN)->where('PARTISIPASI', $partisipan[0][$i]['partisipasi'])->value('ID_PARTISIPASI');

                if ($id_partisipasi != null) {
                    $partisipan[0][$i]["id_partisipasi"] = $id_partisipasi;
                }
                else{
                    $partisipan[0][$i]["id_partisipasi"] = null;
                }

                //mengecek apakah ada nim di tabel user. Jika tidak ada, dibuat akun baru.
                if(!User::where('nim', $partisipan[0][$i]['nim'])->exists()){
                    User::create([
                        'nim' => $partisipan[0][$i]['nim'],
                        'NAMA_USER' => $partisipan[0][$i]['nama'],
                        'password' => bcrypt($partisipan[0][$i]['nim']),
                        'ID_TIPE_USER' => 2,
                        'STATUS' => 1
                    ]);
                }

                //mengubah atau menambahkan peserta acara
                PesertaAcara::insert([
                    'NIM' =>  $partisipan[0][$i]['nim'],
                    'ID_ACARA' =>  $request->id_acara,
                    'ID_PARTISIPASI'  => $partisipan[0][$i]['id_partisipasi']
                ]);
            }
        }
        else{
            return Redirect::back()->withErrors(['File partisipan tidak sesuai format']);
        }

        // Delete file
        Storage::disk('public')->delete($path_daftar_partisipan);
        // File::delete($path_daftar_partisipan);
        // unlink($path_daftar_partisipan);

        return redirect('/admin/detail-acara/'.$request->id_acara);
    }
}
