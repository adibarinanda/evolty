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
        'event', 'notelp', 'bukti', 'region', 'tipetes', 'no_peserta', 'tipedaftar', 'baronas_namatim', 'baronas_cp', 'baronas_bukti', 'baronas_kategori', 'namaanggota3', 'baronas_email', 'baronas_kartupelajar1', 'baronas_kartupelajar2', 'baronas_kartupelajar3', 'baronas_foto1', 'baronas_foto2', 'baronas_foto3', 'ns_nama', 'ns_kampus', 'ns_notelp', 'ns_line', 'ns_bukti'
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
