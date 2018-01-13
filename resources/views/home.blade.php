@extends('layouts.template')

@section('content')
<section class="client">
            <div class="container-fluid">
              <div class="row">
                 @if(Auth::user()->status==0 && Auth::user()->event=='electra')
                        Akun anda belum diaktifkan. Hubungi panitia untuk mengaktifkan akun anda.

                  @elseif(Auth::user()->status==1 && Auth::user()->event=='electra')


  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header d-flex align-items-center">
            <h3 class="h4 col-lg-12" style="text-align: center;">Nomor Peserta</h3>
          </div>
             <div class="card-body" style="overflow-x:auto;">
              <div class="container" style="text-align: center; font-size: 60px">
                <h0><strong>{{Auth::user()->no_peserta}}</h0></strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                  
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header d-flex align-items-center">
            <h3 class="h4 col-lg-12" style="text-align: center;">Countdown</h3>
          </div>
             <div class="card-body" style="overflow-x:auto;">
              <div class="container">
                
                  <div id="timer">
                    <div class="row">
                    <div id="days" class="rata"></div>
                    <div id="hours" class="rata"></div>
                    <div id="minutes" class="rata"></div>
                    <div id="seconds" class="rata"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  


                <!-- Work Amount  -->
                <div class="col-lg-3">
                  <div class="work-amount card">
                    <div class="card-body">
                      <small>Email</small>
                      <h3>{{Auth::user()->email}}</h3>
                      <small>Asal Sekolah</small>
                      <h3>{{Auth::user()->asalsekolah}}</h3>
                      <small>Alamat Sekolah</small>
                      <h3>{{Auth::user()->alamatsekolah}}</h3>
                      <small>Nomor Telepon</small>
                      <h3>{{Auth::user()->notelp}}</h3>
                      <small>Region</small>
                      <h3>{{Auth::user()->region}}</h3>
                      <small>Tipe Tes</small>
                      <h3>{{Auth::user()->tipetes}}</h3>
                      <small>Bukti Pembayaran</small>
                      <h3><a href="public/uploads/bukti/{{Auth::user()->bukti}}" target="_blank">Lihat di tab baru</a></h3>
                    </div>
                  </div>
                </div>
                <!-- Client Profile -->
                <div class="col-lg-3">
                  <div class="work-amount card">
                    <div class="card-body">

                      <small>Nama Ketua</small>
                      <h3>{{Auth::user()->namaketua}}</h3>
                      <small>Kelas</small>
                      <h3>{{Auth::user()->kelasketua}}</h3>
                    </div>
                  </div>
                </div>
                <!-- Total Overdue             -->
                <div class="col-lg-3">
                  <div class="work-amount card">
                    <div class="card-body">

                      <small>Nama Anggota 1</small>
                      <h3>{{Auth::user()->namaanggota1}}</h3>
                      <small>Kelas</small>
                      <h3>{{Auth::user()->kelasanggota1}}</h3>
                    </div>
                  </div>
                </div>
                <!-- anggota 3 -->
                <div class="col-lg-3">
                  <div class="work-amount card">
                    <div class="card-body">

                      <small>Nama Anggota 2</small>
                      <h3>{{Auth::user()->namaanggota2}}</h3>
                      <small>Kelas</small>
                      <h3>{{Auth::user()->kelasanggota2}}</h3>
                    </div>
                  </div>
                </div>

                @elseif(Auth::user()->status==0 && Auth::user()->event=='baronas')
                <div class="col-lg-12">
                  <div class="work-amount card">
                    <div class="card-body">
                      <p><strong><h1>Akun anda belum aktif. Silahkan isi data dibawah untuk mengaktifkan akun anda.</h1></strong></p>
                      <form method="post" action="/home/baronas/update">
                        {{csrf_field()}}
                        <div style="overflow-y: auto; max-height: 600px">
                          <input type="hidden" name="updateID" value="{{Auth::user()->id}}">
                          <input type="hidden" name="status" value="1">
                  
                          <div class="input-group">
                            <p class="my-auto col-lg-2">Nama Anggota 1 :</p>
                            @if(Auth::user()->namaanggota1 == NULL)
                              <input id="namaanggota1" type="text" class="form-control col-lg-8" name="namaanggota1" placeholder="Nama Anggota 1" value="{{ old('namaanggota1') }}" required>
                            @else
                              <input id="namaanggota1" type="text" class="form-control col-lg-8" name="namaanggota1" placeholder="Nama Anggota 1" value="{{Auth::user()->namaanggota1}}" required>
                            @endif
                          </div>
                        <br>
                      
                          <div class="input-group">
                            <p class="my-auto col-lg-2">Nama Anggota 2 :</p>
                            @if(Auth::user()->namaanggota2 == NULL)
                              <input id="namaanggota2" type="text" class="form-control col-lg-8" name="namaanggota2" placeholder="Nama Anggota 2" value="{{ old('namaanggota2') }}" required>
                            @else
                              <input id="namaanggota2" type="text" class="form-control col-lg-8" name="namaanggota2" placeholder="Nama Anggota 2" value="{{Auth::user()->namaanggota2}}" required>
                            @endif
                          </div>
                        <br>

                          <div class="input-group">
                           <p class="my-auto col-lg-2">Nama Anggota 3 :</p>
                            @if(Auth::user()->namaanggota3 == NULL)
                              <input id="namaanggota3" type="text" class="form-control col-lg-8" name="namaanggota3" placeholder="Nama Anggota 3" value="{{ old('namaanggota3') }}" required>
                            @else
                              <input id="namaanggota3" type="text" class="form-control col-lg-8" name="namaanggota3" placeholder="Nama Anggota 3" value="{{Auth::user()->namaanggota3}}" required>
                            @endif
                          </div>
                        <br>             
                  
                          <div class="input-group">
                            <p class="my-auto col-lg-2">Asal Sekolah :</p>
                            @if(Auth::user()->asalsekolah == NULL)
                              <input id="asalsekolah" type="text" class="form-control col-lg-8" name="asalsekolah" placeholder="Asal Sekolah" value="{{ old('asalsekolah') }}" required>
                            @else
                              <input id="asalsekolah" type="text" class="form-control col-lg-8" name="asalsekolah" placeholder="Asal Sekolah" value="{{Auth::user()->asalsekolah}}" required>
                            @endif
                          </div>
                        <br>
                  
                          <div class="input-group">
                            <p class="my-auto col-lg-2">Alamat Sekolah :</p>
                            @if(Auth::user()->alamatsekolah == NULL)
                              <input id="alamatsekolah" type="text" class="form-control col-lg-8" name="alamatsekolah" placeholder="Alamat Sekolah" value="{{ old('alamatsekolah') }}" required>
                            @else
                              <input id="alamatsekolah" type="text" class="form-control col-lg-8" name="alamatsekolah" placeholder="Alamat Sekolah" value="{{Auth::user()->alamatsekolah}}" required>
                            @endif
                          </div>
                        <br>

                          <div class="input-group">
                            <p class="my-auto col-lg-2">Email :</p>
                            @if(Auth::user()->baronas_email == NULL)
                              <input id="baronas_email" type="text" class="form-control col-lg-8" name="baronas_email" placeholder="Email" value="{{ old('baronas_email') }}" required>
                            @else
                              <input id="baronas_email" type="text" class="form-control col-lg-8" name="baronas_email" placeholder="Email" value="{{Auth::user()->baronas_email}}" required>
                            @endif
                          </div>
                        <br>
                  
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Submit Data</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          @elseif(Auth::user()->status==1 && Auth::user()->event=='baronas')
          Akun aktif.

                <!-- @elseif(Auth::user()->status==1 && Auth::user()->event=='baronas')
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="card">
                          <div class="card-header d-flex align-items-center">
                            <h3 class="h4 col-lg-12" style="text-align: center;">Nomor Peserta</h3>
                          </div>
                          <div class="card-body" style="overflow-x:auto;">
                            <div class="container" style="text-align: center; font-size: 60px">
                              <h0><strong>{{Auth::user()->no_peserta}}</h0></strong>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                @endif
              </div>
            </div>
          </section>


@endsection

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
