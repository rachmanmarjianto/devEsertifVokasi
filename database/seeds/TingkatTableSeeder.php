<?php

use Illuminate\Database\Seeder;

class TingkatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tingkat = array(
            "Departemen/Program Studi",
            "Fakultas",
            "UKM",
            "Universitas",
            "Regional",
            "Nasional",
            "Nasional Ter-Akreditasi",
            "Nasional Tidak Ter-Akreditasi",
            "Internasional",
            "Lainnya",
            "Dasar",
            "Menengah",
            "Lanjut"
        );

        $jumlah_tingkat = count($tingkat);

        for ($i = 0; $i < $jumlah_tingkat; $i++){
            
            $id_tingkat = $i + 1;

            DB::table('tingkat')->insert([
                'ID_TINGKAT' => $id_tingkat,
                'TINGKAT' => $tingkat[$i]
            ]);
            
        }
    }
}
