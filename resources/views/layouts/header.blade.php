<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Peminjaman Barang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/metisMenu.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/typography.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/default-css.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/styles.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css">
    <!-- modernizr css -->
    <script src="{{ asset('assets') }}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="{{ route('home')}}" aria-expanded="true"><i class="ti-dashboard"></i>
                                    <span>dashboard</span></a>

                                    <!-- barang inv -->
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i>
                                    <span>Barang Inventaris</span></a>
                                <ul class="collapse">
                                    <li><a href="{{ route('barang.index')}}">Daftar Barang</a></li>
                                    <li><a href="{{ route('barang.create')}}">Penerimaan Barang</a></li>
                                </ul>
                            </li>
                            <!-- penjamanan -->
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i>
                                    <span>Peminjaman Barang</span></a>
                                <ul class="collapse">
                                    <li><a href="{{ route('peminjaman.create')}}">Tambah Peminjaman</a></li>
                                    <li><a href="{{ route('peminjaman.index')}}">Daftar Peminjaman</a></li>
                                    <li><a href="{{ route('barang.dipinjam')}}">Barang Belum Kembali</a></li>
                                    <li><a href="{{ route('pengembalian.index')}}">Pengembalian</a></li>
                                </ul>
                            </li>
                            <!-- laporan -->
                            
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i>
                                    <span>Laporan</span></a>
                                <ul class="collapse">
                                    <li><a href="{{ route('laporan.barang-tersedia')}}">Laporan Daftar Barang</a></li>
                                    <li><a href="{{ route('laporan.pengembalian-barang')}}">Laporan Pengembalian</a></li>
                                    <li><a href="{{ route('laporan.status-barang')}}">Laporan Status Barang</a></li>
                                </ul>
                            </li>
                            <!-- referensi -->
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i>
                                    <span>Referensi</span></a>
                                <ul class="collapse">
                                    <li><a href="{{ route('jenis-barang.index')}}">Jenis Barang</a></li>
                                    <li><a href="{{ route('daftar-pengguna')}}">Daftar Pengguna</a></li>
                                </ul>
                            </li>
                            
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="{{ route('jenis-barang.index')}}">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                           
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h5 class="fw-bold m-6">Dashboard</h5>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="{{ url('home') }}">Home</a></li>
                                <li><span>Dashboard</span></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">My User <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <form  action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Log Out</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <section class="content">
                @yield('content')
            <endsection>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        
       
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="{{ asset('assets') }}/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/js/metisMenu.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="{{ asset('assets') }}/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="{{ asset('assets') }}/js/pie-chart.js"></script>
    <!-- all bar chart activation -->
    <script src="{{ asset('assets') }}/js/bar-chart.js"></script>
    <!-- others plugins -->
    <script src="{{ asset('assets') }}/js/plugins.js"></script>
    <script src="{{ asset('assets') }}/js/scripts.js"></script>
</body>

</html>
