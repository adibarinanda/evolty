<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

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
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/"><img src="native/img/ns/logo_baru_bawah.png" style="height: 50px"></a>
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
    <header class="masthead" style="min-height: 80vh">
      <div id="particles-js"></div>
      <div class="container my-auto mx-auto">
        <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
            <div class="text-center text-white" style="margin-top: 20%;margin-bottom: 10%">
              <p style="font-size: 4vmax">Pembayaran</p>
              <p style="font-size: 3vmax">Electra Competition</p>
            </div>
          </div>
          <div class="col-3"></div>
        </div>
      </div>
      <div class="container my-auto mx-auto">
        <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
            <div style="background-color: white;border: 1px solid white;border-radius: 5px;height: 30vh">
              <div class="text-center" style="margin-top: 3%">
                <p style="margin-bottom: 0.3em">Transfer sejumlah</p>
                <p style="margin-bottom: 0.3em">Rp 120.000,00</p>
                <p style="margin-bottom: 0.3em">ke rekening</p>
                <p style="margin-bottom: 0.3em">MANDIRI 9000040230725</p> 
                <p style="margin-bottom: 0.3em">atas nama</p>
                <p style="margin-bottom: 0.3em">Siti Halimah Tualeka</p>
              </div>
            </div>
            <div style="background-color: white;border: 1px solid white;border-radius: 5px;height: 10vh;margin-top: 2.5%">
              <div class="text-center" style="margin-top: 2%">
                <p style="margin-bottom: 0.3em">Contact Person</p>
                <p style="margin-bottom: 0.3em">0812-3149-9988</p>
              </div>
            </div>
          </div>
          <div class="col-3"></div>
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
    <script type="text/javascript" src="particles/particles.min.js"></script>
    <script type="text/javascript" src="particles/app.js"></script>

  </body>

</html>
