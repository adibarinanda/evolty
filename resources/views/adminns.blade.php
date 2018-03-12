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
                    <h4 class="modal-title">Tambah Peserta Baru National Symposium</h4>
                  </div>
                  <form method="post" action="/admin/tambah">
                    {{csrf_field()}}
                      <div class="modal-body" style="overflow-x: auto; overflow-y: auto; max-height: 700px">
                      
                        <div id="form-electra" style="margin-bottom: 2em">

                          <!-- <input type="hidden" name="tipedaftar" value="Offline"> -->
                          <input type="hidden" name="event" value="ns">

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

                        <div class="form-group{{ $errors->has('ns_nama') ? ' has-error' : '' }}">
                          <div class="input-group">
                            <p class="my-auto col-lg-4">Nama :</p>
                            <input id="ns_nama" type="text" class="form-control" name="ns_nama" placeholder="Nama" value="{{ old('ns_nama') }}" required >
                            @if ($errors->has('ns_nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ns_nama') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-group">
                          <p class="my-auto col-lg-4">Email :</p>
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                      </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <p class="my-auto col-lg-4">Password :</p>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" aria-describedby="addon_password1">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('ns_kampus') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <p class="my-auto col-lg-4">Kampus :</p>
                        <input id="ns_kampus" type="text" class="form-control" name="ns_kampus" placeholder="Kampus" value="{{ old('ns_kampus') }}"  >

                        @if ($errors->has('ns_kampus'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ns_kampus') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('ns_notelp') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <p class="my-auto col-lg-4">No. Telp :</p>
                        <input id="ns_notelp" type="text" class="form-control" name="ns_notelp" placeholder="Nomor Telepon" value="{{ old('ns_notelp') }}">

                        @if ($errors->has('ns_notelp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ns_notelp') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('ns_line') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <p class="my-auto col-lg-4">Line :</p>
                        <input id="ns_line" type="text" class="form-control" name="ns_line" placeholder="ID Line" value="{{ old('ns_line') }}"  >

                        @if ($errors->has('ns_line'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ns_line') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>



                      <div class="modal-footer">
                        <button type="submit" class="btn btn-biru">Tambah Peserta Baru National Symposium</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </form>
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
