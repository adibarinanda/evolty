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
                              <form method="POST" action="/home/baronas/update-profile" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div style="overflow-y: auto; max-height: 600px">
                                  <input type="hidden" name="updateID" value="{{Auth::user()->id}}">
                                  <input type="hidden" name="status" value="1">
                      
                                <div class="input-group">
                                  <p class="my-auto col-lg-4">Nama Pembimbing :</p>
                                  @if(Auth::user()->baronas_namapembimbing == NULL)
                                    <input id="baronas_namapembimbing" type="text" class="form-control col-lg-8" name="baronas_namapembimbing" placeholder="Nama Pembimbing" value="{{ old('baronas_namapembimbing') }}" required>
                                  @else
                                    <input id="baronas_namapembimbing" type="text" class="form-control col-lg-8" name="baronas_namapembimbing" placeholder="Nama Pembimbing" value="{{Auth::user()->baronas_namapembimbing}}" required>
                                  @endif
                                </div>
                              <br> 

                                <div class="input-group">
                                  <p class="my-auto col-lg-4">Nama Anggota 1 :</p>
                                   <input type="hidden" name="updateID" value="{{Auth::user()->id}}">
                                <input type="hidden" name="status" value="1">
                                  @if(Auth::user()->namaanggota1 == NULL)
                                    <input id="namaanggota1" type="text" class="form-control col-lg-8" name="namaanggota1" placeholder="Nama Anggota 1" value="{{ old('namaanggota1') }}" required>
                                  @else
                                    <input id="namaanggota1" type="text" class="form-control col-lg-8" name="namaanggota1" placeholder="Nama Anggota 1" value="{{Auth::user()->namaanggota1}}" required>
                                  @endif
                                </div>
                              <br>

                              <div class="input-group" style="text-align: left;">
                                <p class="my-auto col-lg-4">Upload Kartu Pelajar Anggota 1</p>
                                <input type="file" name="baronas_kartupelajar1" value="" />
                              </div>
                              <span class="text-danger">
                                {{ $errors->first('baronas_kartupelajar1') }}
                              </span>
                              <br>

                              <div class="input-group" style="text-align: left;">
                                <p class="my-auto col-lg-4">Upload Foto Anggota 1</p>
                                <input type="file" name="baronas_foto1" value="" />
                              </div>
                              <span class="text-danger">
                                {{ $errors->first('baronas_foto1') }}
                              </span>
                              <br>
                            
                                <div class="input-group">
                                  <p class="my-auto col-lg-4">Nama Anggota 2 :</p>
                                  @if(Auth::user()->namaanggota2 == NULL)
                                    <input id="namaanggota2" type="text" class="form-control col-lg-8" name="namaanggota2" placeholder="Nama Anggota 2" value="{{ old('namaanggota2') }}" required>
                                  @else
                                    <input id="namaanggota2" type="text" class="form-control col-lg-8" name="namaanggota2" placeholder="Nama Anggota 2" value="{{Auth::user()->namaanggota2}}" required>
                                  @endif
                                </div>
                              <br>

                              <div class="input-group" style="text-align: left;">
                                <p class="my-auto col-lg-4">Upload Kartu Pelajar Anggota 2</p>
                                <input type="file" name="baronas_kartupelajar2" value="" />
                              </div>
                              <span class="text-danger">
                                {{ $errors->first('baronas_kartupelajar2') }}
                              </span>
                              <br>

                              <div class="input-group" style="text-align: left;">
                                <p class="my-auto col-lg-4">Upload Foto Anggota 2</p>
                                <input type="file" name="baronas_foto2" value="" />
                              </div>
                              <span class="text-danger">
                                {{ $errors->first('baronas_foto2') }}
                              </span>
                              <br>

                                <div class="input-group">
                                 <p class="my-auto col-lg-4">Nama Anggota 3 :</p>
                                  @if(Auth::user()->namaanggota3 == NULL)
                                    <input id="namaanggota3" type="text" class="form-control col-lg-8" name="namaanggota3" placeholder="Nama Anggota 3" value="{{ old('namaanggota3') }}" required>
                                  @else
                                    <input id="namaanggota3" type="text" class="form-control col-lg-8" name="namaanggota3" placeholder="Nama Anggota 3" value="{{Auth::user()->namaanggota3}}" required>
                                  @endif
                                </div>
                              <br>      

                              <div class="input-group" style="text-align: left;">
                                <p class="my-auto col-lg-4">Upload Kartu Pelajar Anggota 3</p>
                                <input type="file" name="baronas_kartupelajar3" value="" />
                              </div>
                              <span class="text-danger">
                                {{ $errors->first('baronas_kartupelajar3') }}
                              </span>
                              <br>

                              <div class="input-group" style="text-align: left;">
                                <p class="my-auto col-lg-4">Upload Foto Anggota 3</p>
                                <input type="file" name="baronas_foto3" value="" />
                              </div>
                              <span class="text-danger">
                                {{ $errors->first('baronas_foto3') }}
                              </span>
                              <br>       
                        
                                <div class="input-group">
                                  <p class="my-auto col-lg-4">Asal Sekolah :</p>
                                  @if(Auth::user()->asalsekolah == NULL)
                                    <input id="asalsekolah" type="text" class="form-control col-lg-8" name="asalsekolah" placeholder="Asal Sekolah" value="{{ old('asalsekolah') }}" required>
                                  @else
                                    <input id="asalsekolah" type="text" class="form-control col-lg-8" name="asalsekolah" placeholder="Asal Sekolah" value="{{Auth::user()->asalsekolah}}" required>
                                  @endif
                                </div>
                              <br>
                        
                                <div class="input-group">
                                  <p class="my-auto col-lg-4">Alamat Sekolah :</p>
                                  @if(Auth::user()->alamatsekolah == NULL)
                                    <input id="alamatsekolah" type="text" class="form-control col-lg-8" name="alamatsekolah" placeholder="Alamat Sekolah" value="{{ old('alamatsekolah') }}" required>
                                  @else
                                    <input id="alamatsekolah" type="text" class="form-control col-lg-8" name="alamatsekolah" placeholder="Alamat Sekolah" value="{{Auth::user()->alamatsekolah}}" required>
                                  @endif
                                </div>
                              <br>

                                <div class="input-group">
                                  <p class="my-auto col-lg-4">Email :</p>
                                  @if(Auth::user()->baronas_email == NULL)
                                    <input id="baronas_email" type="text" class="form-control col-lg-8" name="baronas_email" placeholder="Email" value="{{ old('baronas_email') }}" required>
                                  @else
                                    <input id="baronas_email" type="text" class="form-control col-lg-8" name="baronas_email" placeholder="Email" value="{{Auth::user()->baronas_email}}" required>
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

                
                  
                      

          @elseif(Auth::user()->status==1 && Auth::user()->event=='baronas')
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
        


                <!-- Work Amount  -->
                <div class="col-lg-3">
                  <div class="work-amount card">
                    <div class="card-body">
                      <small>Nama Tim</small>
                      <h3>{{Auth::user()->baronas_namatim}}</h3>
                      <small>Nama Pembimbing</small>
                      <h3>{{Auth::user()->baronas_namapembimbing}}</h3>
                      <small>Kategori</small>
                      <h3>{{Auth::user()->baronas_kategori}}</h3>
                      <small>Email</small>
                      <h3>{{Auth::user()->baronas_email}}</h3>
                      <small>Asal Sekolah</small>
                      <h3>{{Auth::user()->asalsekolah}}</h3>
                      <small>Alamat Sekolah</small>
                      <h3>{{Auth::user()->alamatsekolah}}</h3>
                      <small>Bukti Pembayaran</small>
                      <h3><a href="public/uploads/baronas_bukti/{{Auth::user()->baronas_bukti}}" target="_blank">Lihat di tab baru</a></h3>
                    </div>
                  </div>
                </div>
                
                <!-- anggota 1             -->
                <div class="col-lg-3">
                  <div class="work-amount card">
                    <div class="card-body">

                      <small>Nama Anggota 1</small>
                      <h3>{{Auth::user()->namaanggota1}}</h3>
                      <small>Kartu Pelajar</small>
                      <h3><a href="public/uploads/baronas_kartupelajar/{{Auth::user()->baronas_kartupelajar1}}" target="_blank">Lihat di tab baru</a></h3>
                      <small>Bukti Pembayaran</small>
                      <h3><a href="public/uploads/baronas_foto/{{Auth::user()->baronas_foto1}}" target="_blank">Lihat di tab baru</a></h3>
                    </div>
                  </div>
                </div>
                <!-- anggota 2 -->
                <div class="col-lg-3">
                  <div class="work-amount card">
                    <div class="card-body">

                      <small>Nama Anggota 2</small>
                      <h3>{{Auth::user()->namaanggota2}}</h3>
                      <small>Kartu Pelajar</small>
                      <h3><a href="public/uploads/baronas_kartupelajar/{{Auth::user()->baronas_kartupelajar2}}" target="_blank">Lihat di tab baru</a></h3>
                      <small>Bukti Pembayaran</small>
                      <h3><a href="public/uploads/baronas_foto/{{Auth::user()->baronas_foto2}}" target="_blank">Lihat di tab baru</a></h3>
                    </div>
                  </div>
                </div>
                <!-- anggota 3 -->
                <div class="col-lg-3">
                  <div class="work-amount card">
                    <div class="card-body">

                      <small>Nama Anggota 3</small>
                      <h3>{{Auth::user()->namaanggota3}}</h3>
                      <small>Kartu Pelajar</small>
                      <h3><a href="public/uploads/baronas_kartupelajar/{{Auth::user()->baronas_kartupelajar3}}" target="_blank">Lihat di tab baru</a></h3>
                      <small>Bukti Pembayaran</small>
                      <h3><a href="public/uploads/baronas_foto/{{Auth::user()->baronas_foto3}}" target="_blank">Lihat di tab baru</a></h3>
                    </div>
                  </div>
                </div>

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
