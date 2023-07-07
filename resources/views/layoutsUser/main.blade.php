{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
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

            .links > a {
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

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
</html> --}}

<!DOCTYPE html>
<html lang="en" style=" scroll-behavior: smooth;">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Saya Bagas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta name="description" content="Saya Bagas"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons%7CPoppins:300,300i,400,400i,600,600i%7CPlayfair+Display:400i"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css"/>
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
    <!-- ICONS-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/content/apple-icon-57x57.png') }} "/>
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/content/apple-icon-60x60.png') }} "/>
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/content/apple-icon-72x72.png') }}"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/content/apple-icon-76x76.png') }} "/>
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/content/apple-icon-114x114.png') }}"/>
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/content/apple-icon-120x120.png') }} "/>
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/content/apple-icon-144x144.png') }}"/>
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/content/apple-icon-152x152.png') }} "/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/content/apple-icon-180x180.png') }} "/>
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/content/android-icon-192x192.png') }} "/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/content/favicon-32x32.png') }} "/>
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/content/favicon-96x96.png') }} "/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/content/favicon-16x16.png') }} "/>
    <link rel="manifest" href="{{ asset('img/content/manifest.json') }} "/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="msapplication-TileImage" content="{{ asset('img/content/ms-icon-144x144.png') }} "/>
    <meta name="theme-color" content="#ffffff"/>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/content/favicon.ico') }} "/>
  </head>
  <body>
    @yield('content')
  </body>
</html>