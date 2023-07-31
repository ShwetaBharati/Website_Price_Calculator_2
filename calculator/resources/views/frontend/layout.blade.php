<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Calculator</title>
    <link rel="stylesheet" href="{{ asset('frontend_assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/owlcarousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/layout.css') }}">
</head>

<body>


    @section('container')
    @show
    <!-- ============================================================== -->
    <!-- Start Header Content Here -->
    <!-- ============================================================== -->
    <header id="page-topbar">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box horizontal-logo">
                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('frontend_assets/img/dashboard/logo_white.png') }}" alt="" height="60" width="100">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="primary_btn">
                        <a href="tel:+918709504630" class="primary_btn"> Call Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ============================================================== -->
    <!-- Start Header Content here -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Start Footer Content here -->
    <!-- ============================================================== -->
    <div class="main-content overflow-hidden">
        <div class="footer mt-5">
            <div class="fifth_footer">
                <div class="container ">
                    <div class="">
                        <div class="text-center demo_link d-block">2022 @ All rights reserved Powered by <a
                                href="#">shwetabharati888@gmail.com</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Footer Content here -->
    <!-- ============================================================== -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('frontend_assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('frontend_assets/js/style.js') }}"></script>

    <script>

    </script>
</body>

</html>
