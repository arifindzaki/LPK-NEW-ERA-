@extends('layout.main')

@section('container')
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Profile | LPK IMIAH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<style>
body, html {
    margin: 0;
    padding: 0;
    height: 100%;
}

.landing-page {
    background-color: #3498db; /* warna background biru */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* mengisi seluruh tinggi viewport */
}

.content {
    text-align: center;
    color: white;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #2ecc71;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
}

.btn:hover {
    background-color: #27ae60;
}
.card {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center; /* Menengahkan judul pada card */
            margin-bottom: 20px; /* Jarak antara card */
        }

        .card-title {
            font-size: 1.25rem; /* Ukuran font judul */
        }

        .row {
            justify-content: flex-end; /* Menyusun card ke kanan */
        }

        @media (min-width: 768px) {
            .row {
                justify-content: center;
            }
        }
</style>
    <body>
<div class="landing-page">
        <div class="content">
            <h1>Selamat Datang di Landing Page</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="#" class="btn">Mulai Sekarang</a>
        </div>
    </div>
    <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p></div>
            </div>
            <div class="row gx-4 gx-lg-5">
    <div class="col-12">
        <h1 class="text-center">Pelatihan</h1>
    </div>

    <div class="col-md-4 mb-5">
        <div class="card h-100">
            <img src="img/about.jpg" class="card-img-top" alt="Pelatihan Desain Grafis">
            <div class="card-body">
                <h2 class="card-title">Pelatihan Komputer</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
            </div>
            <div class="card-footer"><a class="btn btn-primary btn-sm" href="isipelatihan.php">More Info</a></div>
        </div>
    </div>
    <div class="col-md-4 mb-5">
        <div class="card h-100">
            <img src="img/about.jpg" class="card-img-top" alt="Pelatihan Desain Grafis">
            <div class="card-body">
                <h2 class="card-title">Pelatihan Desain Grafis</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
            </div>
            <div class="card-footer"><a class="btn btn-primary btn-sm" href="isipelatihan.php">More Info</a></div>
        </div>
    </div>
    <div class="col-md-4 mb-5">
        <div class="card h-100">
            <img src="img/about.jpg" class="card-img-top" alt="Pelatihan Desain Grafis">
            <div class="card-body">
                <h2 class="card-title">Pelatihan pemrogaman</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
            </div>
            <div class="card-footer"><a class="btn btn-primary btn-sm" href="isipelatihan.php">More Info</a></div>
        </div>
    </div>
    <div class="col-md-4 mb-5">
        <div class="card h-100">
            <img src="img/about.jpg" class="card-img-top" alt="Pelatihan Desain Grafis">
            <div class="card-body">
                <h2 class="card-title">Pelatihan Bahasa Inggris</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
            </div>
            <div class="card-footer"><a class="btn btn-primary btn-sm" href="isipelatihan.php">More Info</a></div>
        </div>
    </div>
    <div class="col-md-4 mb-5">
        <div class="card h-100">
            <img src="img/about.jpg" class="card-img-top" alt="Pelatihan Desain Grafis">
            <div class="card-body">
                <h2 class="card-title">Pelatihan Kewirausahaan</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
            </div>
            <div class="card-footer"><a class="btn btn-primary btn-sm" href="isipelatihan.php">More Info</a></div>
        </div>
    </div>
    <div class="col-12">
        <h1 class="text-center">Fasilitas</h1>
    </div>
    <div class="col-12">
        <h1 class="text-center">Galeri</h1>
    </div>
    <div class="col-12">
        <h1 class="text-center">Kontak</h1>
    </div>
  
</body>
@endsection