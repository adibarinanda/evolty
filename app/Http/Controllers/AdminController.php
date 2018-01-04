<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
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
    $jumlahuser = DB::table('users')->where('event','electra')->get();
      return view('adminelectra', compact('jumlahuser'));
  }

public function baronasindex()
  {
    $jumlahuser = DB::table('users')->where('event', 'baronas')->get();
      return view('adminbaronas', compact('jumlahuser'));
  }

  public function nopes(Request $inpute)
  {
    $IDtambahnopes = $inpute->input('tambahnopesID');
    $baru = User::find($IDtambahnopes); 
    $baru->no_peserta = $inpute->input('no_peserta');
    $baru->save();
    return redirect('/admin'); // lali aku link e opo wkwk
  }

  public function update(Request $inputnya)
  {
    $IDupdate = $inputnya->input('updateID');
    $baru = User::find($IDupdate);
    $baru->no_peserta = $inputnya->input('no_peserta');
    $baru->namatim = $inputnya->input('namatim');
    $baru->email = $inputnya->input('email');
    $baru->region = $inputnya->input('region');
    $baru->notelp = $inputnya->input('notelp');
    $baru->asalsekolah = $inputnya->input('asalsekolah');
    $baru->alamatsekolah = $inputnya->input('alamatsekolah');
    $baru->namaketua = $inputnya->input('namaketua');
    $baru->kelasketua = $inputnya->input('kelasketua');
    $baru->namaanggota1 = $inputnya->input('namaanggota1');
    $baru->kelasanggota1 = $inputnya->input('kelasanggota1');
    $baru->namaanggota2 = $inputnya->input('namaanggota2');
    $baru->kelasanggota2 = $inputnya->input('kelasanggota2');
    $baru->save();
    return redirect('/admin');
  }

  public function tambah(Request $inputnya)
  {
    DB::table('users')->insert([
      ['namatim' => $inputnya->input('namatim'),
      'region' => $inputnya->input('region'),
      'asalsekolah' => $inputnya->input('asalsekolah'),
      'alamatsekolah' => $inputnya->input('alamatsekolah'),
      'namaketua' => $inputnya->input('namaketua'),
      'kelasketua' => $inputnya->input('kelasketua'),
      'namaanggota1' => $inputnya->input('namaanggota1'),
      'kelasanggota1' => $inputnya->input('kelasanggota1'),
      'namaanggota2' => $inputnya->input('namaanggota2'),
      'kelasanggota2' => $inputnya->input('kelasanggota2'),
      'email' => $inputnya->input('email'),
      'notelp' => $inputnya->input('notelp'),
      'password' => bcrypt($inputnya->input('password')),
      'tipetes' => $inputnya->input('tipetes'),
      'tipedaftar' => $inputnya->input('tipedaftar'),
      'event' => $inputnya->input('event') ]
    ]);
    return redirect('/admin');
  }

  public function delete(Request $request){
    
    $IDdelete = $request->input('deleteID');
    // $delete = User::find($IDdelete);
    DB::table('users')->where('id', '=', $IDdelete)->delete();
    // $delete->save();
    return redirect('/admin');
  }
}