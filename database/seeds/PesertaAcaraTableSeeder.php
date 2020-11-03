<?php

use Illuminate\Database\Seeder;

class PesertaAcaraTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('peserta_acara')->delete();
        
        \DB::table('peserta_acara')->insert(array (
            0 => 
            array (
                'NIM' => 151811513001,
                'ID_ACARA' => 1,
                'ID_PARTISIPASI' => 18,
                'DIGITAL_SIGNATURE' => NULL,
            ),
            1 => 
            array (
                'NIM' => 151811513002,
                'ID_ACARA' => 1,
                'ID_PARTISIPASI' => 17,
                'DIGITAL_SIGNATURE' => NULL,
            ),
            2 => 
            array (
                'NIM' => 151811513003,
                'ID_ACARA' => 1,
                'ID_PARTISIPASI' => 17,
                'DIGITAL_SIGNATURE' => NULL,
            ),
            3 => 
            array (
                'NIM' => 151811513004,
                'ID_ACARA' => 1,
                'ID_PARTISIPASI' => 19,
                'DIGITAL_SIGNATURE' => NULL,
            ),
        ));
        
        
    }
}