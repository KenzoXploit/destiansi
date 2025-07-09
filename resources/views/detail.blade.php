<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Wisata - {{ $data->nama }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background: linear-gradient(to right, #007bff, #00b894);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: white !important;
        }

        .nav-link {
            color: #ffffff !important;
        }
        .nav-link:hover, .dropdown-item:hover {
            color: #ffc107 !important;
        }

        .btn-outline-light {
            border-radius: 25px;
        }

        .hero-section {
            position: relative;
            height: 50vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-bottom: 40px;
        }

        .hero-section video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .hero-section::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .hero-section .hero-content {
            position: relative;
            z-index: 2;
            padding: 0 20px;
        }

        .detail-image {
            display: block;
            max-width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
            margin: 0 auto 30px auto;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .info-section {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.05);
        }

        .info-title {
            border-bottom: 3px solid #0d6efd;
            font-size: 1.8rem;
            margin-bottom: 20px;
            padding-bottom: 10px;
            font-weight: bold;
            color: #343a40;
        }

        .info-list {
            list-style: none;
            padding: 0;
        }

        .info-list li {
            font-size: 1.1rem;
            margin-bottom: 12px;
        }

        .info-list strong {
            color: #0d6efd;
            display: block;
        }

        .btn-primary {
            background: linear-gradient(45deg, #1e90ff, #00cec9);
            border: none;
            border-radius: 25px;
        }

        .map-container {
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .brand-text {
            font-family: "Merienda", cursive;
            font-weight: 800;
            color: white;
            font-size: 1.5rem;
            white-space: nowrap;
        }

        @media (max-width: 768px) {
            .brand-text {
                font-size: 1rem;
            }
        }

        footer {
            background: linear-gradient(to right, #2c3e50, #34495e);
            color: white;
            padding: 20px 0; /* Kurangi padding */
            margin-top: 0; /* Hapus margin top */
        }

        .social-links a {
            color: #fff;
            margin: 0 10px;
            transition: transform 0.3s;
        }

        .social-links a:hover {
            transform: scale(1.2);
            color: #ffd700;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center text-nowrap" href="/">
                <img src="https://kenzo-fdl.my.id/TheBoys/logonav.png" alt="Logo Wisata" height="36" class="me-2">
                <span class="brand-text">Pariwisata Sulawesi Selatan</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-lg-center me-lg-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">BERANDA</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="wisataDropdown" role="button" data-bs-toggle="dropdown">
                            OBJEK WISATA
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/kategori/wisatareligi">Objek Wisata Religi</a></li>
                            <li><a class="dropdown-item" href="/kategori/wisatamangrove">Objek Wisata Mangrove</a></li>
                            <li><a class="dropdown-item" href="/kategori/wisatasejarah">Objek Wisata Sejarah</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="/login" class="btn btn-outline-light">LOGIN</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <div class="hero-section">
        <video autoplay muted loop playsinline preload="auto">
            <source src="https://kenzo-fdl.my.id/TheBoys/bg_semua.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-content">
            <h1 class="display-4">{{ $data->nama }}</h1>
            <p class="lead">{{ $data->kategori }}</p>
        </div>
    </div>

    <!-- Detail Section -->
    <div class="container my-5">
        <img src="{{ asset('uploads/' . $data->gambar) }}" class="detail-image" alt="{{ $data->nama }}">
        <div class="row">
            <div class="col-md-8">
                <div class="info-section">
                    <h2 class="info-title">Informasi Wisata</h2>
                    <ul class="info-list mb-4">
                        <li><strong>Nama</strong>{{ $data->nama }}</li>
                        <li><strong>Kategori</strong>{{ $data->kategori }}</li>
                        <li><strong>Alamat</strong></li>
                    </ul>
                    <div class="map-container">
                        <iframe src="{{ $data->alamat }}" width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="mb-4">
                        <h4>Sejarah</h4>
                        <p>{!! nl2br(e($data->sejarah)) !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-section">
                    <h2 class="info-title">Informasi Tambahan</h2>
                    <ul class="info-list">
                        <li><strong>Jam Buka</strong>{{ $data->jam_buka }}</li>
                        <li><strong>Fasilitas</strong>
                            <ul>
                                @foreach(explode(',', $data->fasilitas) as $item)
                                    <li>{{ trim($item) }}</li>
                                @endforeach
                            </ul>
                        </li>
                        <li><strong>Kontak</strong>{{ $data->kontak }}</li>
                    </ul>
                    <div class="d-grid gap-2 mt-4">
                        <a href="{{ $data->alamat }}" target="_blank" class="btn btn-primary">
                            <i class="fas fa-directions me-2"></i> Petunjuk Arah
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <h3>WISATA SULAWESI SELATAN</h3>
            <p>Temukan kedamaian spiritual dan keindahan alam di Provinsi Sulawesi Selatan</p>
            <div class="social-links mt-3">
                <a href="http://instagram.com/algzspace"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
            </div>
            <p class="mt-3 mb-0">&copy; {{ date('Y') }} Wisata Sulawesi Selatan. All Rights Reserved.</p> <!-- Tambahkan mb-0 -->
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const video = document.querySelector("video");
            if (video) {
                video.play().catch(error => {
                    console.log("Autoplay diblokir: ", error);
                });
            }
        });
</script>
</body>
</html>
