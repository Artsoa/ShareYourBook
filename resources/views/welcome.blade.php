<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <header>
            <div class="row">
                <div class="col-md-2">
                    <img src="{{ asset('images/shareyourbook.png') }}" height="130" width="130" alt="">
                </div>
                <div class="col-md-2">
                    <p class="text-center">Tout seul on va vite, à deux on va loin</p>
                </div>
                <div class="col-md-4">
                    @if (Route::has('login'))
                    <div class=" ">
                        @auth
                        <a href="{{ url('/home') }}" class="btn btn-outline-primary loginbtn" role="button">Home</a>
                        @else
                        <a href="{{ route('login') }}" class="btn btn-outline-primary loginbtn rounded"
                            role="button">Login</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-primary rounded"
                            role="button">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif

                </div>
                <div class="col-md-2">
                    <!-- Search form -->
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </div>
            </div>
        </header>
    </div>
    <div class="flex-center position-ref full-height">


        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>
</body>

</html>
