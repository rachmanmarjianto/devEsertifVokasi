<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->id_tipe_user == 1) {
            return redirect()->route('admin-acara');

         } else if (Auth::user()->id_tipe_user == 2) {
            return redirect()->route('mahasiswa-acara');
         }
    }
}
