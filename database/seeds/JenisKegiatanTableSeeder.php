<?php

use Illuminate\Database\Seeder;

class JenisKegiatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis_kegiatan_kelompok1 = array(
            "PPKMB", "KKN-BBM", "PKL", "PPKMB 2012"
        );

        $jenis_kegiatan_kelompok2 = array(
            "Pengurus Organisasi",
            "Anggota Aktif Organisasi",
            "Mengikuti Pelatihan Kepemimpinan LKMM",
            "Latihan Kepemimpinan Lainnya",
            "Panitia Dalam Suatu Kegiatan Kemahasiswaan",
            "Mencalonkan Diri Sebagai Calon Ketua/Anggota Organisasi Mahasiswa",
            "Berpartisipasi Dalam Pemira"
        );

        $jenis_kegiatan_kelompok3 = array(
            "Memperoleh prestasi dalam Lomba Karya Tulis Ilmiah/Lingkungan Hidup/Kreativitas/Inovatif/Pemikiran Kritis/Populer/Interpreneurship/Business Plan",
            "Mengikuti Kegiatan Lomba Ilmiah",
            "Mengikuti kegiatan/forum ilmiah (seminar, lokakarya, workshop, pameran",
            "Menghasilkan temuan inovasi yang dipatenkan",
            "Menghasilkan karya ilmiah yang dipublikasikan dalam majalah ilmiah",
            "Menghasilkan karya populer yang diterbitkan di surat kabar/majalah/media lainnya",
            "Menghasilkan karya yang didanai oleh pemerintah/pihak lain",
            "Memberikan pelatihan/bimbingan dalam penyusunan karya tulis",
            "Menghasilkan karya yang tidak dipublikasikan",
            "Mengikuti kuliah tamu",
            "Terlibat dalam penelitian pihak lain",
            "MAWAPRES"
        );

        $jenis_kegiatan_kelompok4 = array(
            "Memperoleh prestasi dalam kegiatan Minat dan Bakat (Olahraga, Seni, Kerohanian, dan IT)",
            "Mengikuti kegiatan Minat dan Bakat (Olahraga, Seni, dan Kerohanian)",
            "Menjadi Pelatih/Pembimbing kegiatan Minat dan Bakat",
            "Melaksanakan Latihan Gabungan",
            "Melaksanakan aktivitas rutin berkaitan dengan kegiatan minat dan bakat yang diselenggarakan UKM",
            "Menjadi mitra tanding pada kegiatan minat dan bakat",
            "Menghasilkan karya seni (konser, pameran seni, puisi, fotografi, teater, dll)",
            "Mengelola Kewirausahaan"
        );

        $jenis_kegiatan_kelompok5 = array(
            "Mengikuti Pelaksanaan Bakti Sosial",
            "Penanganan Bencana",
            "Bantuan pembimbingan rutin (LBB, Pengajian, TPA, PAUD)",
            "Kegiatan lain individual-sosial"
        );

        $jenis_kegiatan_kelompok6 = array(
            "Upacara Bendera",
            "Berpartisipasi dalam kegiatan Alumni",
            "Melakukan kunjungan/studi banding",
            "Magang Kerja",
            "Magang Penelitian",
            "ESQ",
            "Jati Diri",
            "Lomba Blog"
        );

        $jumlah_jenis_kegiatan_kelompok1 = count($jenis_kegiatan_kelompok1);
        $jumlah_jenis_kegiatan_kelompok2 = count($jenis_kegiatan_kelompok2);
        $jumlah_jenis_kegiatan_kelompok3 = count($jenis_kegiatan_kelompok3);
        $jumlah_jenis_kegiatan_kelompok4 = count($jenis_kegiatan_kelompok4);
        $jumlah_jenis_kegiatan_kelompok5 = count($jenis_kegiatan_kelompok5);
        $jumlah_jenis_kegiatan_kelompok6 = count($jenis_kegiatan_kelompok6);

        $id_jenis_kegiatan = 1;

        for ($i = 0; $i < $jumlah_jenis_kegiatan_kelompok1; $i++){

            DB::table('jenis_kegiatan')->insert([
                'ID_JENIS_KEGIATAN' => $id_jenis_kegiatan,
                'ID_KELOMPOK_KEGIATAN' => 1,
                'JENIS_KEGIATAN' => $jenis_kegiatan_kelompok1[$i]
            ]);

            $id_jenis_kegiatan++;

        }

        for ($i = 0; $i < $jumlah_jenis_kegiatan_kelompok2; $i++){

            DB::table('jenis_kegiatan')->insert([
                'ID_JENIS_KEGIATAN' => $id_jenis_kegiatan,
                'ID_KELOMPOK_KEGIATAN' => 2,
                'JENIS_KEGIATAN' => $jenis_kegiatan_kelompok2[$i]
            ]);

            $id_jenis_kegiatan++;

        }

        for ($i = 0; $i < $jumlah_jenis_kegiatan_kelompok3; $i++){

            DB::table('jenis_kegiatan')->insert([
                'ID_JENIS_KEGIATAN' => $id_jenis_kegiatan,
                'ID_KELOMPOK_KEGIATAN' => 3,
                'JENIS_KEGIATAN' => $jenis_kegiatan_kelompok3[$i]
            ]);

            $id_jenis_kegiatan++;

        }

        for ($i = 0; $i < $jumlah_jenis_kegiatan_kelompok4; $i++){

            DB::table('jenis_kegiatan')->insert([
                'ID_JENIS_KEGIATAN' => $id_jenis_kegiatan,
                'ID_KELOMPOK_KEGIATAN' => 4,
                'JENIS_KEGIATAN' => $jenis_kegiatan_kelompok4[$i]
            ]);

            $id_jenis_kegiatan++;

        }

        for ($i = 0; $i < $jumlah_jenis_kegiatan_kelompok5; $i++){

            DB::table('jenis_kegiatan')->insert([
                'ID_JENIS_KEGIATAN' => $id_jenis_kegiatan,
                'ID_KELOMPOK_KEGIATAN' => 5,
                'JENIS_KEGIATAN' => $jenis_kegiatan_kelompok5[$i]
            ]);

            $id_jenis_kegiatan++;

        }

        for ($i = 0; $i < $jumlah_jenis_kegiatan_kelompok6; $i++){

            DB::table('jenis_kegiatan')->insert([
                'ID_JENIS_KEGIATAN' => $id_jenis_kegiatan,
                'ID_KELOMPOK_KEGIATAN' => 6,
                'JENIS_KEGIATAN' => $jenis_kegiatan_kelompok6[$i]
            ]);

            $id_jenis_kegiatan++;

        }
        
    }
}
