<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class RegisterBaronasController extends Controller
{
	public function validator(array $data)
    {
        return Validator::make($data, [

            'baronas_namatim' => 'string|max:255',
            'baronas_cp' => 'string|max:255',
            'baronas_bukti' => 'required|image|max:2048',
        ]);
    }

    public function daftar(Request $inputnya)
  {
		$fileName = 'null';
        $destinationPath = 'public/uploads/baronas_bukti';
        $extension = Input::file('baronas_bukti')->getClientOriginalExtension();
        $fileName = uniqid().'.'.$extension;
        Input::file('baronas_bukti')->move($destinationPath, $fileName);

    DB::table('users')->insert([
    	
    [	'baronas_namatim' => $inputnya->input('baronas_namatim'),
      	'baronas_cp' => $inputnya->input('baronas_cp'),
  		'baronas_bukti' => $fileName,
  		'event' => $inputnya->input('event')
  	]
    ]);
    return redirect('/register/baronas/success');
  }
}
