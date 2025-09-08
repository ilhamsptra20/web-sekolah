@extends('layouts.landingPage')

@section('title', 'Gallery')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="py-5" style="background-color: var(--primary-color); color: white;">
        <div class="container d-flex align-items-center">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="fw-bold display-5">Selamat Datang di Galeri SMK NEGERI 4 BOGOR</h1>
                    <p class="lead mt-3">Mencetak Generasi Unggul, Kreatif, dan Berkarakter melalui pendidikan berkualitas dan fasilitas lengkap.</p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('assets/images/hero/smk4.webp') }}" alt="SMK NEGERI 4 BOGOR" class="img-fluid rounded shadow">
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
        </div>
    </section>

@endsection