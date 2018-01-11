<!DOCTYPE html>
<html lang="{{app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EVOLTY</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('native/css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{url('native/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{url('native/img/favicon.png')}}">

    <!-- Plugin CSS -->
    <link href="{{url('native/css/magnific-popup /magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('native/css/creative.css')}} " rel="stylesheet">
    <link href="{{url('native/css/buttons.css')}}" rel="stylesheet">

    <!-- CSS BUAT VERTICAL DOTTED NAV -->
    <link href="{{url('native/css/vnav/reset.css')}}" rel="stylesheet">
    <link href="{{url('native/css/vnav/style.css')}}" rel="stylesheet">

    <!-- CSS BUAT EVENTS CARD -->
    <link rel="stylesheet" type="text/css" href="{{url('native/css/eventscard.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('native/css/imagehover.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('native/css/testimoni/testimoni.css')}}">
  </head>

  <body id="page-top">

  <!-- VERTICAL DOTTED NAVIGATION-->
  <div id="cd-vertical-nav">
    <ul>
      <li>
        <a href="#section01" data-number="1">
          <span class="cd-dot"></span>
          <span class="cd-label">Home</span>
        </a>
      </li>
      <li>
        <a href="#section02" data-number="2">
          <span class="cd-dot"></span>
          <span class="cd-label">Events</span>
        </a>
      </li>
      <li>
        <a href="#section03" data-number="3">
          <span class="cd-dot"></span>
          <span class="cd-label">This Year Theme</span>
        </a>
      </li>
      <li>
        <a href="#section04" data-number="4">
          <span class="cd-dot"></span>
          <span class="cd-label">Teaser</span>
        </a>
      </li>
      <li>
        <a href="#section05" data-number="5">
          <span class="cd-dot"></span>
          <span class="cd-label">Testimonials</span>
        </a>
      </li>
      <li>
        <a href="#section06" data-number="6">
          <span class="cd-dot"></span>
          <span class="cd-label">Maps</span>
        </a>
      </li>
    </ul>
  </div>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNavEvolty">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{url('native/img/baronas/logo-evolty3.png')}}" style="height: 50px"></a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#page-top">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#section01">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#section02">EVENT</a>

            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#section04">VIDEO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">PARTICIPANT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#section05">TESTIMONIALS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#section06">DIRECTION</a>
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
      /*background: url('img/background1.png');*/
      background-size: cover;
      position:fixed;
      top:0;
      right:0;
      bottom:0;
      left:0;
      z-index:0; 
      }
   </style>
    <header class="masthead text-center text-white d-flex cd-section" id="section01">
      <div id="particles-js"></div>
      <div class="container mx-auto my-auto">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 mx-auto">
            <img src="{{url('native/img/logobesar.png')}}" style="max-height: 100%; max-width: 100%">
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12  mx-auto">
            <br>
            <strong><p class="lead spacing">EVOLTY 2018 adalah salah satu event terbesar di ITS yang diselenggarakan oleh Fakultas Teknologi Elektro Institut Teknologi Sepuluh Nopember Surabaya untuk mewadahi dan meningkatkan atmosfir kompetitif pelajar se-Indonesia khususnya dalam rumpun ilmu elektro.</p></strong>
            <br>
            <a href="#section02"><button type="button" class="btn btn-info outline">Selengkapnya</button></a>
          </div>
        </div>
      </div>
    </header>

    <section class="teaser d-flex cd-section" id="section02">
      <div class="container my-auto mx-auto">
        <div class="row">
          <div class="col-lg-12" style="margin-bottom: 5em">
            <h2 class="section-heading text-center"><strong>Events</strong></h2>
            <hr class="biru my-auto">
          </div>

          <a href="/electra"><div class="events-card">
            <div class="events-header">
              <figure class="imghvr-fade" style="border-top-left-radius: 10px; border-top-right-radius: 10px">
                <img src="{{url('native/img/electra123.png')}}" width="250px" height="285px">
                <figcaption>
                  <p class="spacing"><strong>Electra (Electrical Competition Tour and Rally) merupakan olimpiade nasional untuk tingkat SMA / MA dan sederajat yang meliputi bidang Fisika, Matematika, dan Komputer dalam bentuk tour dan rally.</strong></p>
                </figcaption>
              </figure>
              <div class="events-icon-container">
                <a href="#">
                  <i class="header-icon"></i>
                </a>
              </div>
            </div>
            <a href="#"><div class="events-content">
              <div class="events-content-header">
                <h3 class="events-title">Visit Electra</h3>
              </div>
            </div>
            </a>
          </div>
          </a>

          <a href="/baronas">
            <div class="events-card">
            <div class="events-header">
              <figure class="imghvr-fade" style="border-top-left-radius: 10px; border-top-right-radius: 10px">
                <img src="{{url('native/img/baronas1234.png')}}" height="285px" width="250px">
                <figcaption>
                  <p class="spacing"><strong>Baronas (Lomba Robot Nasional) merupakan salah satu sub event Evolty dimana siswa SD, SMP, SMA, dan umum dapat mengasah kemampuan mereka dalam bidang robotika.</strong></p>
                </figcaption>
              </figure>
              <div class="events-icon-container">
                <a href="#">
                  <i class="header-icon"></i>
                </a>
              </div>
            </div>
            <a href="#"><div class="events-content">
              <div class="events-content-header">
                <h3 class="events-title">Visit Baronas</h3>
              </div>
            </div>
            </a>
          </div>
          </a>

          <a href="/ns">
            <div class="events-card">
            <div class="events-header">
              <figure class="imghvr-fade" style="border-top-left-radius: 10px; border-top-right-radius: 10px">
                <img src="{{url('native/img/ns123.png')}}" height="285px" width="250px">
                <figcaption>
                  <p class="spacing"><strong>NS (National Symphosium) merupakan subevent dari Evolty yang berbentuk diskusi formal dari berbagai sudut pandang beberapa narasumber ahli.</strong></p>
                </figcaption>
              </figure>
              <div class="events-icon-container">
                <a href="#">
                  <i class="header-icon"></i>
                </a>
              </div>
            </div>
            <a href="#"><div class="events-content">
              <div class="events-content-header">
                <h3 class="events-title">Visit NS</h3>
              </div>
            </div>
            </a>
          </div>
          </a>

          <a href="http://mage.telematics.its.ac.id/">
            <div class="events-card">
            <div class="events-header">
              <figure class="imghvr-fade" style="border-top-left-radius: 10px; border-top-right-radius: 10px">
                <img src="{{url('native/img/mage123.png')}}" height="285px" width="250px">
                <figcaption>
                  <p class="spacing"><strong>MAGE (Multimedia and Game Event) adalah serangkaian event IT tahunan yang berusaha menginspirasi serta mengkolaborasikan masyarakat untuk menggali potensi digital yang masih terpendam di Indonesia.</strong></p>
                </figcaption>
              </figure>
              <div class="events-icon-container">
                <a href="#">
                  <i class="header-icon"></i>
                </a>
              </div>
            </div>
            <a href="#"><div class="events-content">
              <div class="events-content-header">
                <h3 class="events-title">Visit MAGE</h3>
              </div>
            </div>
            </a>
          </div>
          </a>

        </div>
      </div>
    </section>


    <section class="theme text-white d-flex cd-section" id="section03">
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-4">
              <div class="bluebox">
                <img src="{{url('native/img/theme.png')}}">
              </div>
            </div>
            <div class="col-lg-12 col-sm-12">
              <h1 class="theme-text">
              <strong>Advancing Technology</strong>
              <br>
              <strong>for Better</strong>
              <br>
              <strong>Indonesian Society</strong>
              </h1>
            </div>
          </div>
        </div>
    </section>

     <section class="teaser d-flex cd-section" id="section04">
      <div class="container my-auto">
        <div class="row">

          <div class="col-lg-5 my-auto">
            <div class="vid-border mx-0">
              <div class="mx-auto">
                <iframe class="my-auto" style="max-height: 100%; max-width: 100%; position: absolute; left: 0;right: 0;top: 0;bottom: 0;" width="570px" height="480px" 
                  src="https://www.youtube.com/embed/hRVHoExj0i8" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen>
                  </iframe>
              </div>                    
              </div>
            </div>

            <div class="col-lg-2"></div>

          <div class="col-lg-5 my-auto">
            <h2 class="section-heading"><strong>TEASER</strong></h2>
            <hr class="biru mx-0 my-0">
            <br>
            <strong><p class="mb-4">Apasih evolty ini? Kita punya gambarannya nih dari subevent-subevent yang sudah sukses di tahun-tahun sebelumnya. Check this out.</p>
            <p class="mb-4">Prepare yourself and be ready for evolty !</p></strong>
            <a class="btn btn-biru btn-light btn-xl js-scroll-trigger text-white" href="#services">Subscribe Now</a>
          </div>
        </div>
      </div>
    </section>

     <section class="theme1 slide text-white d-flex cd-section" id="section05">
        <div class="container">
          <div class="row">

             <div class="col-lg-12" style="margin-bottom: 3em;">
              <h2 class="section-heading text-center"><strong>TESTIMONIALS</strong></h2>
              <hr class="putih">
            </div>

            <!--<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                  <ul class="carousel-indicators">
                    <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
                  </ul>

                  <div class="carousel-inner">

                    <div class="carousel-item active">-->
                      <div class="col-lg-12" style="margin-bottom: 35px">
                        <div class="whitebox">
                          <div class="row">
                            <div class="col-lg-2"><img src="{{url('native/img/bulet1.png')}}"></div>

                            <div class="col-lg-10 my-auto">
                              <div class="row">
                                  <div class="col-lg-12 col-sm-12 col-md-12"><h3 class="spacing"><strong>Aldo Pradipta</strong></h3></div>
                                  <div class="col-lg-12"><p class="spacing"><strong>"Seru banget! Electra bener-bener bisa bikin paham tentang dunia perkuliahan terutama teknik elektro, karena electra juga dapet pencerahan tentang teknik elektro dan akhirnya masuk ke jurusan ini meskipun cuman sampai semifinal"</strong></p></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-12" style="margin-bottom: 30px">
                        <div class="whitebox">
                          <div class="row">
                            <div class="col-lg-2"><img src="{{url('native/img/bulet2.png')}}"></div>

                            <div class="col-lg-10 my-auto">
                              <div class="row">
                                  <div class="col-lg-12 col-sm-12 col-md-12"><h3 class="spacing"><strong>Muhammad Roychan Meliaz</strong></h3></div>
                                  <div class="col-lg-12"><p class="spacing" style="font-size: 0.9em"><strong>"Dari sini saya belajar bahwa perjuangan memang tidak akan mengkhianati hasil. Apapun yang ingin kamu raih, fokuslah pada tujuan utama dan kesampingkan hal-hal yang tidak terlalu bermanfaat. Perjalanan jauh kami dari Batam hingga Surabaya terbayar sudah. Jika bukan karena MAGE 2017, mungkin saya sekarang tidak akan bisa berada disini,berkuliah di kampus impian, kampus pahlawan, Institut Teknologi Sepuluh Nopember Surabaya"</strong></p></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!--</div>-->

                      <!--<div class="carousel-item">
                      <div class="col-lg-12" style="margin-bottom: 35px">
                        <div class="whitebox">
                          <div class="row">
                            <div class="col-lg-2"><img src="native/img/bulet.png"></div>

                            <div class="col-lg-10 my-auto">
                              <div class="row">
                                  <div class="col-lg-12 col-sm-12 col-md-12"><h3 class="spacing"><strong>Muhammad Yogie Nugroho</strong></h3></div>
                                  <div class="col-lg-12"><p class="spacing"><strong>"Menurut saya acara-acara di evolty sangat memacu produktivitas dan kreativitas sekali, untuk tahun ini tidak masalah tidak mendapat juara, next evolty pasti saya dapatkan"</strong></p></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12" style="margin-bottom: 30px">
                        <div class="whitebox">
                          <div class="row">
                            <div class="col-lg-2"><img src="native/img/bulet.png"></div>

                            <div class="col-lg-10 my-auto">
                              <div class="row">
                                  <div class="col-lg-12 col-sm-12 col-md-12"><h3 class="spacing"><strong>Muhammad Yogie Nugroho</strong></h3></div>
                                  <div class="col-lg-12"><p class="spacing"><strong>"Menurut saya acara-acara di evolty sangat memacu produktivitas dan kreativitas sekali, untuk tahun ini tidak masalah tidak mendapat juara, next evolty pasti saya dapatkan"</strong></p></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                      <div class="carousel-item">
                      <div class="col-lg-12" style="margin-bottom: 35px">
                        <div class="whitebox">
                          <div class="row">
                            <div class="col-lg-2"><img src="native/img/bulet.png"></div>

                            <div class="col-lg-10 my-auto">
                              <div class="row">
                                  <div class="col-lg-12 col-sm-12 col-md-12"><h3 class="spacing"><strong>Muhammad Yogie Nugroho</strong></h3></div>
                                  <div class="col-lg-12"><p class="spacing"><strong>"Menurut saya acara-acara di evolty sangat memacu produktivitas dan kreativitas sekali, untuk tahun ini tidak masalah tidak mendapat juara, next evolty pasti saya dapatkan"</strong></p></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12" style="margin-bottom: 30px">
                        <div class="whitebox">
                          <div class="row">
                            <div class="col-lg-2"><img src="native/img/bulet.png"></div>

                            <div class="col-lg-10 my-auto">
                              <div class="row">
                                  <div class="col-lg-12 col-sm-12 col-md-12"><h3 class="spacing"><strong>Muhammad Yogie Nugroho</strong></h3></div>
                                  <div class="col-lg-12"><p class="spacing"><strong>"Menurut saya acara-acara di evolty sangat memacu produktivitas dan kreativitas sekali, untuk tahun ini tidak masalah tidak mendapat juara, next evolty pasti saya dapatkan"</strong></p></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>-->

                      <!-- <div class="col-lg-12" style="margin-bottom: 35px">
                        <div class="whitebox">
                          <div class="row">
                            <div class="col-lg-2"><img src="img/bulet.png"></div>
                            <div class="col-lg-10 my-auto">
                              <div class="row">
                                  <div class="col-lg-12"><h3 class="spacing"><strong>Muhammad Yogie Nugroho</strong></h3></div>
                                  <div class="col-lg-12"><p class="spacing"><strong>"Menurut saya acara-acara di evolty sangat memacu produktivitas dan kreativitas sekali, untuk tahun ini tidak masalah tidak mendapat juara, next evolty pasti saya dapatkan"</strong></p></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->

                  <!--</div>
            </div>-->
          </div>
        </div>
    </section>

<section class="teaser d-flex cd-section" id="section06">
  <div class="container-fluid p-0">
    <iframe  width="100%" height="100%"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAtyavZgbsptubk2NC-mSo0mrFWsGGRGGg
    &q=Departemen+Teknologi+Elektro+ITS" allowfullscreen>
</iframe>

  </div>
</section>

<footer style="background-color: #000080;min-height: 30vh" class="text-white">
        <div class="container">
          <div class="row">
            <div class="col-sm-3" style="margin-top: 5vh">
              <img src="{{url('native/img/baronas/logo-evolty3.png')}}" class="img-fluid" style="height: 70px">
              <div class="row">
                <div class="col-sm-4" style="margin-top: 1vh">
                  <img src="{{url('native/img/baronas/scan.png')}}" class="img-fluid" style="height: 70px">
                </div>
                <div class="col-sm-8" style="margin-top: 1vh;text-align: left;">
                  <img src="{{url('native/img/baronas/fb.png')}}" class="img-fluid" style="height: 20px">
                  <img src="{{url('native/img/baronas/yt.png')}}" class="img-fluid" style="height: 20px">
                  <img src="{{url('native/img/baronas/ig.png')}}" class="img-fluid" style="height: 20px">
                  <p>evolty_its</p>
                  <p style="margin-top: 0.8em">Line : @czc7495e</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3" style="margin-top: 5vh">
              <strong style="font-size: 2.5em">EVENTS</strong>
              <p style="margin-top: 5vh;text-align: left;">Electra</p>
              <p style="text-align: left;">National Symposium</p>
              <p style="text-align: left;">Baronas</p>
              <p style="text-align: left;">Mage</p>
            </div>
            <div class="col-sm-6" style="margin-top: 5vh">
              <strong style="font-size: 2.5em">Event Of Electrical Faculty</strong>
              <table style="margin-top: 5vh">
                <tr>
                  <td style="padding-right: 15px">Head Office </td>
                  <td style="padding-right: 15px"> : 8211 Electrical Engineer Dept. FTE ITS</td>
                </tr>
                <tr>
                  <td style="padding-right: 15px">Contact Person </td>
                  <td style="padding-right: 15px"> : 085645114530</td>
                </tr>
                <tr>
                  <td style="padding-right: 15px">Email </td>
                  <td style="padding-right: 15px"> : event.himatektro@gmail.com</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="{{url('native/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{url('native/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{url('native/vendor/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{url('native/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{url('native/js/creative.js')}}"></script>

    <!-- SCRIPT FOR DROPDOWN LOGIN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="{{url('native/js/login.js')}}"></script>

    <!-- SCRIPT BUAT VERTICAL DOTTED NAVIGATION -->
    <script src="{{url('native/js/vnav/jquery-2.1.1.js')}}"></script>
    <script src="{{url('native/js/vnav/main.js')}}"></script>
    <script src="{{url('native/js/vnav/modernizr.js')}}"></script>

    <script type="text/javascript" src="{{url('particles/particles.min.js')}}"></script>
    <script type="text/javascript" src="{{url('particles/app.js')}}"></script>

  </body>

</html>
