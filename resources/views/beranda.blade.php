<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pariwisata Sulawesi Selatan</title>
    <link rel="icon" href="https://kenzo-fdl.my.id/TheBoys/favicon.png" type="image/png">
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
            min-height: 60px; /* Tambahkan tinggi minimum */
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            white-space: nowrap;
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

        .hero {
            height: 90vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero video {
            object-fit: cover;
        }

        .hero .content {
            position: relative;
            z-index: 1;
            text-align: center;
            color: white;
        }

        .hero::after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .section-title {
            font-weight: bold;
            font-size: 2.5rem;
            text-align: center;
            margin: 60px 0 20px;
            position: relative;
        }

        .section-title::after {
            content: '';
            width: 120px;
            height: 4px;
            background: linear-gradient(to right, #007bff, #00b894);
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -15px;
        }

        .rekomendasi {
            background: linear-gradient(45deg, #3acfd5, #3a4ed5);
            padding: 10px 0 50px; /* Kurangi padding atas dan bawah */
            color: white;
        }

        .pengunjung {
            padding: 10px 0 50px;
        }

        /* Tambahkan media query untuk responsif */
        @media (max-width: 768px) {
            .navbar-collapse {
                background: linear-gradient(to right, #007bff, #00b894);
                padding: 15px;
                margin-top: 10px;
                border-radius: 5px;
            }
            
            .navbar-nav {
                align-items: flex-start;
            }
            
            .dropdown-menu {
                position: static !important;
                float: none;
                width: 100%;
            }
            .rekomendasi {
                padding: 30px 0 20px;
            }
            
            .section-title {
                font-size: 2rem;
                margin: 40px 0 15px;
            }

            .navbar-brand {
                font-size: 1.2rem;
            }
        }

        .card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
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

        .shadow-sm:hover {
            transform: scale(1.05);
            transition: 0.3s;
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

    <!-- Hero Section with Video -->
    <section class="hero">
        <video autoplay muted loop playsinline class="position-absolute w-100 h-100">
            <source src="https://kenzo-fdl.my.id/TheBoys/bg.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="content">
            <h1 class="fw-bold display-4">KUNJUNGI WISATA YANG ADA DI SULAWESI SELATAN</h1>
            <p class="lead">Explore the beauty of Indonesian nature and culture</p>
        </div>
    </section>

    <!-- Statistik Pengunjung -->
    <section class="pengunjung">
        <div class="container">
            <h2 class="section-title">Statistik Pengunjung Website</h2><br>
            <center><p class="text-muted mb-4">Bergabunglah dengan ribuan wisatawan yang telah mempercayai kami</p></center>
            <div class="row justify-content-center">
                <div class="col-md-3 col-6 mb-3">
                    <div class="p-4 border rounded shadow-sm">
                        <center><i class="fa fa-eye fa-2x mb-2 text-primary"></i></center>
                        <center><h3 class="fw-bold">{{ number_format($totalVisitors) }}</h3></center>
                        <center><p class="text-muted mb-0">Total Pengunjung</p></center>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="p-4 border rounded shadow-sm">
                        <center><i class="fa fa-chart-line fa-2x mb-2 text-success"></i></center>
                        <center><h3 class="fw-bold">{{ $pengunjungHariIni ?? '1' }}</h3></center>
                        <center><p class="text-muted mb-0">Pengunjung Hari Ini</p></center>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="p-4 border rounded shadow-sm">
                        <center><i class="fa fa-globe fa-2x mb-2" style="color: #9b59b6;"></i></center>
                        <center><h3 class="fw-bold">1</h3></center>
                        <center><p class="text-muted mb-0">Negara Pengunjung</p></center>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rekomendasi Section -->
    <section class="rekomendasi">
        <div class="container">
            <h2 class="section-title">REKOMENDASI WISATA</h2><br>
            <div class="row justify-content-center">
                <div class="col-md-3 mb-4">
                    <div class="card text-center" onclick="window.location.href='/detail/13'" style="cursor: pointer;">
                        <img src="{{ asset('uploads/1751042299_99kuba.jpeg') }}" class="card-img-top" alt="99kuba">
                        <div class="card-body">
                            <h5 class="card-title">Masjid 99 Kubah Makassar</h5>
                            <p class="card-text"><strong>1st place</strong><br>Objek Wisata Religi</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card text-center" onclick="window.location.href='/detail/3'" style="cursor: pointer;">
                        <img src="{{ asset('uploads/1750742909_benteng.jpg') }}" class="card-img-top" alt="Benteng Rotterdam">
                        <div class="card-body">
                            <h5 class="card-title">Benteng Rotterdam</h5>
                            <p class="card-text"><strong>2nd place</strong><br>Objek Wisata Sejarah</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card text-center" onclick="window.location.href='/detail/15'" style="cursor: pointer;">
                        <img src="{{ asset('uploads/1751347223_istana.jpg') }}" class="card-img-top" alt="Museum Batara Guru">
                        <div class="card-body">
                            <h5 class="card-title">Museum Batara Guru</h5>
                            <p class="card-text"><strong>3rd place</strong><br>Objek Wisata Sejarah</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card text-center" onclick="window.location.href='/detail/2'" style="cursor: pointer;">
                        <img src="{{ asset('uploads/1750742496_lantebung.jpg') }}" class="card-img-top" alt="Wisata Mangrove Lantebung">
                        <div class="card-body">
                            <h5 class="card-title">Wisata Mangrove Lantebung</h5>
                            <p class="card-text"><strong>4th place</strong><br>Objek Wisata Mangrove</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
            <p class="mt-3">&copy; {{ date('Y') }} Wisata Sulawesi Selatan. All Rights Reserved.</p>
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
