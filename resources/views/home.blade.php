<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahabhal Blood foundation</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
</head>

<body>
    <div class="container-fluid d-flex flex-column min-vh-100">
        <header class="mb-3">
            <h1>{{$language['english']['title']}}</h1>
            <p>{{$language['english']['title_discription']}}</p>
            <img class="header-image img-fluid" src="{{ asset('storage/IMG_8615-removebg-preview.png') }}" alt="Logo">
        </header>

        <section class="services mb-3">
            <h2 class="text-center">{{$language['english']['out_services']}}</h2>
            <div class="row justify-content-center">
                @foreach($language['english']['services'] as $service)
                <div class="col-12 col-sm-6 col-md-4 mb-3" onclick="window.location.href='{{ addslashes($service['url']) }}'">
                    <div class="card text-center btn custom-btn">
                        <div class="card-body">
                            <h3>{{ $service['title'] }}</h3>
                            <span>{{ $service['description'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <footer>
            {!!$language['english']['footer']!!}
        </footer>
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

<style>
    header {
        background: gray;
        color: #fff;
        text-align: center;
        padding: 1rem;
    }

    footer {
        background: gray;
        color: #fff;
        text-align: center;
        padding: 0.5rem;
        font-size: 0.8rem;
    }

    .custom-btn {
        background-color: gray;
        /* Bootstrap primary color */
        color: white;
        /* Text color */
        transition: background-color 0.3s;
        /* Smooth transition */
    }

    .custom-btn:hover {
        background-color: gray;
        /* Darker shade for hover effect */
        color: white;
        /* Keep text color */
    }

    .header-image {
        max-height: 500px;
        /* Set the maximum height you want */
        width: auto;
        /* Maintain aspect ratio */
    }

    footer {
        /* background: #f1f1f1; Example background color */
        text-align: center;
        padding: 10px 0;
    }
</style>