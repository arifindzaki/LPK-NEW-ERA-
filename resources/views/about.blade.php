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
        <div class="container">    
            <div class="text-center pt-4">
                <h2><strong>LPK IMIAH</strong></h2>
                <img src="img/about.jpg" class="img-thumbnail m-3" style="max-width: 70vw; border-radius: 25px;">
            </div>
            <p style="text-align: justify;" class="lead mt-2 mb-5">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum repudiandae, sunt fugit ab et a soluta enim ipsam officiis, amet cumque dolore exercitationem, laborum fuga. Enim aspernatur architecto nobis quae!
                Corrupti minima totam perferendis! Natus veniam, in possimus minus enim tempore nisi numquam, consectetur atque nihil libero vel eveniet eius dolores officiis cum necessitatibus praesentium magnam dolorem reiciendis nemo sapiente.
                Voluptatem consequuntur ipsum aperiam suscipit quos omnis sit? Itaque nihil illo perspiciatis esse voluptatibus, ratione ut iste quia dolores explicabo nulla harum amet pariatur earum similique molestias a delectus praesentium?
                Voluptatibus ratione natus molestias et tempora qui vitae. Iusto assumenda, dolores excepturi nemo deserunt porro minus quibusdam deleniti blanditiis qui itaque facere cupiditate distinctio enim pariatur omnis quasi. Animi, rem?
                Dolorum maiores molestias optio minus officia sint necessitatibus temporibus fuga enim obcaecati debitis nihil, assumenda quos nam, ab expedita incidunt! Quibusdam non quis accusantium, aperiam placeat veritatis pariatur rem itaque?
            </p>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>
@endsection