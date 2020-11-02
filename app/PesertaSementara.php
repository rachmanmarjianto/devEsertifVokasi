<?php

namespace App;

class PesertaSementara
{
    protected $casts = [
        'ID_ACARA' => 'int',
        'ID_PARTISIPASI' => 'int'
    ];

    protected $fillable = [
        'ID_PARTISIPASI',
        'DIGITAL_SIGNATURE',
        'USERNAME',
    ];
}
