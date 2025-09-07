<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolah Cerdas Bangsa - Mencetak Generasi Unggul</title>
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

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container" style="">
            <a class="navbar-brand fw-bold" href="#">Sekolah Cerdas Bangsa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#achievements">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="schoolCarousel" class="carousel slide" data-bs-ride="carousel">
        {{-- Carousel indicators --}}
        <div class="carousel-indicators">
            @foreach ($carousels as $index => $carousel)
                <button type="button" 
                        data-bs-target="#schoolCarousel" 
                        data-bs-slide-to="{{ $index }}" 
                        class="{{ $index === 0 ? 'active' : '' }}" 
                        aria-current="{{ $index === 0 ? 'true' : 'false' }}" 
                        aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>

        {{-- Carousel items --}}
        <div class="carousel-inner">
            @foreach ($carousels as $index => $carousel)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $carousel->image) }}" 
                        class="d-block w-100" 
                        alt="{{ $carousel->title }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $carousel->title }}</h5>
                        @if($carousel->description)
                            <p>{{ $carousel->description }}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Controls --}}
        <button class="carousel-control-prev" type="button" data-bs-target="#schoolCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#schoolCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    

    <section id="about" class="section-padding">
        <div class="container text-center">
            <h2 class="section-heading mb-4">Tentang Sekolah Kami</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="lead">{{$about->description}}</p>
                </div>
            </div>
            <div class="row mt-5 g-4">
                <div class="col-md-4">
                    <div class="card card-custom p-4">
                        <i class="bi bi-mortarboard-fill fs-1 text-primary mb-3"></i>
                        <h4>Visi</h4>
                        <p>{{$about->visi}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom p-4">
                        <i class="bi bi-clipboard2-check-fill fs-1 text-primary mb-3"></i>
                        <h4>Misi</h4>
                        <p>{{$about->misi}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom p-4">
                        <i class="bi bi-people-fill fs-1 text-primary mb-3"></i>
                        <h4>Nilai</h4>
                        <p>{{$about->nilai}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="gallery" class="section-padding bg-light">
        <div class="container text-center">
            <h2 class="section-heading mb-5">Galeri Kegiatan Sekolah</h2>

            <div class="row g-4">
                @forelse ($galleries as $gallery)
                    <div class="col-md-4 col-sm-6">
                        <div class="gallery-item">
                            <img src="{{ asset('storage/' . $gallery->image) }}" 
                                class="img-fluid shadow" 
                                alt="{{ $gallery->title ?? 'Galeri Sekolah' }}">
                        </div>
                    </div>
                @empty
                    <p class="text-center">Belum ada galeri yang tersedia.</p>
                @endforelse
            </div>

            <div class="mt-4">
                {{ $galleries->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>



    <section id="jurusan" class="section-padding">
        <div class="container text-center">
            <h2 class="section-heading mb-5">Pilihan Jurusan Unggulan</h2>
            <div class="row g-4">
                @php
                    $icons = ['bi-flask-fill', 'bi-globe-americas', 'bi-chat-left-dots-fill', 'bi-mortarboard-fill', 'bi-book-half', 'bi-people-fill'];
                @endphp

                @forelse ($studyPrograms as $index => $program)
                    @php
                        // Pilih icon random dari array
                        $icon = $icons[$index % count($icons)];
                    @endphp
                    <div class="col-md-4">
                        <div class="card card-custom h-100">
                            <div class="card-body">
                                <i class="bi {{ $icon }} fs-1 text-primary mb-3"></i>
                                <h4 class="card-title fw-bold">{{ $program->title }}</h4>
                                <p class="card-text">{{ $program->description }}</p>
                                @if($program->link)
                                    <a href="{{ $program->link }}" class="btn btn-outline-primary mt-3">Pelajari Lebih Lanjut</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">Belum ada jurusan yang tersedia.</p>
                @endforelse
            </div>
        </div>
    </section>

    <section id="achievements" class="section-padding bg-light">
        <div class="container text-center">
            <h2 class="section-heading mb-5">Prestasi Gemilang Siswa Kami</h2>
            <p class="lead mb-5">Kami bangga dengan setiap pencapaian siswa yang telah mengharumkan nama sekolah.</p>

            <div class="row g-4 justify-content-center">
                @forelse ($achievements as $achievement)
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom h-100">
                            @if($achievement->image)
                                <img src="{{ asset('storage/' . $achievement->image) }}" class="card-img-top img-fluid" alt="{{ $achievement->title }}">
                            @endif
                            <div class="card-body">
                                <i class="bi {{ $achievement->icon ?? 'bi-award-fill' }} fs-3 text-secondary mb-2"></i>
                                <h5 class="card-title fw-bold">{{ $achievement->title }}</h5>
                                <p class="card-text">{{ $achievement->description }}</p>
                                @if($achievement->date)
                                    <small class="text-muted">{{ \Carbon\Carbon::parse($achievement->date)->format('F Y') }}</small>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">Belum ada prestasi yang tersedia.</p>
                @endforelse
            </div>

            <div class="mt-4">
                {{ $achievements->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>

    <section id="contact" class="section-padding bg-light">
        <div class="container">
            <h2 class="section-heading text-center mb-5">Hubungi Kami</h2>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Alamat Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nomor Telepon">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Pesan Anda" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="location" class="section-padding"> <div class="container text-center">
            <h2 class="section-heading mb-4">Lokasi Kami</h2>
            <p class="lead">Temukan kami dengan mudah menggunakan peta di bawah ini.</p>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.6669865181766!2d106.79092497401777!3d-6.561917764121404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5e31c7136d3%3A0x62955745145b2520!2sIPB%20University%20(Kampus%20Dramaga)!5e0!3m2!1sid!2sid!4v1709778000000!5m2!1sid!2sid"
                                width="100%" 
                                height="450" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <footer class="footer-custom py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold">Sekolah Cerdas Bangsa</h5>
                    <p>Jl. Pendidikan No. 123, Kota Ilmu, 12345</p>
                    <p>Email: <a href="mailto:info@sekolahcerdasbangsa.sch.id">info@sekolahcerdasbangsa.sch.id</a></p>
                    <p>Telepon: <a href="tel:+62123456789">+62 123-456-789</a></p>
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
                    <p class="mb-0">© 2024 Sekolah Cerdas Bangsa. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>