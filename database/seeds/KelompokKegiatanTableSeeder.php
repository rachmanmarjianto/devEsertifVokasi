<?php

use Illuminate\Database\Seeder;

class KelompokKegiatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('kelompok_kegiatan')->insert(array (
            0 => 
            array (
                'ID_KELOMPOK_KEGIATAN' => 1,
                'KELOMPOK_KEGIATAN' => 'Kegiatan Wajib Universitas',
            ),
            1 => 
            array (
                'ID_KELOMPOK_KEGIATAN' => 2,
                'KELOMPOK_KEGIATAN' => 'Kegiatan Bidang Organisasi Dan Kepemimpinan',
            ),
            2 =>
            array (
                'ID_KELOMPOK_KEGIATAN' => 3,
                'KELOMPOK_KEGIATAN' => 'Kegiatan Bidang Penalaran Dan Keilmuan',
            ),
            3 =>
            array (
                'ID_KELOMPOK_KEGIATAN' => 4,
                'KELOMPOK_KEGIATAN' => 'Kegiatan Bidang Minat Dan Bakat',
            ),
            4 =>
            array (
                'ID_KELOMPOK_KEGIATAN' => 5,
                'KELOMPOK_KEGIATAN' => 'Kegiatan Bidang Kepedulian Sosial',
            ),
            5 =>
            array (
                'ID_KELOMPOK_KEGIATAN' => 6,
                'KELOMPOK_KEGIATAN' => 'Kegiatan Lainnya',
            ),
            6 =>
            array (
                'ID_KELOMPOK_KEGIATAN' => 7,
                'KELOMPOK_KEGIATAN' => 'Proker Vokasi',
            ),
        ));
    }
}
