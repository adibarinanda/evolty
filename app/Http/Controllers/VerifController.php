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
  //$verif = User::where('id', '=', $request->get('id'))->delete();
     $verif = User::find($request->verifID);
     $verif->status = 1;
     $verif->update();
  //$verif->save();
  // return dd;
   return redirect()->back()->with('message', 'Akun diaktifkan');
   // return view('admin');
}
}
