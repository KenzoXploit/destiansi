<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN - Wisata Sulawesi Selatan</title>
    <link rel="icon" href="https://kenzo-fdl.my.id/TheBoys/favicon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@800&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body, html {
            height: 100%;
            font-family: 'Segoe UI', sans-serif;
            overflow-x: hidden;
        }

        /* Background video styling */
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center center;
            z-index: -2;
        }

        .video-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: -1;
        }

        /* Main content container */
        .main-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content-wrapper {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        /* Login form styling */
        .login-container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
        }

        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .login-header h1 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
        }

        .btn-login {
            width: 100%;
            padding: 0.5rem;
            background-color: #0d6efd;
            border: none;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background-color: #0b5ed7;
            transform: translateY(-2px);
        }

        .form-control {
            border-radius: 25px;
            padding: 0.5rem 1rem;
        }

        .forgot-password {
            text-align: center;
            margin-top: 1rem;
        }

        .forgot-password a {
            color: #666;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .forgot-password a:hover {
            color: #0d6efd;
            text-decoration: underline;
        }

        /* Navbar styling */
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
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: #ffc107 !important;
        }

        .btn-outline-light {
            border-radius: 25px;
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

        /* Footer styling */
        footer {
            background: linear-gradient(to right, #2c3e50, #34495e);
            color: white;
            padding: 30px 0;
            position: relative;
            z-index: 1;
        }

        .social-links a {
            color: #fff;
            margin: 0 10px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            transform: scale(1.2);
            color: #ffd700;
        }

        /* Responsive adjustments */
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
            .content-wrapper {
                padding: 20px 15px;
                align-items: flex-start; /* Untuk mobile, mulai dari atas */
            }
            
            .login-container {
                width: 100%;
                max-width: 100%;
                padding: 1.5rem;
                margin-top: 20px;
            }
            
            .navbar-brand {
                font-size: 1.2rem;
            }
            
            .login-header h1 {
                font-size: 1.5rem;
            }
            
            .btn-outline-light {
                border-radius: 25px;
            }
        }

        @media (max-width: 576px) {
            .login-container {
                padding: 1.25rem;
            }
            
            .login-header h1 {
                font-size: 1.3rem;
            }
            
            .form-label, .form-control, .btn-login {
                font-size: 0.9rem;
            }

            .main-container {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="main-container">
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

        <!-- Video Background -->
        <video class="video-background" autoplay muted loop playsinline>
            <source src="https://kenzo-fdl.my.id/TheBoys/bg_semua.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video-overlay"></div>

        <!-- Main Content - Now properly centered -->
        <div class="content-wrapper">
            <div class="login-container">
                <div class="login-header">
                    <h1>LOGIN</h1>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-login">SIGN IN</button>

                    <div class="forgot-password">
                        <a href="#">Forgot password?</a>
                    </div>
                </form>
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
                <p class="mt-3">&copy; {{ date('Y') }} Wisata Sulawesi Selatan. All Rights Reserved.</p>
            </div>
        </footer>

    <!-- Scripts -->
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