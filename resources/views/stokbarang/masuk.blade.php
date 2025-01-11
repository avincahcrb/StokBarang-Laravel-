<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}dist/assets/images/favicon.png">
    <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"/>
    <!-- Custom Stylesheet -->
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
            <a href="{{ asset('/') }}dist/assets/index.html" class="brand-logo">
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
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="{{ asset('/') }}dist/assets" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="{{ asset('/') }}dist/assets">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="{{ asset('/') }}dist/assets">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="{{ asset('/') }}dist/assets">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="{{ asset('/') }}dist/assets">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="{{ asset('/') }}dist/assets">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="{{ asset('/') }}dist/assets">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="{{ asset('/') }}dist/assets" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
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
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Element</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ asset('/') }}dist/assetsavascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="{{ asset('/') }}dist/assetsavascript:void(0)">Element</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pemasukan Barang</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form id="form_id" action="{{ url('riwayat') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label style="color: black">Kode Barang</label>
                                        <input autocomplete="true" onkeyup="autofill()" id="kode_barang" name="kode_barang" type="text" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="col-sm-6 mt-2 mt-sm-3">
                                        <label style="color: black">Stok Barang</label>
                                        <input autocomplete="true" type="text" name="stok" id="stok" class="form-control" placeholder="Last name">
                                        <input hidden type="text" name="id_barang" id="id_barang" class="form-control" placeholder="Last name">
                                    </div>
                                    <div class="col-sm-6 mt-2 mt-sm-0">
                                        <label style="color: black">Nama Barang</label>
                                        <input autocomplete="true" readonly type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Last name">
                                        <input hidden type="text" name="status" value="masuk" class="form-control" placeholder="Last name">
                                    </div>
                                    <div class="col-sm-6 mt-3 mt-sm-4">
                                        <button type="submit" class="btn btn-primary ">Simpan</button>
                                    </div>
                                </form>
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
                <p>Copyright © Designed &amp; Developed by <a href="{{ asset('/') }}dist/assets" target="_blank">Quixkit</a> 2019</p>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- autofill --}}
    <script>
    function autofill(){
            $.ajax({
                type: 'GET',
                url: '/get-autofill-data',
                data: {
                    term: $('#kode_barang').val()
                },
                success: function(data) {
                    if (data) {
                        $('#nama_barang').val(data.nama_barang);
                        $('#stok').val(data.stok);
                        $('#id_barang').val(data.id_barang);
                        $('#form_id').val(data.id_barang);
                    } else {
                        alert('Data tidak ditemukan.');
                    }
                }
            });
        }
    </script>
</body>

</html>
