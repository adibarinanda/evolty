<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'namatim' => 'string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'asalsekolah' => 'required|string|max:255',
            'alamatsekolah' => 'required|string|max:255',
            'namaketua' => 'required|string|max:255',
            'kelasketua' => 'required|string|max:3',
            'namaanggota1' => 'string|max:255',
            'kelasanggota1' => 'string|max:3',
            'namaanggota2' => 'string|max:255',
            'kelasanggota2' => 'string|max:3',
            'event' => 'required|string|max:255',
            'notelp' => 'required|string|max:255',
            'bukti' => 'required|image|max:2048',
            'region' => 'required|string|max:25',
            'tipetes' => 'required|string|max:25',
            'tipedaftar' => 'required|string|max:15',
            

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $fileName = 'null';

              $destinationPath = 'public/uploads/bukti';
              $extension = Input::file('bukti')->getClientOriginalExtension();
              $fileName = uniqid().'.'.$extension;

              Input::file('bukti')->move($destinationPath, $fileName);

        return User::create([
            'namatim' => $data['namatim'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'asalsekolah' => $data['asalsekolah'],
            'alamatsekolah' => $data['alamatsekolah'],
            'namaketua' => $data['namaketua'],
            'kelasketua' => $data['kelasketua'],
            'namaanggota1' => $data['namaanggota1'],
            'kelasanggota1' => $data['kelasanggota1'],
            'namaanggota2' => $data['namaanggota2'],
            'kelasanggota2' => $data['kelasanggota2'],
            'event' => $data['event'],
            'notelp' => $data['notelp'],
            'bukti' => $fileName,
            'region' => $data['region'],
            'tipetes' => $data['tipetes'],
            'tipedaftar' => $data['tipedaftar']
        ]);
    // return dd();
    }

    public function update(Request $request)
    {
        $uservar = User::find($request->verifID);
        $uservar->no_peserta = $data['nopesertanew'];
    }
}
