<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portofolio Saya')</title>

    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        html {
            scroll-behavior: smooth;
        }

        :root {
            --bs-body-bg: #ffffff;
            --bs-body-color: #2b2b2b;
        }

        body {
            background-color: #ffffff;
            color: #2b2b2b;
        }

        .navbar {
            background-color: #ffffff !important;
            border-bottom: 1px solid #eee;
        }

        .navbar-brand {
            color: #6d28d9 !important;
            font-weight: 600;
        }

        .navbar .nav-link {
            color: #2b2b2b !important;
        }

        .navbar .nav-link:hover {
            color: #6d28d9 !important;
        }

        section {
            scroll-margin-top: 80px;
        }

        .text-accent {
            color: #6d28d9;
        }

        .btn-primary {
            background-color: #6d28d9;
            border-color: #6d28d9;
        }

        .btn-primary:hover {
            background-color: #5b21b6;
            border-color: #5b21b6;
        }

        .btn-outline-secondary {
            color: #2b2b2b;
            border-color: #ccc;
        }

        .btn-outline-secondary:hover {
            background-color: #f3f0fb;
            color: #6d28d9;
            border-color: #6d28d9;
        }

        .badge.bg-dark {
            background-color: #f3f0fb !important;
            color: #6d28d9 !important;
            border: 1px solid #ddd0f7;
        }

        .card {
            background-color: #fff;
            border: 1px solid #eee;
            color: #2b2b2b;
            box-shadow: 0 2px 10px rgba(0,0,0,0.04);
        }

        .photo-blob {
            position: relative;
            width: 280px;
            height: 280px;
            margin: 0 auto;
        }

        .photo-blob::before {
            content: "";
            position: absolute;
            inset: -20px;
            background: #6d28d9;
            border-radius: 45% 55% 60% 40% / 55% 45% 55% 45%;
            z-index: 0;
        }

        .photo-blob img {
            position: relative;
            z-index: 1;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 45% 55% 60% 40% / 55% 45% 55% 45%;
        }

        .logo-box img {
            max-height: 50px;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: 0.2s;
        }

        .logo-box img:hover {
            filter: none;
            opacity: 1;
        }

        a {
            color: #6d28d9;
        }

        a:hover {
            color: #5b21b6;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .badge.bg-dark i {
    margin-right: 4px;
    vertical-align: middle;
}
    </style>
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#home"><i class="bi bi-code-slash"></i> Revantino Meysi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pendidikan">Pendidikan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pengalaman">Pengalaman</a></li>
                    <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-5">
        @yield('content')
    </main>

    <!-- Bootstrap JS via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>