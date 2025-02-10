<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">
                <form class="pt-3" action="{{ route('login.auth') }}" method="post">
                    <div class="login-form-head">
                        <h4>Login</h4>
                    </div>
                    <div class="login-form-body">
                            @csrf
                            <div class="form-gp">
                                <input type="text" class="form-control form-control-lg" id="user_nama" name="user_nama" placeholder="Username">
                                
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-gp">
                                <input type="password" class="form-control form-control-lg" id="user_pass" name="user_pass" placeholder="Password">
                                
                                <div class="text-danger"></div>
                            </div>
                            <div class="row mb-4 rmber-area">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="#">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="submit-btn-area">
                                <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">Submit</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="login-area">
            <div class="login-box">
                    <div class="login-form-head">
                        <h4>Login</h4>
                        <p></p>
                    </div>
                    <div class="login-form-body">
                        <form class="pt-3" action="{{ route('login.auth') }}" method="post">
                            @csrf
                            <div class="form-grup">
                                <label for="user_nama">Username</label>
                                <input type="text" class="form-control form-control-lg" id="user_nama" name="user_nama" placeholder="Username">
                                
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-grup">
                                <label for="user_pass">Password</label>
                                <input type="password" class="form-control form-control-lg" id="user_pass" name="user_pass" placeholder="Password">
                                
                                <div class="text-danger"></div>
                            </div>
                            <div class="row mb-4 rmber-area">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-btn-area">
                                <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">Submit</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="{{ asset('assets') }}/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/js/metisMenu.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="{{ asset('assets') }}/js/plugins.js"></script>
    <script src="{{ asset('assets') }}/js/scripts.js"></script>

    


</body>

</html>