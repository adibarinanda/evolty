<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'namatim', 'email', 'password', 'asalsekolah', 'alamatsekolah', 'namaketua',
        'kelasketua', 'namaanggota1', 'kelasanggota1', 'namaanggota2', 'kelasanggota2',
        'event', 'notelp', 'bukti', 'region', 'tipetes', 'no_peserta'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
