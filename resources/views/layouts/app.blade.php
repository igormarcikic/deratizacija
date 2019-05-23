<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo-deratizacija_novi_sad.png') }}" class="wow bounceInDown delay-0.5">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <a class="nav-link" href="onama">O Nama</a>
                        <a class="nav-link" href="cenovnik">Cenovnik</a>
                        <a class="nav-link" href="contact">Kontakt</a>
                        
                        <button type="button" class="btn btn-outline-danger">Pozovite Nas!</button>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
        <footer>
            <div class="container-fluid bg-dark text-white p-5 ">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-4">
                            <p>Ovo je nasa adresa:</p>
                            <p>Neznana</p>
                        </div>
                        <div class="col-md-4">
                            <p>Ovo je nas telefon:</p>
                            <p>064/000-00-00</p>
                        </div>
                        <div class="col-md-4">
                            <p>Ovo je nas email:</p>
                            <p>nesto@gmail.com</p>
                        </div>
                    </div>
                    <p>Copyright @ 2019. Deratizacija.com</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{asset ('js/navbar-up.js')}}"></script>
    <script>
        new WOW().init();
        
    </script>
</body>

</html>