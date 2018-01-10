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
    <link href="{{url('purple/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{url('purple/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


    <!-- Plugin CSS -->
    <link href="{{url('purple/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{url('native/css/eventscard.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('native/css/imagehover.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{url('purple/css/creative.css')}}" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container" style="z-index: 1;">
        <a class="navbar-brand js-scroll-trigger" href="/"><img src="{{url('purple/img/logokecil.png')}}"></a>
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
        <div class="col-lg-12" style="margin-bottom:2em;margin-top: 5em">
          <h1>Registration Page</h1>
        </div>

        <div class="col-lg-6" style="z-index: 1;">
          <img style="margin-top: 5em;height: 150px;margin-bottom: 2em; margin-right:5em;" src="{{url('purple/img/logobesar.png')}}">
          <div class="form-group pull-center">
                  <a style="text-decoration: none" href="login">Sudah punya akun? Login Disini</a>
              </div>
        </div>

        <div class="col-lg-6" >
          <div class="content" style="overflow: auto; max-height: 500px">
           
            <form class="col-sm-12" method="POST" action="/register/baronas/register" enctype="multipart/form-data">
              {{csrf_field()}}
              <input type="hidden" name="event" value="baronas">
              <div id="form-baronas" style="margin-bottom: 2em">
                <div class="form-group">
                    <div class="input-group">
                      <select id="baronas_kategori" name="baronas_kategori" placeholder="Pilih Kategori Lomba" class="form-control">
                        <option selected disabled>Pilih Kategori Lomba</option>
                        <option value="Elementary">Elementary Category</option>
                        <option value="Junior">Junior Category</option>
                        <option value="Senior">Senior Category</option>
                        <option value="Open">Open Category</option>
                      </select>
                    </div>
                </div>
                

                <div class="form-group">
                  <div class="input-group">
                    <input type="text" name="baronas_namatim" class="form-control" placeholder="Nama Team">
                  </div>
                </div>
               <!--  <div class="form-group">
                  <div class="input-group">
                    <input type="text" name="nama_angg1" class="form-control" placeholder="Nama Anggota 1">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" name="nama_angg2" class="form-control" placeholder="Nama Anggota 2">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" name="nama_angg3" class="form-control" placeholder="Nama Anggota 3">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" name="nama_pembimbing" class="form-control" placeholder="Nama Pembimbing">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" name="asal_team" class="form-control" placeholder="Asal Sekolah/Institusi/Komunitas">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat Sekolah">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                  </div>
                </div> -->


                <div class="form-group">
                  <div class="input-group">
                    <input type="text" name="baronas_cp" class="form-control" placeholder="Nomor Handphone">
                  </div>
                </div>

                <div class="form-group" style="text-align: left;">
                  <label>Upload Bukti Pembayaran</label>
                  <input type="file" name="baronas_bukti" value="" />
                </div>
                <span class="text-danger">
                  {{ $errors->first('bukti') }}
                </span>
                <!-- <div class="form-group" style="text-align: left;">
                                <label>Kartu Tanda Pelajar/Surat Keterangan : </label>
                                <input type="file" name="ktp" value="" />
                </div>
                <div class="form-group" style="text-align: left;">
                                <label>Foto : </label>
                                <input type="file" name="foto" value="" />
                </div> -->
                <button type="submit" class="btn btn-lg btn-block " onclick="fungsigantivalue()">Daftar</button>
              </div>


            </form>
          </div>
        </div>
      </div>
    </div>
    </header>

    <!-- Bootstrap core JavaScript -->
    <script src="{{url('purple/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('purple/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{url('purple/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{url('purple/vendor/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{url('purple/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{url('purple/js/creative.min.js')}}"></script>

    <!-- SCRIPT FOR DROPDOWN LOGIN-->
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="{{url('purple/js/login.js')}}"></script>

    <script src="{{url('purple/js/app.js')}}"></script>
    <script type="text/javascript" src="{{url('particles/snow/particles.min.js')}}"></script>
    <script type="text/javascript" src="{{url('particles/snow/app.js')}}"></script>
  </body>

</html>
