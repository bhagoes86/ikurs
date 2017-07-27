<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>iKurs | Administration </title>

        <!-- Style -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/normalize-blue.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome-4/css/font-awesome.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/vendor.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/404.css')}}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/style.css')}}" >

        <!-- Fonts -->
        <link href="{{ asset('css/vendor/fa/css/font-awesome.css') }}" rel="stylesheet">

    </head>
    <body class="">
        @if (Route::has('login')) <?php /* Melakukan pengecekan apabila sudah login */ ?>
            @if (Auth::check()) <?php /* Melakukan pengecekan user dan pass bila pengecekan login diterima */ ?>

            <nav class="navbar topnav-navbar navbar-fixed-top" role="navigation">
              <div class="navbar-header text-center">
                <button type="button" class="navbar-toggle" id="showMenu" >
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('administration')}}"> ADMINISTRATION </a>
              </div>

              <div class="collapse navbar-collapse">
                <form class="navbar-form navbar-left" role="search">
                  <span class="fa fa-search"></span>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </form>

                <ul class="nav navbar-nav">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                      <span class="fa fa-envelope"></span>
                      <span class="badge badge-green">5</span>
                    </a>
                    <ul class="dropdown-menu animated fadeIn">
                      <li class="messages-top text-center">You have 4 unread messages.</li>
                      <li class="dropdown-messages">
                        <a href="#">
                          <div class="message-sender">Lucy Chandler</div>
                          <div class="message-header">Sent you a friend request.</div>
                        </a>
                      </li>
                      <li class="dropdown-messages">
                        <a href="#">
                          <div class="message-sender">Diptesh Mishra</div>
                          <div class="message-header">Asked you to join StrapUI.</div>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                      <span class="fa fa-bell "></span><span class="badge badge-red">13</span>
                    </a>
                    <ul class="dropdown-menu animated fadeIn">
                      <li class="messages-top text-center">You have 3 new notifications.</li>
                      <li class="dropdown-notifications">
                        <a href="#">
                          <div class="notification">
                            <i class="fa fa-thumbs-up"></i>Runuma Das liked your photo.
                          </div>
                        </a>
                      </li>
                      <li class="dropdown-notifications">
                        <a href="#">
                          <div class="notification">
                            <i class="fa fa-thumbs-up"></i>Harshita Borah liked your status.
                          </div>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
                <ul class="nav navbar-nav pull-right navbar-right">
                  <li class="dropdown admin-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <img src="{{url('images/flat-avatar.png')}}" class="topnav-img" alt=""><span class="hidden-sm">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="{{ url('profil') }}" class="disabled">Profile</a></li>
                      <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     {{ csrf_field() }}
                 </form>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <ul class="nav navbar-nav pull-right hidd">
                <li class="dropdown admin-dropdown" >
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <img src="{{url('images/flat-avatar.png')}}" class="topnav-img" alt="">
                  </a>
                  <ul class="dropdown-menu " role="menu">
                    <li><a href="{{ url('profil') }}" class="disabled">Profile</a></li>
                    <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   {{ csrf_field() }}
                       </form>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
            <aside id="sidebar">
              <div class="sidenav-outer">
                <div class="side-menu">
                  <div class="menu-body">
                    <ul class="nav nav-pills nav-stacked sidenav">
                      <li >
                        <a href="{{ url('administration') }}">
                          <span class="fa fa-home"></span>
                        </a>
                        <ul class="nested-dropdown animated fadeIn">
                          <li><a href="{{ url('administration') }}">Dashboard</a></li>
                        </ul>
                      </li>
                      <li >
                        <a href="">
                          <span class="fa fa-user"></span>
                        </a>
                        <ul class="nested-dropdown animated fadeIn">
                          <li class="sidemenu-header">Pengajar</li>
                          <li><a href="{{ url('pengajar') }}">Pengajar</a></li>
                          <li><a href="{{ url('pengajar/tambah') }}">Tambah Pengajar Baru</a></li>
                        </ul>
                      </li>
                      <li >
                        <a href="">
                          <span class="fa fa-group"></span>
                        </a>
                        <ul class="nested-dropdown animated fadeIn">
                          <li class="sidemenu-header">Peserta</li>
                          <li><a href="{{ url('peserta') }}">Peserta</a></li>
                          <li><a href="{{ url('peserta/daftar') }}">Daftar Peserta Baru</a></li>
                        </ul>
                      </li>
                      <li >
                        <a href="">
                          <span class="fa fa-archive"></span>
                        </a>
                        <ul class="nested-dropdown animated fadeIn">
                          <li class="sidemenu-header">Ruangan </li>
                          <li><a href="{{ url('ruangan') }}">Ruangan</a></li>
                          <li><a href="{{ url('ruangan/tambah') }}">Tambah Ruangan Baru</a></li>
                          <li class="sidemenu-header">Kursus</li>
                          <li><a href="{{ url('/kursus') }}">Kursus</a></li>
                          <li><a href="{{ url('/kursus/tambah') }}">Tambah Kursus Baru</a></li>
                        </ul>
                      </li>
                      <li >
                        <a href="">
                          <span class="fa fa-shopping-cart"></span>
                        </a>
                        <ul class="nested-dropdown animated fadeIn">
                          <li class="sidemenu-header">Pembayaran</li>
                          <li><a href="{{ url('transaksi') }}">Transaksi</a></li>
                          <li><a href="{{ url('transaksi/tambah') }}">Tambah Transaksi Baru</a></li>
                        </ul>
                      </li>
                      <li >
                        <a href="">
                          <span class="fa fa-calendar"></span>
                        </a>
                        <ul class="nested-dropdown animated fadeIn">
                          <li class="sidemenu-header">Jadwal</li>
                          <li><a href="{{ url('jadwal') }}">Jadwal</a></li>
                          <li><a href="{{ url('jadwal/tambah') }}">Tambah Jadwal Baru</a></li>
                        </ul>
                      </li>
                      <li >
                        <a href="">
                          <span class="fa fa-gears"></span>
                        </a>
                        <ul class="nested-dropdown animated fadeIn">
                          <li class="sidemenu-header">Pengaturan</li>
                          <li><a href="">Foto</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="side-widgets">
                  <div class="widgets-content">
                    <div class="text-center">
                      <a href="profile.html"><img src="{{ url('images/flat-avatar.png') }}" class="user-avatar" /></a>
                      <div class="text-center avatar-name">
                        {{ Auth::user()->name }}
                      </div>
                    </div>

                    <div class="calendar-container text-center" >
                      <div id="calendar2" class="fc-header-title"></div>
                    </div>

                    <div class="news-feed">
                      <div class="feed-header">NEWS FEED</div>
                      <div class="feed-content">
                        <ul class="feed">
                          <li>
                            <a href="#">Anna liked StrapUI - Dashboard Themes &amp; Templates.</a> <span class="feed-date">25/4/2015</span>
                          </li>
                          <li>
                            <a href="#">Henna birthday at Mezbaan at 7=&gt;00pm.</a> <span class="feed-date">25/4/2015</span>
                          </li>
                          <li>
                            <a href="#">Animesh Saha commented on your post.</a> <span class="feed-date">25/4/2015</span>
                          </li>
                          <li>
                            <a href="#">Server Alert=&gt; Need to upgrade your server.</a> <span class="feed-date">25/4/2015</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
            <section id="body-container" class="animation">
            @yield('content') <?php /* Isi content page*/ ?>
            </section>

            @else
              <?php /*  Jika belum login maka muncul pesan error.*/ ?>
              <div class="flex-center position-ref full-height">
                <div class="content">
                    <p>404, NOT FOUND ?</p>
                    <div class="title m-b-md">
                      404
                    </div>
                    <p>YOU MUST <a href="{{url('login')}}">LOGIN</a>, OK!</p>
                </div>
              </div>
            @endif

        @endif <?php /* Mengakhiri login check */ ?>

        <!-- javascript -->
        <script src="{{ asset('css/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/vendor/fullcalendar-3.4/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('js/admin/jquery.min.js') }}"></script>
        <script src="{{ asset('js/admin/main.js') }}"></script>
        <script src="{{ asset('js/admin/select.js') }}"></script>
        <script>
          CKEDITOR.replace( 'editor1' );
        </script>

    </body>
</html>
