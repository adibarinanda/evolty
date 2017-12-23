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

    <header class="masthead text-center text-white d-flex">
      <div class="my-auto mx-auto">
        <div class="row">
          <form method="POST" class="col-sm-12" action="{{ route('login')}} ">
            {{ csrf_field()}}
            <img style="margin-top: 5em;height: 150px;margin-bottom: 2em" src="purple/img/logobesar.png">


                <div class="form-group {{ $errors->has('email') ? ' has-error' : ''}} ">
                    <div class="input-group">
                        <span class="input-group-addon" id="addon_username"><i class="fa fa-envelope fa-fw"></i></span>
                        <input id="email" type="email" name="email" class="form-control" placeholder="Email" aria-describedby="addon_username" value="{{old('email')}} " required>

                        @if ($errors->has('email'))
                          <span class="help-block">
                            <strong>{{ $errors->first('email')}} </strong>
                          </span>
                        @endif

                    </div>
                </div>

                <div class="form-group {{ $errors->has('password') ? ' has-error' : ''}} ">
                    <div class="input-group">
                        <span class="input-group-addon" id="addon_password1"><i class="fa fa-lock fa-fw"></i></span>
                        <input id="password" type="password" name="password" class="form-control" placeholder="Password" aria-describedby="addon_password1" required>

                        @if ($errors->has('password'))
                          <span class="help-block">
                            <strong> {{ $errors->first('password')}} </strong>
                          </span>
                        @endif

                    </div>
                </div>

                <div class="form-group pull-right">
                  <a style="text-decoration: none" href="forgot">Lupa password?</a>
                </div>

                <div class="form-group pull-left">
                  <a style="text-decoration: none" href="register">Belum punya akun? Daftar disini!</a>
                </div>

                <button type="submit" class="btn btn-lg btn-block">Masuk</button>

            </form>
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

  </body>

</html>
