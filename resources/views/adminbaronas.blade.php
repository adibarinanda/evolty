@if(Auth::user()->id == 1)
@extends('layouts.template')

@section('content')

<section class="dashboard-counts no-padding-bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header d-flex align-items-center">
            <h3 class="h4">Baronas Admin</h3>
          </div>
          <div class="card-body" style="overflow-x:auto;">
            <table id="IDtabel" class="table">
              <thead>
                <tr>
                  <th>Hapus</th>
                  <th>Edit</th>
                  <th class="statusth">Status</th>
                  <th class="buktith">Bukti</th>
                  <th class="verifth">Verif</th>
                  <th class="namatimth">Nama Tim</th>
                  <th class="cpth">Contact Person</th>
                  <th class="emailth">Username</th>
                  <th class="nopesth">No. Peserta</th>
                  <th class="kategorith">Kategori</th>
                  <th class="namaanggota1th">Nama Anggota 1</th>
                  <th class="kartupelajar1th">Kartu Pelajar 1</th>
                  <th class="foto1th">Foto 1</th>
                  <th class="namaanggota2th">Nama Anggota 2</th>
                  <th class="kartupelajar2th">Kartu Pelajar 2</th>
                  <th class="foto2th">Foto 2</th>
                  <th class="namaanggota3th">Nama Anggota 3</th>
                  <th class="kartupelajar3th">Kartu Pelajar 3</th>
                  <th class="foto3th">Foto 3</th>
                  <th class="namapembimbingth">Nama Pembimbing</th>
                  <th class="emailth">Email</th>
                  <th class="asalsekolahth">Asal Sekolah</th>
                  <th class="alamatsekolahth">Alamat Sekolah</th>
                  
                </tr>
              </thead>
              <tbody>

@foreach($jumlahuser as $user)
 <tr>
  <td>
    <form method="post" action="/admin/delete">
      {{csrf_field()}}
      <input type="hidden" name="deleteID" value="{{$user->id}}">
      <button class="btn btn-unverif" type="submit">Hapus</button>
    </form>
  </td>

<td>
  
</td>

  @if($user->status == 0)
    <td> nonaktif</td>
  @else
    <td> aktif</td>
  @endif

  <td>    <a href="../public/uploads/baronas_bukti/{{$user->baronas_bukti}}" target="_blank">{{$user->baronas_bukti}}</a></td>

  <td>
<form method="post" action="/admin">
      {{csrf_field()}}
      <input type="hidden" name="verifID" value="{{$user->id}}"/>
      @if($user->status == 0)
      <button class="btn btn-success" type="submit">
        Verif
      </button>
      @else
      <button class="btn btn-unverif" type="submit">
        Unverif
      </button>
      @endif
    </form>       
  </td>

  <!-- <td>
    @if($user->no_peserta == NULL)
    <button type="button" data-toggle="modal" data-target="#{{ $user->id }}" data-uid="{{$user->id}} " class="update btn btn-warning btn-sm">Input Nomor Peserta </button>
      <div id="{{ $user->id }}" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
              <h4 class="modal-title">Masukkan Nomor Peserta</h4>
            </div>
            <form method="post" action="/admin/nopes">
              {{csrf_field()}}
                <div class="modal-body">
                  <div class="input-group">
                    <input type="hidden" name="tambahnopesID" value="{{$user->id}}"/>
                    <input id="no_peserta" type="text" class="form-control" name="no_peserta" placeholder="Nomor Peserta" value="{{ old('no_peserta') }}" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Masukkan Nomor Peserta</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
          </div>
        </div>
      </div>
      @else
      {{$user->no_peserta}}
      @endif
  </td> -->
  
  
  
  
  
  <td>{{$user->baronas_namatim}}</td>
  <td>{{$user->baronas_cp}}</td>
  <td>
    @if($user->email == NULL)
    <button type="button" data-toggle="modal" data-target="#userpass{{ $user->id }}" data-uid="{{$user->id}} " class="update btn btn-warning btn-sm">Tambah Username dan Password</button>
    <div id="userpass{{ $user->id }}" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h4 class="modal-title">Edit Data Peserta</h4>
          </div>
          <form method="post" action="/admin/baronas/adduser">
            {{csrf_field()}}            
              <div class="modal-body" style="overflow-y: auto; max-height: 400px">
                <input type="hidden" name="updateID" value="{{$user->id}}">
                  <div class="input-group">
                    <p class="my-auto col-lg-4">Email :</p>
                    @if($user->email == NULL)
                    <input id="email" type="text" class="form-control col-lg-8" name="email" placeholder="Email" value="@evolty-its.com" required>
                    @else
                    <input id="email" type="text" class="form-control col-lg-8" name="email" placeholder="Email" value="{{$user->email}}" required>
                    @endif
                  </div>
                  <br>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group">
                      <p class="my-auto col-lg-4">Password :</p>
                      <input id="password" type="text" class="form-control" name="password" placeholder="Password" aria-describedby="addon_password1" required>
                      @if ($errors->has('password'))
                        <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  
                  <div class="input-group">
                    <p class="my-auto col-lg-4">Nomor Peserta :</p>
                    @if($user->no_peserta == NULL)
                    <input id="no_peserta" type="text" class="no_peserta_baronas col-lg-8 form-control" name="no_peserta" value="{{ old('no_peserta') }}" required>
                    @else
                    <input id="no_peserta" type="text" class="no_peserta_baronas col-lg-8 form-control" name="no_peserta" value="{{$user->no_peserta}}" required>
                    @endif
                  </div>

                  <!-- <div class="input-group">
                    <p class="my-auto col-lg-4">Nomor Peserta :</p>
                    <input type="hidden" name="updateID" value="{{$user->id}}"/>
                    @if($user->no_peserta == NULL)
                    <input id="no_peserta" type="text" class="no_peserta col-lg-8 form-control" name="no_peserta" value="{{ old('no_peserta') }}" required>
                    @else
                    <input id="no_peserta" type="text" class="no_peserta col-lg-8 form-control" name="no_peserta" value="{{$user->no_peserta}}" required>
                    @endif
                  </div>

                  
                 

                  <br>
                  <div class="input-group">
                    <p class="my-auto col-lg-4">Nama Tim :</p>
                    @if($user->namatim == NULL)
                    <input id="namatim" type="text" class="form-control col-lg-8" name="namatim" placeholder="Nama Tim" value="{{ old('namatim') }}" required>
                    @else
                    <input id="namatim" type="text" class="form-control col-lg-8" name="namatim" placeholder="Nama Tim" value="{{$user->namatim}}" required>
                    @endif
                  </div>
                  <br>
                  <div class="input-group">
                    <p class="my-auto col-lg-4">Email :</p>
                    @if($user->email == NULL)
                    <input id="email" type="text" class="form-control col-lg-8" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    @else
                    <input id="email" type="text" class="form-control col-lg-8" name="email" placeholder="Email" value="{{$user->email}}" required>
                    @endif
                  </div>
                  <br>
                  <div class="input-group">
                    <p class="my-auto col-lg-4">Region :</p>
                    @if($user->region == NULL)
                    <input id="region" type="text" class="form-control col-lg-8" name="region" placeholder="Region" value="{{ old('region') }}" required>
                    @else
                    <input id="region" type="text" class="form-control col-lg-8" name="region" placeholder="Region" value="{{$user->region}}" required>
                    @endif
                  </div>
                    <br>
                  <div class="input-group">
                    <p class="my-auto col-lg-4">Nomor Telepon :</p>
                    @if($user->notelp == NULL)
                    <input id="notelp" type="text" class="form-control col-lg-8" name="notelp" placeholder="Nomor Telepon" value="{{ old('notelp') }}" required>
                    @else
                    <input id="notelp" type="text" class="form-control col-lg-8" name="notelp" placeholder="Nomor Telepon" value="{{$user->notelp}}" required>
                    @endif
                  </div>
                   <br>
                  <div class="input-group">
                    <p class="my-auto col-lg-4">Asal Sekolah :</p>
                    @if($user->asalsekolah == NULL)
                    <input id="asalsekolah" type="text" class="form-control col-lg-8" name="asalsekolah" placeholder="Asal Sekolah" value="{{ old('asalsekolah') }}" required>
                    @else
                    <input id="asalsekolah" type="text" class="form-control col-lg-8" name="asalsekolah" placeholder="Asal Sekolah" value="{{$user->asalsekolah}}" required>
                    @endif
                  </div>
                  <br>
                  <div class="input-group">
                    <p class="my-auto col-lg-4">Alamat Sekolah :</p>
                    @if($user->alamatsekolah == NULL)
                    <input id="alamatsekolah" type="text" class="form-control col-lg-8" name="alamatsekolah" placeholder="Alamat Sekolah" value="{{ old('alamatsekolah') }}" required>
                    @else
                    <input id="alamatsekolah" type="text" class="form-control col-lg-8" name="alamatsekolah" placeholder="Alamat Sekolah" value="{{$user->alamatsekolah}}" required>
                    @endif
                  </div>
                  <br>
                  <div class="input-group">
                    <p class="my-auto col-lg-4">Nama Ketua :</p>
                    @if($user->namaketua == NULL)
                    <input id="namaketua" type="text" class="form-control col-lg-8" name="namaketua" placeholder="Nama Ketua" value="{{ old('namaketua') }}" required>
                    @else
                    <input id="namaketua" type="text" class="form-control col-lg-8" name="namaketua" placeholder="Nama Ketua" value="{{$user->namaketua}}" required>
                    @endif
                  </div>
                  <br>
                  <div class="input-group">
                    <p class="my-auto col-lg-4">Kelas Ketua :</p>
                    @if($user->kelasketua == NULL)
                    <input id="kelasketua" type="text" class="form-control col-lg-8" name="kelasketua" placeholder="Kelas Ketua" value="{{ old('kelasketua') }}" required>
                    @else
                    <input id="kelasketua" type="text" class="form-control col-lg-8" name="kelasketua" placeholder="Kelas Ketua" value="{{$user->kelasketua}}" required>
                    @endif
                  </div>
                  <br>
                  <div class="input-group">
                    <p class="my-auto col-lg-4">Nama Anggota 1 :</p>
                    @if($user->namaanggota1 == NULL)
                    <input id="namaanggota1" type="text" class="form-control col-lg-8" name="namaanggota1" placeholder="Nama Anggota 1" value="{{ old('namaanggota1') }}" required>
                    @else
                    <input id="namaanggota1" type="text" class="form-control col-lg-8" name="namaanggota1" placeholder="Nama Anggota 1" value="{{$user->namaanggota1}}" required>
                    @endif
                  </div>
                  <br>
                  <div class="input-group">
                    <p class="my-auto col-lg-4">Kelas Anggota 1 :</p>
                    @if($user->kelasanggota1 == NULL)
                    <input id="kelasanggota1" type="text" class="form-control col-lg-8" name="kelasanggota1" placeholder="Kelas Anggota 1" value="{{ old('kelasanggota1') }}" required>
                    @else
                    <input id="kelasanggota1" type="text" class="form-control col-lg-8" name="kelasanggota1" placeholder="Kelas Anggota 1" value="{{$user->kelasanggota1}}" required>
                    @endif
                  </div>
                  <br>
                  <div class="input-group">
                    <p class="my-auto col-lg-4">Nama Anggota 2 :</p>
                    @if($user->namaanggota2 == NULL)
                    <input id="namaanggota2" type="text" class="form-control col-lg-8" name="namaanggota2" placeholder="Nama Anggota 2" value="{{ old('namaanggota2') }}" required>
                    @else
                    <input id="namaanggota2" type="text" class="form-control col-lg-8" name="namaanggota2" placeholder="Nama Anggota 2" value="{{$user->namaanggota2}}" required>
                    @endif
                  </div>
                  <br>
                  <div class="input-group">
                    <p class="my-auto col-lg-4">Kelas Anggota 2 :</p>
                    @if($user->kelasanggota2 == NULL)
                    <input id="kelasanggota2" type="text" class="form-control col-lg-8" name="kelasanggota2" placeholder="Kelas Anggota 2" value="{{ old('kelasanggota2') }}" required>
                    @else
                    <input id="kelasanggota2" type="text" class="form-control col-lg-8" name="kelasanggota2" placeholder="Kelas Anggota 2" value="{{$user->kelasanggota2}}" required>
                    @endif
                  </div> -->

                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Masukkan Data Peserta</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    @else{{$user->email}}
  @endif</td>
  <td>{{$user->no_peserta}}</td>
  <td>{{$user->baronas_kategori}}</td>
  <td>{{$user->namaanggota1}}</td>
  <td>    <a href="../public/uploads/baronas_kartupelajar/{{$user->baronas_kartupelajar1}}" target="_blank">{{$user->baronas_kartupelajar1}}</a></td>
  <td>    <a href="../public/uploads/baronas_foto/{{$user->baronas_foto1}}" target="_blank">{{$user->baronas_foto1}}</a></td>
  <td>{{$user->namaanggota2}}</td>
  <td>    <a href="../public/uploads/baronas_kartupelajar/{{$user->baronas_kartupelajar2}}" target="_blank">{{$user->baronas_kartupelajar2}}</a></td>
  <td>    <a href="../public/uploads/baronas_foto/{{$user->baronas_foto2}}" target="_blank">{{$user->baronas_foto2}}</a></td>
  <td>{{$user->namaanggota3}}</td>
  <td>    <a href="../public/uploads/baronas_kartupelajar/{{$user->baronas_kartupelajar3}}" target="_blank">{{$user->baronas_kartupelajar3}}</a></td>
  <td>    <a href="../public/uploads/baronas_foto/{{$user->baronas_foto3}}" target="_blank">{{$user->baronas_foto3}}</a></td>
  <td>{{$user->baronas_namapembimbing}}</td>
  <td>{{$user->baronas_email}}</td>
  <td>{{$user->asalsekolah}}</td>
  <td>{{$user->alamatsekolah}}</td>


  
  
</tr>
@endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  


</section>

@endsection

@endif