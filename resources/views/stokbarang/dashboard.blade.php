<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}dist/assets/images/favicon.png">
    <link rel="stylesheet" href="{{ asset('/') }}dist/assets/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}dist/assets/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="{{ asset('/') }}dist/assets/vendor/jqvmap/css/jqvmap.min.css" rel="styleshee{{ asset('/') }}t">
    <link href="{{ asset('/') }}dist/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ asset('/') }}dist/assetsndex.html" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('/') }}dist/assets/images/logo.png" alt="">
                <img class="logo-compact" src="{{ asset('/') }}dist/assets/images/logo-text.png" alt="">
                <img class="brand-title" src="{{ asset('/') }}dist/assets/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href{{ asset('/') }}="dist/assets" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="" class="dropdown-item">
                                        <span><center><b>{{ Auth::user()->name }}</b></center></span>
                                    </a>
                                    <a href="{{ asset('/') }}dist/assets/app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="{{ asset('/') }}dist/assets/email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="/logout" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li>
                        <a href="{{ url('/dashboard') }}" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Dashboard</span></a>
                    </li>
                    <li><a href="{{ url('stokbarang') }}" aria-expanded="false"><i
                        class="icon icon-chart-bar-33"></i><span class="nav-text">Data Barang</span></a>
                    </li>
                    <li><a class="has-arrow" aria-expanded="false"><i
                        class="icon icon-layout-25"></i><span class="nav-text">Pemasukan</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('stokbarang/masuk') }}">Transaksi Barang Masuk</a></li>
                  <li><a href="{{ url('stokbarang/keluar') }}">Transaksi Barang Keluar</a></li>
                </ul>
                    </li>
                    <li><a href="{{ url('riwayat') }}" aria-expanded="false"><i
                        class="icon icon-chart-bar-33"></i><span class="nav-text">Riwayat Transaksi</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Jumlah Barang</div>
                                    <div class="stat-digit"> <i class="fa fa-data"></i>{{ $barang->count('nama_barang') }}</div>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-primary" style="width:  {{ $barang->count('nama_barang') }}%"></div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Jumlah Transaksi Masuk</div>
                                    <div class="stat-digit">{{ $riwayat->where('status','=','masuk')->count('status') }}</div>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-primary" style="width: {{ $riwayat->where('status','=','masuk')->count('status') }}%"></div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Jumlah Transaksi Keluar</div>
                                    <div class="stat-digit">{{ $riwayat->where('status','=','keluar')->count('status') }}</div>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-primary" style="width: {{ $riwayat->where('status','=','keluar')->count('status') }}%"></div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Jumlah Semua Transaksi</div>
                                    <div class="stat-digit">{{ $riwayat->count('status') }}</div>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-primary" style="width: {{ $riwayat->count('status') }}%"></div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <div class="row">
                    <div id="morris-bar-chart" hidden></div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="widget-card-circle mt-5 mb-5" id="info-circle-card">
                                    <i class="ti-control-shuffle pa"></i>
                                </div>
                                <ul class="widget-line-list m-b-15">
                                    <li class="border-right">{{ $riwayat->where('status','=','masuk')->count('status') }} <br><span class="text-success"><i
                                                class="ti-hand-point-up"></i> Masuk</span></li>
                                    <li>{{ $riwayat->where('status','=','keluar')->count('status') }}<br><span class="text-danger"><i
                                                class="ti-hand-point-down"></i> Keluar</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Web Server</h4>
                            </div>
                            <div class="card-body">
                                <div class="cpu-load-chart">
                                    <div id="cpu-load" class="cpu-load"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <div class="col-sm-12 col-md-12 col-xxl-6 col-xl-4 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Transaksi</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart py-4">
                                    <canvas id="sold-product"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by Muhammad Avin Maulana</a> 2024</p>
           <p>Distributed by <a href="dist/assetsttps://themewagon.com/" target="_blank">Muhammad Avin Maulana</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('/') }}dist/assets/vendor/global/global.min.js"></script>
    <script src="{{ asset('/') }}dist/assets/js/quixnav-init.js"></script>
    <script src="{{ asset('/') }}dist/assets/js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="{{ asset('/') }}dist/assets/vendor/raphael/raphael.min.js"></script>
    <script src="{{ asset('/') }}dist/assets/vendor/morris/morris.min.js"></script>


    <script src="{{ asset('/') }}dist/assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{ asset('/') }}dist/assets/vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="{{ asset('/') }}dist/assets/vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="{{ asset('/') }}dist/assets/vendor/flot/jquery.flot.js"></script>
    <script src="{{ asset('/') }}dist/assets/vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('/') }}dist/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="{{ asset('/') }}dist/assets/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="{{ asset('/') }}dist/assets/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="{{ asset('/') }}dist/assets/vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="{{ asset('/') }}dist/assets/js/dashboard/dashboard-1.js"></script>

</body>

</html>
