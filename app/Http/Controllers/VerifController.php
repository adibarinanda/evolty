<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Auth;

class VerifController extends Controller
{
    public function update(Request $request)
	{
    	$verif = User::find($request->verifID);
        // $nopesertanew = User::find($request->nopesertanew);
    	if($verif->status == 0){
    		$verif->status = 1;
            // $verif->no_peserta = $data['nopesertanew'];	
    	}
    	else {
    		$verif->status = 0;	
    	}
    	$verif->update();
  	return redirect()->back()->with('message', 'Akun diaktifkan');
	}
}
