<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard - Evolty 2018</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{url('material/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{url('material/css/fontastic.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{url('material/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{url('material/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{url('material/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="icon" type="image/png" href="{{url('native/img/favicon.png')}}">
    <!-- <link rel="stylesheet" type="text/css" href="material/css/xeditable/xeditable.css"> -->


    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


  </head>
  <body>
    <div class="page home-page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="home" class="navbar-brand">
                  <div class="brand-text brand-big"><strong>Evolty 2018 Dashboard</strong></div>
                  </a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Logout    -->
                <li class="nav-item">
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             {{ csrf_field() }}
                         </form>
                       </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <!-- <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div> -->
            <div class="title">
              @if(Auth::user()->event == 'electra')
              <h1 class="h4">Halo Tim {{Auth::user()->namatim}} </h1>
              @elseif(Auth::user()->event == 'baronas')
              <h1 class="h4">Halo Tim {{Auth::user()->baronas_namatim}} </h1>
              @endif
              <!-- <p>Web Designer</p> -->
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"> <a href="home"><i class="icon-home"></i>Home</a></li>
            <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>User </a>
              <ul id="dashvariants" class="collapse list-unstyled">
                <li><a href="#">Logout</a></li>
                <!-- <li><a href="#">Lupa Password</a></li> -->
                <!-- <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li> -->
              </ul>
            </li>
            @if(Auth::user()->id==1)
            <!-- <li> <a href="admin"> <i class="icon-grid"></i>Admin </a></li> -->
            <li><a href="#adminevent" aria-expanded="false" data-toggle="collapse"> <i class="icon-grid"></i>Admin </a>
              <ul id="adminevent" class="collapse list-unstyled">
                <li><a href="{{url('admin')}}">Electra</a></li>
                <li><a href="{{url('admin/baronas')}}">Baronas</a></li>
                <li><a href="{{url('admin/ns')}}">National Symphosium</a></li>
                <!-- <li><a href="#">Baronas</a></li>
                <li><a href="#">NS</a></li> -->
                <!-- <li><a href="#">Lupa Password</a></li> -->
                <!-- <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li> -->
              </ul>
            </li>
            @endif
            <!-- <li> <a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>
            <li> <a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
            <li> <a href="login.html"> <i class="icon-interface-windows"></i>Login Page</a></li> -->
          <!-- </ul><span class="heading">Extras</span> -->
          <!-- <ul class="list-unstyled">
            <li> <a href="#"> <i class="icon-flask"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-screen"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-mail"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
          </ul> -->
        </nav>



        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            @if (Auth::user()->event!='ns')
              <div class="container-fluid">
                <h2 class="no-margin-bottom">Status Akun : </h2>
                @if (Auth::user()->status==0)
                <h2>Nonaktif</h2>
                @else
                <h2>Aktif</h2>
                @endif
              </div>
            @endif
          </header>
          @yield('content')
          


          <!-- Dashboard Header Section    -->



          <!-- Page Footer-->
          <footer class="main-footer" style="z-index: 1;">
            <div class="container-fluid" style="z-index: 1;">
              <div class="row" style="z-index: 1;">
                <div class="col-sm-6" style="z-index: 1;">
                  <p>Evolty &copy; 2018</p>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="{{url('material/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{url('material/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('material/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{url('material/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{url('material/js/front.js')}}"></script>   
    <script src="{{url('maskedinput/jquery.mask.js')}}"></script>
    <script src="{{url('tablefilter/ddtf.js')}}"></script>
    <script >jQuery('#IDtabel').ddTableFilter();</script>
    <!-- <script src="{{url('material/js/charts-home.js')}}"></script> -->
    <!-- <script type="text/javascript" src="{{url('cleave/cleave.js')}}"></script> -->
  </body>
</html>
