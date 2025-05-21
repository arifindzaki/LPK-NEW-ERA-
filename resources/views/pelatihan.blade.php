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

    <style>
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

</head>
<body>
    <section id="portfolio" class="portfolio">
<div class="container" data-aos="fade-up" data-aos-duration="1000">
    <h2 style="text-align: center">Pelatihan</h2>
<div class="row gx-4 gx-lg-5">
    <div class="col-12">
        {{-- <h1 class="text-center">Pelatihan</h1> --}}
    </div>
    
    @foreach ($dataPelatihan as $model)
    <div class="col-md-4 mb-5">
        <div class="card h-100">
            <img src="{{  url('') }}/img/gambar/{{ $model->image }}" class="card-img-top" alt="Pelatihan Desain Grafis">
            <div class="card-body">
                <h2 class="card-title">{{ $model->judul }}</h2>
                <p class="card-text">{{ $model->deskripsi }}</p>
            </div>
            <div class="card-footer"><a class="btn btn-primary btn-sm" href="https://api.whatsapp.com/send?phone=+{{$model->phone}}&text=Hallo%20saya%20ingin%20bergabung%20dengan%20lpk%20ilmiah%20sidoarjo%2C%20tolong%20berikan%20informasi%20mengenai%20program%20yang%20ada{{$model->judul}}">More Info</a></div>
        </div>
    </div>
    @endforeach


</div>
</div>
    </section>
    <!-- Tambahkan card lainnya sesuai kebutuhan -->

</div>

@endsection
