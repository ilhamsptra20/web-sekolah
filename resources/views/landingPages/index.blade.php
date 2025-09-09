@extends('layouts.landingPage')


@section('content')

    <div id="schoolCarousel" class="carousel slide" data-bs-ride="carousel">
        {{-- Carousel indicators --}}
        <div class="carousel-indicators">
            @if($carousels->count() > 0)
                @foreach ($carousels as $index => $carousel)
                    <button type="button" 
                            data-bs-target="#schoolCarousel" 
                            data-bs-slide-to="{{ $index }}" 
                            class="{{ $index === 0 ? 'active' : '' }}" 
                            aria-current="{{ $index === 0 ? 'true' : 'false' }}" 
                            aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            @endif
        </div>

        {{-- Carousel items --}}
        <div class="carousel-inner">
            @forelse ($carousels as $index => $carousel)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
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
            @empty
                {{-- Default slide kalau nggak ada carousel --}}
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/hero/smk4.webp') }}" 
                        class="d-block w-100" 
                        alt="Selamat Datang Di SMK NEGERI 4 BOGOR">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Selamat Datang Di SMK NEGERI 4 BOGOR</h5>
                        <p>Mencetak Generasi Unggul, Kreatif, dan Berkarakter.</p>
                    </div>
                </div>
            @endforelse
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
            @if($galleries->count() >= 6)
                <div class="text-center mt-4">
                    <a href="{{ route('landingPage.galleries') }}" class="btn btn-primary">Selengkapnya</a>
                </div>
            @endif
        </div>
    </section>



    <section id="jurusan" class="section-padding">
        <div class="container text-center">
            <h2 class="section-heading mb-5">Pilihan Jurusan Unggulan</h2>
            <div class="row g-4 justify-content-center">
                @php
                    $icons = ['bi-gear-fill', 'bi-globe-americas', 'bi-chat-left-dots-fill', 'bi-mortarboard-fill', 'bi-book-half', 'bi-people-fill'];
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
            @if($achievements->count() >= 6)
                <div class="text-center mt-4">
                    <a href="{{ route('landingPage.achievements') }}" class="btn btn-primary">Selengkapnya</a>
                </div>
            @endif
        </div>
    </section>

    <section id="contact" class="section-padding bg-light">
        <div class="container">
            <h2 class="section-heading text-center mb-5">Hubungi Kami</h2>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action={{ route('messages.store') }} method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Alamat Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="phone" placeholder="Nomor Telepon">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" name="message" placeholder="Pesan Anda" required></textarea>
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
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.049839612663!2d106.82211360980257!3d-6.640733393326073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c8b16ee07ef5%3A0x14ab253dd267de49!2sSMKN%204%20Bogor!5e0!3m2!1sen!2sid!4v1757402313613!5m2!1sen!2sid" 
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
    
@endsection
