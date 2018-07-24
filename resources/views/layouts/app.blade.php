<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{route('home')}}">
                    <img src="http://via.placeholder.com/150x100" alt="Blog logo">
                </a>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="navbar-menu">
                <div class="navbar-start">
                    <a href="" class="navbar-item">Learn</a>
                    <a href="" class="navbar-item">Discuss</a>
                    <a href="" class="navbar-item">Share</a>
                </div>
                <div class="navbar-end">
                    @if (Auth::guest())
                        <a href="{{route('login')}}" class="navbar-item">Login</a>
                        <a href="{{route('register')}}" class="navbar-item">Register</a>
                    @else
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link" href="#"> {{ Auth::user()->name }}</a>
                            <div class="navbar-dropdown is-boxed navdropDownOv">
                                <a class="navbar-item" href="#"><i class="fa fa-fw fa-user-circle-o"></i>Profile</a>
                                <a class="navbar-item" href="#"><i class="fa fa-fw fa-bell"></i>Notifications</a>
                                <a class="navbar-item" href="#"><i class="fa fa-fw fa-cog"></i>Settings</a>
                                <hr class="navbar-divider">
                                <a class="navbar-item is-active" href="#"><i class="fa fa-fw fa-sign-out"></i>log out</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>
