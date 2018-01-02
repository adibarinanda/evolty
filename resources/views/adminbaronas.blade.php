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
                  
                  <th>status</th>
                  <th>No. Peserta</th>
                  <th>Bukti</th>
                  <th>Verif</th>
                  <th>Kategori</th>
                  <th>Nama Tim</th>
                  <th>Contact Person</th>
                  <th>Nama Anggota 1</th>
                  <th>Nama Anggota 2</th>
                  <th>Nama Anggota 3</th>
                  <th>Nama Pembimbing</th>
                  <th>Email</th>
                  <th>No Telp</th>
                  <th>Asal Sekolah</th>
                  <th>Alamat Sekolah</th>
                  <th>Kartu Pelajar</th>
                  <th>Foto</th>
                  <th>Hapus</th>
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
  
  <td>{{$user->baronas_kategori}}</td>
  <td>{{$user->baronas_namatim}}</td>
  <td>{{$user->baronas_contactperson}}</td>
  <td>{{$user->baronas_namaanggota1}}</td>
  <td>{{$user->baronas_namaanggota2}}</td>
  <td>{{$user->baronas_namaanggota3}}</td>
  <td>{{$user->baronas_namapembimbing}}</td>
  <td>{{$user->baronas_email}}</td>
  <td>{{$user->baronas_asalsekolah}}</td>
  <td>{{$user->baronas_alamatsekolah}}</td>
  
  <td>
    <form method="post" action="/admin/delete">
      {{csrf_field()}}
      <input type="hidden" name="deleteID" value="{{$user->id}}">
      <button class="btn btn-unverif" type="submit">Hapus</button>
    </form>
  </td>
</tr>
@endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  

<!-- <script type="text/javascript">
$(document).ready(function(){
   $(".update").click(function(){
       var id = $(this).data("{{Auth::user()->id}}");
       var f1 = $("#f1").html();
       var l1 = $("#l1").html();
       var m1 = $("#m1").html();
       var f2 = $("#f2").html();
       var l2 = $("#l2").html();
       var m2 = $("#m2").html();
       if(id==1){
           $("#fn").val(f1);
           $("#mn").val(m1);
           $("#ln").val(l1);
       }else if(id==2){
           $("#fn").val(f2);
           $("#mn").val(m2);
           $("#ln").val(l2);
       }
       $("#up").click(function(){
           if(id==1){
               var fn = $("#fn").val();
               var mn = $("#mn").val();
               var ln = $("#ln").val();    
               $("#f1").html(fn);
               $("#m1").html(mn);
               $("#l1").html(ln);
           }else if(id==2){
               var fn = $("#fn").val();
               var mn = $("#mn").val();
               var ln = $("#ln").val();    
               $("#f2").html(fn);
               $("#m2").html(mn);
               $("#l2").html(ln);              
           }
       });
   });
   $(".delete").click(function(){
      var id = $(this).data("uid");
      $("#del").click(function(){
          if(id==1){
              $("#d1").html('');
          }else if(id==2){
              $("#d2").html('');
          }
      });
   });
});
</script> -->

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
