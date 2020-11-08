<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Session;

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
        if (Auth::user()->ID_TIPE_USER == 1) {
            return redirect()->route('admin-acara');

         } else if (Auth::user()->ID_TIPE_USER == 2) {
            return redirect()->route('mahasiswa-acara');
         }
    }

    public function logout(){
        Auth::logout();
        Session::flush();

        return redirect('login');
    }

    public function changepass(Request $req){

        $id = Auth::user()->nim;

        $user = User::find($id);
        $user->password = bcrypt($req->new_password);
        $user->save();

        return redirect('/');
    }
}
