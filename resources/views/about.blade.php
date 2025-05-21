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
<body>
    <style>
        .nav .nav-item .nav-link{
            color: #fff;
        }
        .menu{
            margin-right: 3vw;
            letter-spacing: 1px;
        }
    </style>
    <main>
        <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">    
            <div class="text-center pt-4">
                <h2><strong>LPK IMIAH</strong></h2>
                <img src="img/about.jpg" class="img-thumbnail m-3" style="max-width: 70vw; border-radius: 25px;">
            </div>
            <p style="text-align: justify;" class="lead mt-2 mb-5">
                LPK Ilmiah adalah lembaga pendidikan dan kursus. Berlokasi di Perum Griya Krian Residence Blok Anggrek G 11 Krian, Kecamatan Krian, Kabupaten Sidoarjo. LPK Ilmiah ini menyediakan 5 program yakni kewirausahaan, bahasa Inggris, pemrograman, komputer, dan desain komunikasi visual (DKV). Melalui program tersebut LPK Ilmiah bertujuan Untuk meningkatkan ketrampilan dalam bidang tersebut serta memberikan kesiapan kerja secara professional. LPK Ilmiah juga memberikan perhatian khusus terhadap pengembangan soft skills. Benefit yang didapat selain pembekalan soft skill yang dibutuhkan di dunia kerja anda juga akan mendapatkan sertifikat mengikuti pelatihan di LPK ILMIAH.</p>
        </div>
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>
@endsection