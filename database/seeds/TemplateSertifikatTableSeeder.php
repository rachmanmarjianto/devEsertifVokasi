<?php

use Illuminate\Database\Seeder;

class TemplateSertifikatTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('template_sertifikat')->delete();
        
        \DB::table('template_sertifikat')->insert(array (
            0 => 
            array (
                'ID_TEMPLATE' => 1,
                'NAMA_TEMPLATE' => 'template_1',
                'FILE_TEMPLATE' => 'sdgsdgsdg',
                'FILE_PHP' => 'sdgsdgdsg',
            ),
        ));
        
        
    }
}