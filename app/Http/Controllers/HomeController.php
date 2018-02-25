<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $jumlahuser = DB::table('users')->get();
        return view('home', compact('jumlahuser'));
    }

    public function updateuserbaronas(Request $inputnya)
  {
    $IDupdate = $inputnya->get('updateID');
    $baru = User::find($IDupdate);
    $baru->status = $inputnya->input('status');
    // $baru->namaanggota1 = $inputnya->input('namaanggota1');
    // $baru->namaanggota2 = $inputnya->input('namaanggota2');
    // $baru->namaanggota3 = $inputnya->input('namaanggota3');
    // $baru->asalsekolah = $inputnya->input('asalsekolah');
    // $baru->alamatsekolah = $inputnya->input('alamatsekolah');
    // $baru->baronas_email = $inputnya->input('baronas_email');
    $baru->save();
    return "Hello";
  }
}
