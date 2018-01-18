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

class RegisterBaronasController extends Controller
{
	public function validator(array $data)
    {
        return Validator::make($data, [
            'baronas_kategori' => 'string|max:255',
            'baronas_namatim' => 'string|max:255',
            'baronas_cp' => 'string|max:255',
            'baronas_bukti' => 'required|image|max:2048',
            'baronas_kartupelajar1' => 'required|image|max:2048',
            'baronas_kartupelajar2' => 'required|image|max:2048',
            'baronas_kartupelajar3' => 'required|image|max:2048',
            'baronas_foto1' => 'required|image|max:2048',
            'baronas_foto2' => 'required|image|max:2048',
            'baronas_foto3' => 'required|image|max:2048',
        ]);
    }

    public function daftar(Request $inputnya)
  {
		$fileNamebukti = 'null';
        $destinationPath = 'public/uploads/baronas_bukti';
        $extension = Input::file('baronas_bukti')->getClientOriginalExtension();
        $fileNamebukti = uniqid().'.'.$extension;
        Input::file('baronas_bukti')->move($destinationPath, $fileNamebukti);

    DB::table('users')->insert([
    	
    [	'baronas_kategori' => $inputnya->input('baronas_kategori'),
      'baronas_namatim' => $inputnya->input('baronas_namatim'),
      	'baronas_cp' => $inputnya->input('baronas_cp'),
  		'baronas_bukti' => $fileNamebukti,
  		'event' => $inputnya->input('event')
  	]
    ]);
    return redirect('/register/baronas/success');
  }


   public function updateuserbaronas(Request $inputnya)
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
    

    $IDupdate = $inputnya->input('updateID');
    $baru = User::find($IDupdate);
    $baru->status = $inputnya->input('status');
    $baru->namaanggota1 = $inputnya->input('namaanggota1');
    $baru->namaanggota2 = $inputnya->input('namaanggota2');
    $baru->namaanggota3 = $inputnya->input('namaanggota3');
    $baru->baronas_namapembimbing = $inputnya->input('baronas_namapembimbing');
    $baru->asalsekolah = $inputnya->input('asalsekolah');
    $baru->alamatsekolah = $inputnya->input('alamatsekolah');
    $baru->baronas_email = $inputnya->input('baronas_email');
    $baru->baronas_kartupelajar1 = $fileNamekartupelajar1;
    $baru->baronas_kartupelajar2 = $fileNamekartupelajar2;
    $baru->baronas_kartupelajar3 = $fileNamekartupelajar3;
    $baru->baronas_foto1 = $fileNamefoto1;
    $baru->baronas_foto2 = $fileNamefoto2;
    $baru->baronas_foto3 = $fileNamefoto3;
    $baru->save();
    return redirect('/home');
  }

  
}