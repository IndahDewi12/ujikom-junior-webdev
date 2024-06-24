<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>UJIKOM</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('') }}asset/img/favicon.png" rel="icon">
    <link href="{{ asset('') }}asset/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('') }}asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('') }}asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('') }}asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('') }}asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('') }}asset/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div id="logo">
                <h1><a href="index.html"><span>UJI </span>KOMPETENSI</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="{{ asset('') }}asset/img/logo.png" alt="" title="" /></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link scrollto active" href="#hero">Home</a>
                    </li>
                    <li><a class="nav-link scrollto" href="https://github.com/IndahDewi12">Contact</a></li>
                    @if (Auth::check())
                        {{-- jika sudah tampilkan menu dashboard dan logout --}}
                        <li class="nav-item">
                            <a class="nav-link scrollto" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link scrollto" href="{{ route('logout') }}">Logout</a>
                        </li>
                    @else
                        {{-- jika belum tampilkan register dan login --}}
                        <li class="nav-item">
                            <a class="nav-link scrollto" href="{{ route('register') }}">Register</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link scrollto" href="{{ route('login') }}">Login</a>
                        </li>
                    @endif

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-in">
            <h1>UJI KOMPETENSI</h1>
            <h2>Junior Web Developer</h2>
            <img src="{{ asset('') }}asset/img/hero-img.png" alt="Hero Imgs" data-aos="zoom-out"
                data-aos-delay="100">
            @if (Auth::check())
                <a href="{{ route('dashboard') }}" class="btn-get-started scrollto">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn-get-started scrollto">Login</a>
            @endif
        </div>
    </section><!-- End Hero Section -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('') }}asset/vendor/aos/aos.js"></script>
    <script src="{{ asset('') }}asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}asset/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('') }}asset/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('') }}asset/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('') }}asset/js/main.js"></script>

</body>

</html>
