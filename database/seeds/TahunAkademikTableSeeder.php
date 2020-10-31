<?php

use Illuminate\Database\Seeder;

class TahunAkademikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$tahun = intval(date('Y'));
        for ($i=45; $i>=0; $i--) {
        	$tahun1 = $tahun-$i;
        	$tahun2 = $tahun+1-$i;
    		DB::table('tahun_akademik')->insert([
                'TAHUN_AKADEMIK' => $tahun1."/".$tahun2." - Genap",
            ]);
    		DB::table('tahun_akademik')->insert([
                'TAHUN_AKADEMIK' => $tahun1."/".$tahun2." - Ganjil",
            ]);
        	
        }
    }
}
