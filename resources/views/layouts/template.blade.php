<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard - Evolty 2018</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="material/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="material/css/fontastic.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="material/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="material/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="material/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
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
              <h1 class="h4">Halo Tim {{Auth::user()->namatim}} </h1>
              <!-- <p>Web Designer</p> -->
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"> <a href="home"><i class="icon-home"></i>Home</a></li>
            <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>User </a>
              <ul id="dashvariants" class="collapse list-unstyled">
                <li><a href="#">Logout</a></li>
                <li><a href="#">Lupa Password</a></li>
                <!-- <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li> -->
              </ul>
            </li>
            @if(Auth::user()->id==1)
            <li> <a href="admin"> <i class="icon-grid"></i>Admin </a></li>
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
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Status Akun : </h2>
              @if (Auth::user()->status==0)
              <h2>Nonaktif</h2>
              @else
              <h2>Aktif</h2>
              @endif
            </div>
          </header>
          @yield('content')
          <!-- SECTION TABEL -->
          <!-- <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Basic Table</h3>
                    </div>
                    <div class="card-body" style="overflow-x:auto;">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>status</th>
                            <th>Bukti</th>
                            <th>Event</th>
                            <th>Nama Tim</th>
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>Asal Sekolah</th>
                            <th>Alamat Sekolah</th>
                            <th>Nama Ketua</th>
                            <th>Kelas Ketua</th>
                            <th>Nama Anggota 1</th>
                            <th>Kelas Anggota 1</th>
                            <th>Nama Anggota 2</th>
                            <th>Kelas Anggota 2</th>
                            <th>Password</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"></th>
                            <td>Markasdiuyansdaoinsudynoiausyndoiuasyndiouyn</td>
                            <td>Ottosadinusadiunyasiudynoiausyndoiuaysndiasd</td>
                            <td>@mdodasoidnuaosydioasndyiansydouiansydoiuyna</td>
                          </tr>
                          <tr>
                            <th scope="row"></th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row"></th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> -->


          <!-- Dashboard Header Section    -->



          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Evolty &copy; 2018</p>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="material/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="material/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="material/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="material/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="material/js/charts-home.js"></script>
    <script src="material/js/front.js"></script>
  </body>
</html>
