<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}dist/assets/images/favicon.png">
    <!-- Datatable -->
    <link href="{{ asset('/') }}dist/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
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
                            <span class="ml-1">Datatable</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ asset('/') }}dist/assetsavascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="{{ asset('/') }}dist/assetsavascript:void(0)">Datatable</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                {{-- modal tambah data --}}
                <div class="modal fade" id="tambah_data">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Data</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{ url('stokbarang') }}">
                                        @csrf
                                        <div class="form-row align-items-center">
                                            <div class="col-12">
                                                <label class="sr-only">Kode Barang</label>
                                                @foreach ($data as $item)
                                                <input type="text" name="kode_barang" value="KDB{{ $item }}" class="@error('kode_barang') is-invalid @enderror form-control mb-2" placeholder="Masukan Kode Barang" readonly>
                                                @endforeach
                                                @error('kode_barang')
                                                <div class="invalid-feedback">
                                                    <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="sr-only">Nama Barang</label>
                                                <input type="text" name="nama_barang" value="{{ old('nama_barang') }}" class="@error('nama_barang') is-invalid
                                                @enderror form-control mb-2 mb-2" placeholder="Masukan Nama Barang">
                                                @error('nama_barang')
                                                    <div class="invalid-feedback">
                                                        <span>{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="sr-only">Stok Barang</label>
                                                <input type="number" name="stok" value="{{ old('stok') }}" class="@error('stok') is-invalid
                                                @enderror form-control mb-2" class="form-control mb-2" placeholder="Masukan Stok Barang">
                                                @error('stok')
                                                <div class="invalid-feedback">
                                                    <span>{{ $message }}</span>
                                            </div>
                                                @enderror
                                                </div>
                                            <div class="col-12">
                                                <label class="sr-only">Status Barang</label>
                                                <input type="text" name="status" readonly class="@error('status') is-invalid
                                                @enderror form-control mb-2" value="masuk" value="{{ old('status') }}">
                                                    @error('status')
                                                    <div class="invalid-feedback">
                                                    <span>{{ $message }}</span>
                                                </div>
                                                    @enderror
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>

                        </form>
                        </div>
                    </div>
                </div>
                {{-- end modal tambah data --}}
                        @if (session('msg'))
                            <div class="alert alert-success">
                                <strong>Berhasil</strong>
                                <span>{{ session('msg') }}</span>
                            </div>
                        @endif
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="btn btn-outline-success" style="border-radius: 30px;color:black" data-toggle="modal" data-target="#tambah_data"><i class="fa fa-plus"></i> Tambah Data Barang</a>
                                <h4 class="card-title">Data Barang</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                            <tr style="color: black">
                                                <td>No</td>
                                                <td>Kode Barang</td>
                                                <td>Nama Barang</td>
                                                <td>Stok</td>
                                                <td colspan="2" align="center">Action</td>
                                            </tr>
                                        @foreach ($stokbarang as $item)
                                            <tr style="color:black">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->kode_barang }}</td>
                                                <td>{{ $item->nama_barang }}</td>
                                                <td>{{ $item->stok }}</td>
                                                <td>
                                                        <a href="{{ url('stokbarang', $item->id_barang) }}" style="border-radius: 30px" class="btn btn-outline-danger form-control" data-confirm-delete="true"><i class="fa fa-trash"></i></a>
                                                </td>
                                                <td>
                                                    <button data-toggle="modal" data-target="#edit_data{{ $item->id_barang }}" style="border-radius: 30px" type="submit" class="btn btn-outline-info  form-control"><i class="fa fa-edit"></i></button>
                                                </td>
                                            </tr>
                                             {{-- modal edit data --}}
                                                <div class="modal fade" id="edit_data{{ $item->id_barang }}">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Data</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="basic-form">
                                                                    <form method="POST" action="{{ url('stokbarang/'.$item->id_barang) }}">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="form-row align-items-center">
                                                                            <div class="col-12">
                                                                                <label class="sr-only">Kode Barang</label>
                                                                                <input type="text" name="kode_barang" value="{{ $item->kode_barang }}" class="@error('kode_barang') is-invalid @enderror form-control mb-2" placeholder="Masukan Kode Barang" readonly>
                                                                                @error('kode_barang')
                                                                                <div class="invalid-feedback">
                                                                                    <span>{{ $message }}</span>
                                                                                </div>
                                                                            @enderror
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <label class="sr-only">Nama Barang</label>
                                                                                <input type="text" name="nama_barang" value="{{ $item->nama_barang }}" class="@error('nama_barang') is-invalid
                                                                                @enderror form-control mb-2 mb-2" placeholder="Masukan Nama Barang">
                                                                                @error('nama_barang')
                                                                                    <div class="invalid-feedback">
                                                                                        <span>{{ $message }}</span>
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <label class="sr-only">Stok Barang</label>
                                                                                <input type="number" name="stok" value="{{ $item->stok }}" class="@error('stok') is-invalid
                                                                                @enderror form-control mb-2" class="form-control mb-2" placeholder="Masukan Stok Barang">
                                                                                @error('stok')
                                                                                <div class="invalid-feedback">
                                                                                    <span>{{ $message }}</span>
                                                                            </div>
                                                                                @enderror
                                                                                </div>
                                                                            <div class="col-12">
                                                                                <label class="sr-only">Status Barang</label>
                                                                                <input type="text" name="status" readonly class="@error('status') is-invalid
                                                                                @enderror form-control mb-2" value="masuk" value="{{ $item->status }}">
                                                                                    @error('status')
                                                                                    <div class="invalid-feedback">
                                                                                    <span>{{ $message }}</span>
                                                                                </div>
                                                                                    @enderror
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Edit changes</button>
                                                            </div>

                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- end modal edit data --}}
                                        @endforeach
                                    </table>
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
    {{-- sweetalert2 --}}
    @include('sweetalert::alert')

    <!-- Datatable -->
    <script src="{{ asset('/') }}dist/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}dist/assets/js/plugins-init/datatables.init.js"></script>

</body>

</html>
