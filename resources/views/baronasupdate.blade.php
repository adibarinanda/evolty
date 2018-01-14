@extends('layouts.template')

@section('content')
<section class="client">
            <div class="container-fluid">
              <div class="row">

                
               
               <!-- <button type="button" data-toggle="modal" data-target="#{{ Auth::user()->id }}" data-uid="{{Auth::user()->id}} " class="update btn btn-warning btn-sm">Edit</button>
              <div id="{{ Auth::user()->id }}" class="modal fade" role="dialog"> -->
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">×</button>
                      <h4 class="modal-title">Edit Data Peserta</h4>
                    </div>
                    <form method="post" action="/baronas/update-profile">
                      {{ csrf_field() }}
                      <div class="modal-body" style="overflow-y: auto; max-height: 400px">
                        <input type="hidden" name="updateID" value="{{Auth::user()->id}}">
                        <input type="hidden" name="status" value="1">

                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success">Masukkan Data Peserta</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              <!-- </div> -->

                <!-- <div class="col-lg-12">
                  <div class="work-amount card">
                    <div class="card-body">
                      <p><strong><h1>Akun anda belum aktif. Silahkan isi data dibawah untuk mengaktifkan akun anda.</h1></strong></p>
                      <form method="POST" action="/dashboard/baronas/update">
                        {{csrf_field()}}
                        <div style="overflow-y: auto; max-height: 600px">
                         
                  
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
                      
                          <div class="input-group">
                            <p class="my-auto col-lg-4">Nama Anggota 2 :</p>
                            @if(Auth::user()->namaanggota2 == NULL)
                              <input id="namaanggota2" type="text" class="form-control col-lg-8" name="namaanggota2" placeholder="Nama Anggota 2" value="{{ old('namaanggota2') }}" required>
                            @else
                              <input id="namaanggota2" type="text" class="form-control col-lg-8" name="namaanggota2" placeholder="Nama Anggota 2" value="{{Auth::user()->namaanggota2}}" required>
                            @endif
                          </div>
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
                        <button type="submit" class="btn btn-success">Submit Data</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div> -->

         
              </div>
            </div>
          </section>
@endsection