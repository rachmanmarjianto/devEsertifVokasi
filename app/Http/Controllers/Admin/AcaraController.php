<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcaraController extends Controller
{
    public function index()
    {
        return view('admin.acara');
    }

    public function buat_acara()
    {
        return view('admin.buat-acara');
    }

    public function detail_acara()
    {
        return view('admin.detail-acara');
    }
}
