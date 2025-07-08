<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Sejarah Sulawesi Selatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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

        .dropdown-menu {
            border-radius: 10px;
            overflow: hidden;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 60vh;
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

        .hero-content {
            position: relative;
            z-index: 2;
            padding: 0 20px;
        }

        /* Content Section */
        .content-section {
            padding: 20px 0 20px;
        }

        /* Section Title */
        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin: 0 0 40px;
            text-align: center;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 5px;
            background: linear-gradient(to right, #ffc107, #0d6efd);
            border-radius: 2px;
        }

        /* Wisata Card */
        .wisata-card {
            transition: transform 0.3s;
            margin-bottom: 30px;
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .wisata-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .wisata-img {
            height: 250px;
            object-fit: cover;
        }

        .eco-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: #ffc107;
            color: white;
            padding: 6px 12px;
            border-radius: 25px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        /* Button */
        .btn-primary {
            background-color: #0d6efd;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Footer */
        footer {
            background: linear-gradient(to right, #2c3e50, #34495e);
            color: white;
            padding: 30px 0;
        }

        footer h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        footer p {
            font-size: 1rem;
            margin-bottom: 20px;
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

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section {
                height: 50vh;
                margin-bottom: 30px;
            }
            
            .hero-content h1 {
                font-size: 2.2rem;
            }
            
            .section-title {
                font-size: 2rem;
                margin-bottom: 30px;
            }
            
            .content-section {
                padding: 30px 0;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">PARIWISATA SULAWESI SELATAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="/">BERANDA</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="wisataDropdown" role="button" data-bs-toggle="dropdown">
                            OBJEK WISATA
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('kategori.religi') }}">Objek Wisata Religi</a></li>
                            <li><a class="dropdown-item" href="{{ route('kategori.mangrove') }}">Objek Wisata Mangrove</a></li>
                            <li><a class="dropdown-item active" href="{{ route('kategori.sejarah') }}">Objek Wisata Sejarah</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="/login" class="btn btn-outline-light rounded-pill">LOGIN</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Video -->
    <div class="hero-section">
        <video autoplay muted loop playsinline preload="auto">
            <source src="https://kenzo-fdl.my.id/TheBoys/bg_semua.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-content">
            <h1 class="display-4">WISATA SEJARAH SULAWESI SELATAN</h1>
            <p class="lead">Kenali warisan sejarah dan budaya yang mengakar di Provinsi Sulawesi Selatan</p>
        </div>
    </div>

    <!-- Konten Wisata Sejarah -->
    <div class="container content-section">
        <h2 class="section-title">DESTINASI WISATA SEJARAH</h2>
        <div class="row">
            @foreach ($data as $item)
                @if ($item->kategori === 'Objek Wisata Sejarah')
                <div class="col-md-4">
                    <div class="card wisata-card position-relative">
                        <img src="{{ asset('uploads/' . $item->gambar) }}" class="card-img-top wisata-img" alt="{{ $item->nama }}">
                        <span class="eco-badge">{{ $item->kategori }}</span>
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($item->sejarah, 100) }}</p>
                            <a href="{{ route('detail.show', $item->id_destinasi) }}" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
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
            <p class="mt-3 mb-0">&copy; {{ date('Y') }} Wisata Sulawesi Selatan. All Rights Reserved.</p>
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