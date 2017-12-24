@if(Auth::user()->id == 1)
@extends('layouts.template')

@section('content')


<section class="dashboard-counts no-padding-bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header d-flex align-items-center">
            <h3 class="h4">Basic Table</h3>
          </div>
          <div class="card-body" style="overflow-x:auto;">
            <table class="table">
              <thead>
                <tr>
                  <th>status</th>
                  <th>Bukti</th>
                  <th>Verif</th>
                  <th>Event</th>
                  <th>Nama Tim</th>
                  <th>Email</th>
                  <th>No Telp</th>
                  <th>Asal Sekolah</th>
                  <th>Alamat Sekolah</th>
                  <th>Nama Ketua</th>
                  <th>Kelas Ketua</th>
                  <th>Nama Anggota 1</th>
                  <th>Kelas Anggota 1</th>
                  <th>Nama Anggota 2</th>
                  <th>Kelas Anggota 2</th>
                </tr>
              </thead>
              <tbody>

@foreach($jumlahuser as $user)
 <tr>
  @if($user->status == 0)
    <td> nonaktif</td>
  @else
    <td> aktif</td>
  @endif
  <td>    <a href="public/uploads/bukti/{{$user->bukti}}" target="_blank">{{$user->bukti}}</a></td>
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
  <td>{{$user->event}}</td>
  <td>{{$user->namatim}}</td>
  <td>{{$user->email}}</td>
  <td>{{$user->notelp}}</td>
  <td>{{$user->asalsekolah}}</td>
  <td>{{$user->alamatsekolah}}</td>
  <td>{{$user->namaketua}}</td>
  <td>{{$user->kelasketua}}</td>
  <td>{{$user->namaanggota1}}</td>
  <td>{{$user->kelasanggota1}}</td>
  <td>{{$user->namaanggota2}}</td>
  <td>{{$user->kelasanggota2}}</td>
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
