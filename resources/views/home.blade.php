<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
    <!-- Favicons -->
    <link href="assets_2/img/logo_lpk.png" rel="icon">
    <link href="assets_2/img/logo_lpk.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets_2/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets_2/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets_2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets_2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets_2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets_2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets_2/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets_2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets_2/css/style.css" rel="stylesheet">

    <title>Halaman | {{ $title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header id="header" class="fixed-top d-flex align-items-center  header-transparent "style="background-color: #0E6AC7">
        <div class="container d-flex align-items-center justify-content-between">
            <img src="img/logo_lpk.png" alt="logo lpk" width="34" height="36">
        <div class="container ">
            <a class="navbar-brand" href="#">
                
                <a class="navbar-brand" href="/"><b style="font-size: 1.5em; color:white">LPK IMIAH</b></a>
            </a>
            
        </div>
        
        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto {{ ($title === "home" ? 'active' : '') }}" href="/">Home</a></li>
            <li><a class="nav-link {{ ($title === "about" ? 'active' : '') }}" href="/about">Profile</a></li>
            <li><a class="nav-link {{ ($title === "pelatihan" ? 'active' : '') }}" href="/pelatihan">Pelatihan</a></li>
            <li><a class="nav-link {{ ($title === "alumni" ? 'active' : '') }}" href="/alumni">Alumni</a></li>
            <li><a class="nav-link {{ ($title === "galeri" ? 'active' : '') }}" href="/galeri">Galery</a></li>
            <li><a class="nav-link {{ ($title === "contact" ? 'active' : '') }}" href="/contact">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        </div>
    </header>

        <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>LPK ILMIAH</span></h2>
            <p class="animate__animated fanimate__adeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item ">
            <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Benefit yang akan didapat!</h2>
            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Bermacam Pelatihan di LPK IMLIAH</h2>
            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>

        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
        </svg>

    </section><!-- End Hero -->

    <div class="container mt-4">
        <div class="landing-page">
            <div class="content">
                <h4>Latar Belakang</h4>
                <h1 style="color: rgb(58, 58, 243)">Selamat Datang di LPK ILMIAH</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae tempora tenetur sunt animi maxime rem exercitationem ipsa in repudiandae. Perspiciatis, labore alias quo aperiam nam illum ullam ratione! Excepturi, qui?Nesciunt, beatae suscipit. Dignissimos voluptatibus, asperiores esse impedit labore aut repellat quia at, eius debitis ab blanditiis iste vero nam ea enim aliquam, dolore exercitationem excepturi eos iure modi. Reprehenderit.</p>
            </div>
        </div>
    </div>


    <footer class="text-white mt-3 navbar-dark " style="background-color: #0E6AC7" >
        <div class="container">
            <div class="row pt-3">
                <div class="col text-center">
                    <p>Copyright &copy; 2024 : LPK IMIAH - All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Vendor JS Files -->
    <script src="assets_2/vendor/aos/aos.js"></script>
    <script src="assets_2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets_2/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets_2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets_2/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets_2/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets_2/js/main.js"></script>
</body>
</html>