<?php

use Illuminate\Database\Seeder;

class AcaraTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('acara')->delete();
        
        \DB::table('acara')->insert(array (
            0 =>
            array (
                'ID_ACARA' => 1,
                'ID_TEMPLATE' => 1,
                'ID_TINGKAT' => 1,
                'ID_PRODI' => NULL,
                'ID_TAHUN_AKADEMIK' => 92,
                'ID_JENIS_KEGIATAN' => 14,
                'NAMA_ACARA' => 'Seminar Web Developer',
                'PENYELENGGARA' => 'Himpunan Mahasiswa D3 Sistem Informasi',
                'TANGGAL_PENYELENGGARAAN' => '2020-11-03',
                'TIMESTAMP' => '2020-11-03 17:18:30',
                'FILE_SERTIF' => '/storage/sertifikat/2020_11_03_WhatsApp Image 2020-10-25 at 18.24.00.jpeg',
                'FILE_NAMA' => '/storage/excel/2020_11_03_contoh data nim, nama, partisipasi.xlsx',
            ),
            1 =>
            array (
                'ID_ACARA' => 2,
                'ID_TEMPLATE' => 2,
                'ID_TINGKAT' => 1,
                'ID_PRODI' => NULL,
                'ID_TAHUN_AKADEMIK' => 92,
                'ID_JENIS_KEGIATAN' => 14,
                'NAMA_ACARA' => 'Seminar UI UX Developer',
                'PENYELENGGARA' => 'Himpunan Mahasiswa D3 Sistem Informasi',
                'TANGGAL_PENYELENGGARAAN' => '2020-11-04',
                'TIMESTAMP' => '2020-11-03 17:18:30',
                'FILE_SERTIF' => '/storage/sertifikat/2020_11_03_WhatsApp Image 2020-10-25 at 18.24.00.jpeg',
                'FILE_NAMA' => '/storage/excel/2020_11_03_contoh data nim, nama, partisipasi.xlsx',
            )
        ));
        
        
    }
}