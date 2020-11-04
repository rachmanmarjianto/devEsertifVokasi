<?php

use Illuminate\Database\Seeder;
use Spatie\PdfToImage\Pdf as Pdf;
use Org_Heigl\Ghostscript\Ghostscript;
use App\Models\TemplateSertifikat;

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
                'FILE_TEMPLATE' => '/template/template_1.pdf',
                'FILE_PHP' => 'sdgsdgdsg',
            ),
            1 => 
            array (
                'ID_TEMPLATE' => 2,
                'NAMA_TEMPLATE' => 'Template 2',
                'FILE_TEMPLATE' => '/template/template_2.pdf',
                'FILE_PHP' => 'sertifikat.template_2',
            ),
            2 => 
            array (
                'ID_TEMPLATE' => 3,
                'NAMA_TEMPLATE' => 'template_1',
                'FILE_TEMPLATE' => '/template/template_3.pdf',
                'FILE_PHP' => 'sdgsdgdsg',
            ),
        ));

        Ghostscript::setGsPath('C:\Program Files (x86)\gs\gs8.64\bin\gswin32c.exe');
        $template = TemplateSertifikat::all();

        foreach($template as $t){

            $pdf = new Pdf(public_path($t->FILE_TEMPLATE));
            $pdf->setOutputFormat('png')->saveImage(public_path('/template/preview_'.$t->NAMA_TEMPLATE.'.png'));

        }
        
        
    }
}