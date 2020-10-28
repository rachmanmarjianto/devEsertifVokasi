<?php

use Illuminate\Database\Seeder;

class TipeUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tipe_user')->insert(array (
            0 => 
            array (
                'ID_TIPE_USER' => 1,
                'NAMA_TIPE_USER' => 'Admin',
            ),
            1 => 
            array (
                'ID_TIPE_USER' => 2,
                'NAMA_TIPE_USER' => 'Mahasiswa',
            )
        ));
    }
}
