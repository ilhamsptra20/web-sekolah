<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Sign In | Yayasan Insan Mandiri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Yayasan Insan Mandiri" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset("favicon.ico")}}">

    <!-- Layout config Js -->
    <script src="{{ asset("assets/js/layout.js")}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset("assets/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset("assets/css/icons.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset("assets/css/app.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset("assets/css/custom.min.css")}}" rel="stylesheet" type="text/css" />

    <style>
        .bg-overlay-auth {
            position: absolute;
            height: 100%;
            width: 100%;
            right: 0;
            bottom: 0;
            left: 0;
            top: 0;
            opacity: .7;
            background: linear-gradient(135deg, #00c6ff, #0072ff); 
        }
    </style>

</head>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 h-100">
                                        <div class="bg-overlay-auth"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mt-auto">
                                                <div class="mb-3">
                                                    <i class="ri-double-quotes-l display-4 text-success"></i>
                                                </div>

                                                <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="text-center text-white pb-5">
                                                        <div class="">
                                                            <p class="fs-15 fst-italic">" SMK NEGERI 4 BOGOR MENCERDASKAN KEHIDUPAN BANGSA!! "</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end carousel -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                @yield('content')
                                
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0">&copy;
                                <script>document.write(new Date().getFullYear())</script> Nabila. Crafted with <i class="mdi mdi-heart text-danger"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset("assets/libs/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{ asset("assets/libs/simplebar/simplebar.min.js")}}"></script>
    <script src="{{ asset("assets/libs/node-waves/waves.min.js")}}"></script>
    <script src="{{ asset("assets/libs/feather-icons/feather.min.js")}}"></script>
    <script src="{{ asset("assets/js/pages/plugins/lord-icon-2.1.0.js")}}"></script>
    <script src="{{ asset("assets/js/plugins.js")}}"></script>

    <!-- password-addon init -->
    <script src="{{ asset("assets/js/pages/password-addon.init.js")}}"></script>
</body>

</html>