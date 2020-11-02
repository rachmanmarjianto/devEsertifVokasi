<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\PesertaSementara;
use App\Models\Acara;
use App\Models\JenisKegiatan;

class PartisipanImport implements ToModel, WithHeadingRow
{

    /**
    * @param Collection $collection
    */
    public function model(array $rows)
    {
    	// $acara = Acara::find($id_acara);
    	// $jenis_kegiatan = JenisKegiatan::find($acara->ID_JENIS_KEGIATAN);
            return new PesertaSementara([
                'USERNAME' => $row['nim'],
                'NAMA_USER' => $row['nama'],
                'ID_PARTISIPASI' => $row['partisipasi'],
            ]);
    }
}
