@if(Auth::user()->id == 1)
@extends('layouts.template')

@section('content')

<section class="dashboard-counts no-padding-bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card" style="max-height: 720px">
          <div class="card-header d-flex align-items-center">
            <h3 class="h4 col-lg-10 pull-left">National Symphosium Admin</h3>
            <button type="button" data-toggle="modal" data-uid="1" class="col-lg-2 update btn btn-biru btn-sm" data-target="#tambah_user">Tambah Peserta NS</button>
          </div>


          <div class="card-body" style="overflow-x:auto;">
            <table id="IDtabel" class="table">
              <thead>
                <tr>
                  <th class="urutth">#</th>
                  <th class="hapusth">Hapus</th>
                  <th>Edit</th>
                  <th>Status</th>
                  
                  <th class="nopesth">No. Peserta</th>
                  
                  <th class="buktith">Bukti</th>
                  <th class="verifth">Verif</th>
                  <th class="namatimth">Nama</th>
                  <th class="namatimth">Email</th>
                  <th class="namatimth">Kampus</th>
                  <th class="namatimth">No. Telpon</th>
                  <th class="namatimth">ID Line</th>
                
                </tr>
              </thead>
              <tbody>
                <!-- <script type="text/javascript" src="{{url('cleave/cleave.js')}}"></script>
<script>
  new Cleave('.input_nopes', {
                      uppercase: true,
                      delimiter: '-',
                      blocks: [3, 2, 3, 3]
                    });
</script> -->

@foreach($jumlahuser as $user)
 <tr class="tablecontent">
  <td>
    <form method="post" action="/admin/delete">
      {{csrf_field()}}
      <input type="hidden" name="deleteID" value="{{$user->id}}">
      <button class="btn btn-unverif" type="submit">Hapus</button>
    </form>
  </td>

  <td>
    <button type="button" data-toggle="modal" data-target="#{{ $user->id }}" data-uid="{{$user->id}} " class="update btn btn-warning btn-sm">Edit</button>
      <div id="{{ $user->id }}" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
              <h4 class="modal-title">Edit Data Peserta</h4>
            </div>
            <form method="post" action="/admin/ns/update">
              {{csrf_field()}}
                <div class="modal-body" style="overflow-y: auto; max-height: 400px">
                  <div class="input-group">
                    <p class="my-auto col-lg-4">Nomor Peserta :</p>
                    <input type="hidden" name="updateID" value="{{$user->id}}"/>
                    @if($user->no_peserta == NULL)
                    <input id="no_peserta" type="text" class="no_peserta_ns col-lg-8 form-control" name="no_peserta" value="NS-07-2018-" required>
                    @else
                    <input id="no_peserta" type="text" class="no_peserta_ns col-lg-8 form-control" name="no_peserta" value="{{$user->no_peserta}}" required>
                    @endif
                  </div>

                  <br>
                  
                  <div class="input-group">
                    <p class="my-auto col-lg-4">Nama :</p>
                    @if($user->ns_nama == NULL)
                    <input id="ns_nama" type="text" class="form-control col-lg-8" name="ns_nama" placeholder="Nama" value="{{ old('ns_nama') }}" required>
                    @else
                    <input id="ns_nama" type="text" class="form-control col-lg-8" name="ns_nama" placeholder="Nama" value="{{$user->ns_nama}}" required>
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
                      <p class="my-auto col-lg-4">Kampus :</p>
                      @if($user->ns_kampus == NULL)
                      <input id="ns_kampus" type="text" class="form-control col-lg-8" name="ns_kampus" placeholder="kampus" value="{{ old('ns_kampus') }}" required>
                      @else
                      <input id="ns_kampus" type="text" class="form-control col-lg-8" name="ns_kampus" placeholder="kampus" value="{{$user->ns_kampus}}" required>
                      @endif
                    </div>
                    <br>
                  <div class="input-group">
                    <p class="my-auto col-lg-4">Nomor Telepon :</p>
                    @if($user->ns_notelp == NULL)
                    <input id="ns_notelp" type="text" class="form-control col-lg-8" name="ns_notelp" placeholder="Nomor Telepon" value="{{ old('ns_notelp') }}" required>
                    @else
                    <input id="ns_notelp" type="text" class="form-control col-lg-8" name="ns_notelp" placeholder="Nomor Telepon" value="{{$user->ns_notelp}}" required>
                    @endif
                  </div>
                   <br>
                  <div class="input-group">
                      <p class="my-auto col-lg-4">line :</p>
                      @if($user->ns_line == NULL)
                      <input id="ns_line" type="text" class="form-control col-lg-8" name="ns_line" placeholder="line" value="{{ old('ns_line') }}" required>
                      @else
                      <input id="ns_line" type="text" class="form-control col-lg-8" name="ns_line" placeholder="line" value="{{$user->ns_line}}" required>
                      @endif
                    </div>
                    <br>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Masukkan Data Peserta</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
          </div>
        </div>
      </div>
  </td>

  @if($user->status == 0)
    <td> nonaktif</td>
  @else
    <td> aktif</td>
  @endif


  <td>
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
  </td>
  

  <td>    <a href="../public/uploads/ns_bukti/{{$user->ns_bukti}}" target="_blank">{{$user->ns_bukti}}</a></td>
  
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
  
  <td>{{$user->ns_nama}}</td>
  <td>{{$user->email}}</td>
  <td>{{$user->ns_kampus}}</td>
  <td>{{$user->ns_notelp}}</td>
  <td>{{$user->ns_line}}</td>
</tr>
@endforeach
              </tbody>
            </table>
            <script>
                var tables = document.getElementsByTagName('table');
                var table = tables[tables.length -1];
                var rows = table.rows;
                for(var i = 1, td; i < rows.length; i++){
                    td = document.createElement('td');
                    td.appendChild(document.createTextNode(i));
                    rows[i].insertBefore(td, rows[i].firstChild);
                }
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
   <div id="tambah_user" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">otw dikerjain gan bentar, deadline tugas kuliah:(</h4>
                  </div>
                 <!--  <form method="post" action="/admin/tambah">
                    {{csrf_field()}}
                      <div class="modal-body" style="overflow-x: auto; overflow-y: auto; max-height: 700px">
                      
                        <div id="form-electra" style="margin-bottom: 2em">

                          <input type="hidden" name="tipedaftar" value="Offline">
                          <input type="hidden" name="event" value="electra">

                          <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
                            <div class="input-group">
                              <p class="my-auto col-lg-4">Region :</p>
                              <select id="region" name="region" placeholder="Pilih Region" class="form-control">
                                <option>Pilih Region</option>
                                <option value="Balikpapan" @if (old('balikpapan') == "Balikpapan") selected @endif>Balikpapan</option>
                                <option value="Denpasar" @if (old('denpasar') == "denpasar") selected @endif>Denpasar</option>
                                <option value="Gresik" @if (old('gresik') == "gresik") selected @endif>Gresik</option>
                                <option value="Jakarta" @if (old('jakarta') == "jakarta") selected @endif>Jakarta</option>
                                <option value="Jember" @if (old('jember') == "jember") selected @endif>Jember</option>
                                <option value="Jombang" @if (old('jombang') == "jombang") selected @endif>Jombang</option>
                                <option value="Kediri" @if (old('kediri') == "kediri") selected @endif>Kediri</option>
                                <option value="Madiun" @if (old('madiun') == "madiun") selected @endif>Madiun</option>
                                <option value="Malang" @if (old('malang') == "malang") selected @endif>Malang</option>
                                <option value="Pamekasan" @if (old('pamekasan') == "pamekasan") selected @endif>Pamekasan</option>
                                <option value="Probolinggo" @if (old('probolinggo') == "probolinggo") selected @endif>Probolinggo</option>
                                <option value="Semarang" @if (old('semarang') == "semarang") selected @endif>Semarang</option>
                                <option value="Solo" @if (old('solo') == "solo") selected @endif>Solo</option>
                                <option value="Surabaya" @if (old('surabaya') == "surabaya") selected @endif>Surabaya</option>
                                <option value="Tuban" @if (old('tuban') == "tuban") selected @endif>Tuban</option>
                                <option value="Online" @if (old('online') == "online") selected @endif>Online</option>
                              </select>
                            </div>
                        </div>

                         <div id="tipetes-id" class="form-group{{ $errors->has('tipetes') ? ' has-error' : '' }}">
                          <div class="input-group">
                            <p class="my-auto col-lg-4">Tipe Tes :</p>
                            <select id="IDtipetes" name="tipetes" placeholder="Jenis Tes" class="form-control">
                              <option value="Online">Online</option>
                              <option value="Offline">Offline</option>
                            </select>
                          </div>
                        </div>

                      <div class="form-group{{ $errors->has('no_peserta') ? ' has-error' : '' }}">
                        <div class="input-group">
                          <p class="my-auto col-lg-4">Nomor Peserta :</p>
                          <input id="no_peserta" type="text" class="no_peserta form-control" name="no_peserta" placeholder="Nomor Peserta" value="{{ old('no_peserta') }}" required >
                            @if ($errors->has('no_peserta'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_peserta') }}</strong>
                            </span>
                            @endif
                        </div>
                      </div>

                      

                        <div class="form-group{{ $errors->has('namatim') ? ' has-error' : '' }}">
                          <div class="input-group">
                            <p class="my-auto col-lg-4">Nama Tim :</p>
                            <input id="namatim" type="text" class="form-control" name="namatim" placeholder="Nama Tim" value="{{ old('namatim') }}" required >
                            @if ($errors->has('namatim'))
                            <span class="help-block">
                                <strong>{{ $errors->first('namatim') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('asalsekolah') ? ' has-error' : '' }}">
                          <div class="input-group">
                            <p class="my-auto col-lg-4">Asal Sekolah :</p>
                            <input id="asalsekolah" type="text" class="form-control" name="asalsekolah" placeholder="Asal Sekolah" value="{{ old('asalsekolah') }}" required >
                            @if ($errors->has('asalsekolah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('asalsekolah') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamatsekolah') ? ' has-error' : '' }}">
                          <div class="input-group">
                            <p class="my-auto col-lg-4">Alamat Sekolah :</p>
                            <input id="alamatsekolah" type="text" class="form-control" name="alamatsekolah" placeholder="Alamat Sekolah" value="{{ old('alamatsekolah') }}" required >
                            @if ($errors->has('alamatsekolah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamatsekolah') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('namaketua') ? ' has-error' : '' }}">
                          <div class="input-group">
                            <p class="my-auto col-lg-4">Nama Ketua :</p>
                            <input id="namaketua" type="text" class="form-control" name="namaketua" placeholder="Nama Ketua" value="{{ old('namaketua') }}" required >
                            @if ($errors->has('namaketua'))
                            <span class="help-block">
                                <strong>{{ $errors->first('namaketua') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('kelasketua') ? ' has-error' : '' }}">
                          <div class="input-group">
                            <p class="my-auto col-lg-4">Kelas Ketua :</p>
                            <select id="kelasketua" name="kelasketua" placeholder="Pilih Kelas Ketua" class="form-control">
                              <option>Pilih Kelas Ketua</option>
                              <option value="10" @if (old('10') == "10") selected @endif>10</option>
                              <option value="11" @if (old('11') == "11") selected @endif>11</option>
                              <option value="12" @if (old('12') == "12") selected @endif>12</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('namaanggota1') ? ' has-error' : '' }}">
                          <div class="input-group">
                            <p class="my-auto col-lg-4">Nama Anggota 1 :</p>
                            <input id="namaanggota1" type="text" class="form-control" name="namaanggota1" placeholder="Nama Anggota 1" value="{{ old('namaanggota1') }}" required >
                            @if ($errors->has('namaanggota1'))
                            <span class="help-block">
                                <strong>{{ $errors->first('namaanggota1') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('kelasanggota1') ? ' has-error' : '' }}">
                          <div class="input-group">
                            <p class="my-auto col-lg-4">Kelas Anggota 1 :</p>
                            <select id="kelasanggota1" name="kelasanggota1" placeholder="Pilih Kelas Anggota 1" class="form-control">
                              <option>Pilih Kelas Anggota 1</option>
                              <option value="10" @if (old('10') == "10") selected @endif>10</option>
                              <option value="11" @if (old('11') == "11") selected @endif>11</option>
                              <option value="12" @if (old('12') == "12") selected @endif>12</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('namaanggota2') ? ' has-error' : '' }}">
                          <div class="input-group">
                            <p class="my-auto col-lg-4">Nama Anggota 2 :</p>
                            <input id="namaanggota2" type="text" class="form-control" name="namaanggota2" placeholder="Nama Anggota 2" value="{{ old('namaanggota2') }}" required >
                            @if ($errors->has('namaanggota2'))
                            <span class="help-block">
                                <strong>{{ $errors->first('namaanggota2') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('kelasanggota2') ? ' has-error' : '' }}">
                          <div class="input-group">
                            <p class="my-auto col-lg-4">Kelas Anggota 2 :</p>
                            <select id="kelasanggota2" name="kelasanggota2" placeholder="Pilih Kelas Anggota 2" class="form-control">
                              <option>Pilih Kelas Anggota 2</option>
                              <option value="10" @if (old('10') == "10") selected @endif>10</option>
                              <option value="11" @if (old('11') == "11") selected @endif>11</option>
                              <option value="12" @if (old('12') == "12") selected @endif>12</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <div class="input-group">
                            <p class="my-auto col-lg-4">Email :</p>
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required >
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('notelp') ? ' has-error' : '' }}">
                          <div class="input-group">
                            <p class="my-auto col-lg-4">Nomor Telepon :</p>
                          <input id="notelp" type="notelp" class="form-control" name="notelp" placeholder="Nomor Telepon" value="{{ old('notelp') }}" required >
                          @if ($errors->has('notelp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('notelp') }}</strong>
                            </span>
                          @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <div class="input-group">
                            <p class="my-auto col-lg-4">Password :</p>
                            <input id="password" type="text" class="form-control" name="password" placeholder="Password" aria-describedby="addon_password1" required value="1234">
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>



                      <div class="modal-footer">
                        <button type="submit" class="btn btn-biru">Tambahkan Peserta Baru Electra</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </form> -->
              </div>
            </div>

  

</section>

@endsection

@else
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

</body>
</html>

@endif
<!-- @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->
