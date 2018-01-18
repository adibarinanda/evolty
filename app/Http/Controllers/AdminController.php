<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    $userspag = DB::table('users')->paginate(3);
    $jumlahuser = DB::table('users')->where('event','electra')->get();
      return view('adminelectra', compact('jumlahuser'));
  }

public function baronasindex()
  {
    $jumlahuser = DB::table('users')->where('event','baronas')->get();
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
    $baru->tipetes = $inputnya->input('tipetes');
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

  public function baronasadduser(Request $inputnya)
  {
    $IDupdate = $inputnya->input('updateID');
    $baru = User::find($IDupdate);
    $passwordcrypted = bcrypt($inputnya->input('password'));

    $baru->email = $inputnya->input('email');
    $baru->password = $passwordcrypted;
    $baru->no_peserta = $inputnya->input('no_peserta');
    $baru->save();
    return redirect('/admin/baronas');
  }

  public function baronaskestari(Request $inputnya)
  {
    $fileNamekartupelajar1 = 'null';
    $destinationPath = 'public/uploads/baronas_kartupelajar';
    $extension = Input::file('baronas_kartupelajar1')->getClientOriginalExtension();
    $fileNamekartupelajar1 = uniqid().'.'.$extension;
    Input::file('baronas_kartupelajar1')->move($destinationPath, $fileNamekartupelajar1);

    $fileNamekartupelajar2 = 'null';
    $destinationPath = 'public/uploads/baronas_kartupelajar';
    $extension = Input::file('baronas_kartupelajar2')->getClientOriginalExtension();
    $fileNamekartupelajar2 = uniqid().'.'.$extension;
    Input::file('baronas_kartupelajar2')->move($destinationPath, $fileNamekartupelajar2);

    $fileNamekartupelajar3 = 'null';
    $destinationPath = 'public/uploads/baronas_kartupelajar';
    $extension = Input::file('baronas_kartupelajar3')->getClientOriginalExtension();
    $fileNamekartupelajar3 = uniqid().'.'.$extension;
    Input::file('baronas_kartupelajar3')->move($destinationPath, $fileNamekartupelajar3);

    $fileNamefoto1 = 'null';
    $destinationPath = 'public/uploads/baronas_foto';
    $extension = Input::file('baronas_foto1')->getClientOriginalExtension();
    $fileNamefoto1 = uniqid().'.'.$extension;
    Input::file('baronas_foto1')->move($destinationPath, $fileNamefoto1);

    $fileNamefoto2 = 'null';
    $destinationPath = 'public/uploads/baronas_foto';
    $extension = Input::file('baronas_foto2')->getClientOriginalExtension();
    $fileNamefoto2 = uniqid().'.'.$extension;
    Input::file('baronas_foto2')->move($destinationPath, $fileNamefoto2);

    $fileNamefoto3 = 'null';
    $destinationPath = 'public/uploads/baronas_foto';
    $extension = Input::file('baronas_foto3')->getClientOriginalExtension();
    $fileNamefoto3 = uniqid().'.'.$extension;
    Input::file('baronas_foto3')->move($destinationPath, $fileNamefoto3);

    DB::table('users')->insert([
      [
      'event' => $inputnya->input('event'),
      'tipedaftar' => $inputnya->input('tipedaftar'),
      'status' => $inputnya->input('status'),
      'baronas_kategori' => $inputnya->input('baronas_kategori'),
      'baronas_namatim' => $inputnya->input('baronas_namatim'),
      'baronas_cp' => $inputnya->input('baronas_cp'),
      'baronas_namapembimbing' => $inputnya->input('baronas_namapembimbing'),
      'namaanggota1' => $inputnya->input('namaanggota1'),
      'baronas_kartupelajar1' => $fileNamekartupelajar1,
      'baronas_foto1' => $fileNamefoto1,
      'namaanggota2' => $inputnya->input('namaanggota2'),
      'baronas_kartupelajar2' => $fileNamekartupelajar2,
      'baronas_foto2' => $fileNamefoto2,
      'namaanggota3' => $inputnya->input('namaanggota3'),
      'baronas_kartupelajar3' => $fileNamekartupelajar3,
      'baronas_foto3' => $fileNamefoto3,
      'asalsekolah' => $inputnya->input('asalsekolah'),
      'alamatsekolah' => $inputnya->input('alamatsekolah'),
      'baronas_email' => $inputnya->input('baronas_email'),
      'no_peserta' => $inputnya->input('no_peserta')]
    ]);
    return redirect('/admin/baronas');
  }

  public function delete(Request $request){
    
    $IDdelete = $request->input('deleteID');
    // $delete = User::find($IDdelete);
    DB::table('users')->where('id', '=', $IDdelete)->delete();
    // $delete->save();
    return redirect('/admin');
  }
}