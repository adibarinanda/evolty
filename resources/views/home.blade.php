@extends('layouts.template')

@section('content')
<section class="client">
            <div class="container-fluid">
              <div class="row">
                 @if(Auth::user()->status==0)
                        Akun anda belum diaktifkan. Hubungi panitia untuk mengaktifkan akun anda.
                  @elseif(Auth::user()->status==1 && Auth::user()->event=='electra')
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
                @elseif(Auth::user()->status==1 && Auth::user()->event=='baronas')
                  Baronas Verified
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
