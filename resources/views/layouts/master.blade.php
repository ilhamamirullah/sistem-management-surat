<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simansur</title>
    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Dropzone.js -->
    {{-- <link href="{{asset('vendors/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet"> --}}
 @yield('linkcss')
<!-- Custom Theme Style -->
<link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
</head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
          <a href="index.html" class="site_title"> <span>Simansur</span></a>
        </div>
        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <div class="profile clearfix">
          <div class="profile_pic">
            <img src="{{asset('image/rajonet3.jpg')}}" alt="..." class="img-circle profile_img">
          </div>
          <div class="profile_info">
            <span>Welcome,</span>
            <h2>{{ Auth::user()->name }}</h2>
          </div>
        </div>
        <!-- /menu profile quick info -->
        <br />
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <h3>Menu</h3>
            <ul class="nav side-menu">
              <li><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Dashboard </a></li>
              <li><a href="{{route('daftar_surat')}}"><i class="fa fa-table"></i> Daftar Surat</a></li>
              <li><a href="{{route('daftar_surat_masuk')}}"><i class="fa fa-table"></i> Daftar Surat Masuk </a></li>
              <li><a href="{{route('daftar_karyawan')}}"><i class="fa fa-table"></i> Daftar Karyawan </a></li>
              <li><a href="{{route('daftar_client')}}"><i class="fa fa-table"></i> Daftar Client </a></li>
            </ul>
          </div>
          <div class="menu_section">
            <h3>Akun</h3>
            <ul class="nav side-menu">
              <li><a><i class="fa fa-cog"></i> Pengaturan akun </a></li>
              <li><a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i> Logout</a>
                <form action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </div>
        </div>
        <!-- /sidebar menu -->
      </div>
    </div>
    <!-- top navigation -->
    <div class="top_nav">
      <div class="nav_menu">
        <nav>
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li class="">
              <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="{{asset('image/rajonet3.jpg')}}" alt="">{{ Auth::user()->name }}
                <span class=" fa fa-angle-down"></span>
              </a>
              <ul class="dropdown-menu dropdown-usermenu pull-right">
                <li><a href="javascript:;"> Profile</a></li>
                <li>
                  <a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                      Logout
                  </a>

                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </li>
              </ul>
            </li>
            <!--hapus notif pesan-->
          </ul>
        </nav>
      </div>
    </div>
    <div class="right_col" style="min-height: 673px;" role="main">
      <div class="">
          @include('partials.flash')
          @yield('content')
      </div>
    </div>

    <!-- footer content -->
    <footer>
      <div class="pull-right">
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
</div>
<!-- jQuery -->
<script src="{{asset('/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('/vendors/nprogress/nprogress.js')}}"></script>
<!-- Dropzone.js -->
{{-- <script src="{{asset('/vendor/dropzone/dist/min/dropzone.min.js')}}"></script> --}}

@yield('linkjs')

<!-- Custom Theme Scripts -->
<script src="{{asset('/build/js/custom.min.js')}}"></script>

</body>
</html>
