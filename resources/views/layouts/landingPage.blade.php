<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      @hasSection('title')
        @yield('title') - SMK NEGERI 4 BOGOR
      @else
        SMK NEGERI 4 BOGOR
      @endif
    </title>

    <!-- Sweet Alert css-->
    <link href="{{ @asset("assets/libs/sweetalert2/sweetalert2.min.css") }}" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #004d99;
            --secondary-color: #ffc107;
            --dark-color: #212529;
            --light-color: #f8f9fa;
        }

        body {
            font-family: 'Poppins', sans-serif; /* Perbaikan: sans-style -> sans-serif */
            color: var(--dark-color);
        }

        .navbar {
            background-color: var(--primary-color);
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: white !important;
        }
        .navbar-brand:hover, .navbar-nav .nav-link:hover {
            color: var(--secondary-color) !important;
        }
        
        .carousel-item img {
            height: 90vh;
            object-fit: cover;
            filter: brightness(60%);
        }

        .carousel-caption h5 {
            font-size: 3rem;
            font-weight: 700;
        }
        
        .section-padding {
            padding: 80px 0;
        }

        .section-heading {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .card-custom {
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .card-custom:hover {
            transform: translateY(-10px);
        }

        .gallery-item img {
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }
        .gallery-item img:hover {
            transform: scale(1.05);
        }

        .achievement-item {
            background-color: var(--light-color);
            padding: 20px;
            border-radius: 8px;
        }

        .footer-custom {
            background-color: var(--dark-color);
            color: white;
        }
        .footer-custom a {
            color: white;
            text-decoration: none;
        }
        .footer-custom a:hover {
            color: var(--secondary-color);
        }
        /* Style untuk Google Maps Responsif */
        .map-responsive {
            overflow:hidden;
            padding-bottom:56.25%; /* 16:9 aspect ratio */
            position:relative;
            height:0;
        }
        .map-responsive iframe {
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }

        #hero {
            min-height: 400px;
        }

        #hero h1 {
            color: white;
        }

        #hero p {
            color: rgba(255,255,255,0.9);
        }

        #hero .btn-light {
            color: var(--primary-color);
            font-weight: 600;
        }

        #hero .btn-light:hover {
            background-color: var(--secondary-color);
            color: white;
        }

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container" style="">
            <a class="navbar-brand fw-bold" href="#">SMK NEGERI 4 BOGOR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('landingPage.home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landingPage.galleries') }}">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landingPage.achievements') }}">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer-custom py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold">SMK Negeri 4 Bogor</h5>
                    <p>Jl. Raya Tajur, KP. Buntar, Kel. Muarasari, Kec. Kota Bogor Selatan, Kota Bogor, Jawa Barat, 16137</p>
                    <p>Email: <a href="mailto:smkn4@smkn4bogor.sch.id">smkn4@smkn4bogor.sch.id</a></p>
                    <p>Telepon: <a href="tel:+622517547381">(0251) 7547381</a></p>
                </div>

                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold">Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#gallery">Galeri</a></li>
                        <li><a href="#achievements">Prestasi</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold">Ikuti Kami</h5>
                    <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-instagram fs-4"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-twitter fs-4"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-youtube fs-4"></i></a>
                </div>
            </div>
            <hr class="text-white-50">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0">© 2025 SMK NEGERI 4 BOGOR. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ @asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    @if (session('success'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 1500,
            showCloseButton: true
        });
    </script>
    @endif
</body>
</html>