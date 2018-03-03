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

class RegisterNSController extends Controller
{
	public function validator(array $data)
    {
        return Validator::make($data, [
            'ns_nama' => 'string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'ns_kampus' => 'string|max:255',
            'ns_notelp' => 'string|max:255',
            'ns_line' => 'string|max:255',
            'ns_bukti' => 'required|image|max:2048'
        ]);
    }

    public function daftar(Request $inputnya)
    {
		$fileNamebukti = 'null';
        $destinationPath = 'public/uploads/ns_bukti';
        $extension = Input::file('ns_bukti')->getClientOriginalExtension();
        $fileNamebukti = uniqid().'.'.$extension;
        Input::file('ns_bukti')->move($destinationPath, $fileNamebukti);
        
        DB::table('users')->insert([  	
            [	
                'ns_nama' => $inputnya->input('ns_nama'),
                'email' => $inputnya->input('email'),
                'password' => bcrypt($inputnya->input('password')),
                'ns_kampus' => $inputnya->input('ns_kampus'),
      	        'ns_notelp' => $inputnya->input('ns_notelp'),
                'ns_line' => $inputnya->input('ns_line'),
  		        'ns_bukti' => $fileNamebukti,
                'event' => $inputnya->input('event')
  	         ]
        ]);
        return redirect('/register/ns/success');
        // return dd();
    } 
}