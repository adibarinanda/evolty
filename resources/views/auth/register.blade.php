<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{csrf_token()}} ">

    <title>EVOLTY</title>

    <!-- Bootstrap core CSS -->
    <link href="purple/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="purple/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


    <!-- Plugin CSS -->
    <link href="purple/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="purple/css/creative.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container" style="z-index: 1;">
        <a class="navbar-brand js-scroll-trigger" href="/"><img src="purple/img/logokecil.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#tema">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">EVENT</a>

            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#video">VIDEO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">PARTICIPANT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">TESTIMONIALS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">DIRECTION</a>
            </li>
            @if (Route::has('login'))
            <li class="nav-item">
              @auth
                <a class="nav-link js-scroll-trigger" href="{{ url('home') }}">DASHBOARD</a>
              @else
                <a class="nav-link" href="{{ url('login') }}">SIGN IN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('register') }} ">REGISTER</a>
              @endauth
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>


<style>
      #particles-js {
      background: url('img/background1.png');
      background-size: cover;
      position:fixed;
      top:0;
      right:0;
      bottom:0;
      left:0;
      z-index:1; 
      }
   </style>
    <header class="masthead text-center text-white d-flex align-items-center">
        <div id="particles-js"></div>
      <div class="mx-auto my-auto" style="z-index: 1;">
      <div class="row">
        <div class="col-lg-12" style="margin-bottom:2em;">
          <h1>Registration Page</h1>
        </div>

        <div class="col-lg-6" style="z-index: 1;">
          <img style="margin-top: 5em;height: 150px;margin-bottom: 2em; margin-right:5em;" src="purple/img/logobesar.png">
          <div class="form-group pull-center">
                  <a style="text-decoration: none" href="login">Sudah punya akun? Login Disini</a>
              </div>
        </div>

        <div class="col-lg-6" >
          <div class="content" style="overflow-y:auto; max-height: 500px">
          <form class="col-sm-12" method="POST" action="{{ route('register')}}" enctype="multipart/form-data">
            {{ csrf_field()}}


                <!-- <div class="form-group{{ $errors->has('name' ? 'has-error' : '')}} ">
                    <div class="input-group">
                        <span class="input-group-addon" id="addon_username"><i class="fa fa-user fa-fw"></i></span>
                        <input id="name" type="text" class="form-control" placeholder="Nama" aria-describedby="addon_username" value="{{old('name')}}"" required autofocus>

                        @if ($errors->has('name'))
                          <span class="help-block">
                            <strong>{{ $errors->first('name')}} </strong>
                          </span>
                        @endif
                    </div>
                </div> -->

                <!-- <div class="form-group{{ $errors->has('email' ? 'has-error' : '')}} ">
                    <div class="input-group">
                        <span class="input-group-addon" id="addon_username"><i class="fa fa-envelope fa-fw"></i></span>
                        <input id="email" type="email" class="form-control" placeholder="Email" aria-describedby="addon_username" required value="{{old('email')}} ">

                    @if ($errors->has('email'))
                      <span class="help-block">
                        <strong>{{$errors->first('email')}} </strong>
                      </span>
                    @endif

                    </div>
                </div> -->
                <div class="form-group{{ $errors->has('event') ? ' has-error' : '' }}">
                    <div class="input-group">
                      <select id="event" name="event" placeholder="Pilih Event" class="form-control">
                        <option>Pilih Event</option>
                        <option value="electra" @if (old('event') == "Electra") selected @endif>Electra</option>
                        <!-- <option>Baronas</option>
                        <option>National Symphosium</option>
                        <option>MAGE</option> -->
                      </select>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
                    <div class="input-group">
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
                      </select>
                    </div>
                </div>

                <div id="tipetes" class="form-group{{ $errors->has('tipetes') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <select name="tipetes" placeholder="Tipe Tes" class="form-control">
                          <option>Pilih Tipe Tes</option>
                          <option value="online">Online</option>
                          <option value="offline" selected>Offline</option>
                        </select>
                    </div>

                </div>

                <div class="form-group" id="surabayaoffline"><a>Anda otomatis terdaftar untuk Tes Offline apabila anda memilih region Surabaya.</a></div>

                <div class="form-group{{ $errors->has('namatim') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <!-- <span class="input-group-addon" id="addon_username"><i class="fa fa-envelope fa-fw"></i></span> -->
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
                        <!-- <span class="input-group-addon" id="addon_username"><i class="fa fa-envelope fa-fw"></i></span> -->
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
                        <!-- <span class="input-group-addon" id="addon_username"><i class="fa fa-envelope fa-fw"></i></span> -->
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
                        <!-- <span class="input-group-addon" id="addon_username"><i class="fa fa-envelope fa-fw"></i></span> -->
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
                        <!-- <span class="input-group-addon" id="addon_username"><i class="fa fa-envelope fa-fw"></i></span> -->
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
                        <!-- <span class="input-group-addon" id="addon_username"><i class="fa fa-envelope fa-fw"></i></span> -->
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
                        <!-- <span class="input-group-addon" id="addon_username"><i class="fa fa-envelope fa-fw"></i></span> -->
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
                        <!-- <span class="input-group-addon" id="addon_username"><i class="fa fa-envelope fa-fw"></i></span> -->
                        <input id="notelp" type="notelp" class="form-control" name="notelp" placeholder="Nomor Telepon" value="{{ old('notelp') }}" required >

                        @if ($errors->has('notelp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('notelp') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                                <label>Upload Bukti Pembayaran</label>
                                <input type="file" name="bukti" value="" />
                            </div>
                                <span class="text-danger">
                                        {{ $errors->first('bukti') }}
                                </span>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <!-- <span class="input-group-addon" id="addon_password1"><i class="fa fa-lock fa-fw"></i></span> -->
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" aria-describedby="addon_password1" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <!-- <span class="input-group-addon" id="addon_password2"><i class="fa fa-lock fa-fw"></i></span> -->
                        <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="Ulang Password" aria-describedby="addon_password2" required>
                    </div>
                </div>

                <!-- <div class="form-group pull-right">
                        <a style="text-decoration: none" href="login">Sudah punya akun?</a>
                    </div> -->

                <button type="submit" class="btn btn-lg btn-block">Daftar</button>

            </form>
          </div>
        </div>
      </div>
    </div>
    </header>

    <!-- Bootstrap core JavaScript -->
    <script src="purple/vendor/jquery/jquery.min.js"></script>
    <script src="purple/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="purple/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="purple/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="purple/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="purple/js/creative.min.js"></script>

    <!-- SCRIPT FOR DROPDOWN LOGIN-->
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="purple/js/login.js"></script>

    <script src="purple/js/app.js"></script>
    <script type="text/javascript" src="particles/snow/particles.min.js"></script>
    <script type="text/javascript" src="particles/snow/app.js"></script>
  </body>

</html>
