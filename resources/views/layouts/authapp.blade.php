<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid wrapper p-0 w-100">
        <div class="d-flex adj-flex">
            <div class="navbar-quizzster-darkblue" style="height: 56px;">a</div>
            <div class="navbar-quizzster-blue">
                <nav class="navbar navbar-expand">
                    <a class="navbar-brand" href="#">
                        <i class="fa fa-bars"></i>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    @if (Route::has('register'))
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-envelope"></i>
                                        <span class="badge badge-success">4</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-bell"></i>
                                        <span class="badge badge-warning">4</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-flag"></i>
                                        <span class="badge badge-danger">4</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-cogs"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="d-flex adj-flex">
            <div class="navbar-quizzster-dark" style="height: auto;">
                <div class="user-details d-flex p-3 justify-content-between">
                    <div class="user-img">
                         <img src="https://adminlte.io/themes/AdminLTE/dist/img/user2-160x160.jpg" class="img-rounded img-fluid img-thumbnail" alt=""> 
                    </div>
                    <div class="usrname">
                        <span class="text-white">
                            <strong> {{ Auth::user()->name }}</strong>
                            <br>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <ul class="list-group">
                    @section('menu')
                        <li class="list-group-item p-0">
                            <div class="w-100 p-0">
                                <a href="{{ route('profile') }}">
                                    <i class="fa fa-user mr-3"></i>
                                    <span>Profile</span>
                                </a>
                            </div>
                        </li>
                        <li class="list-group-item p-0">
                            <div class="w-100 p-0">
                                <a href="">
                                    <i class="fa fa-file mr-3"></i>
                                    <span> Records</span>
                                </a>
                            </div>
                        </li>
                        <li class="list-group-item p-0">
                            <div class="w-100 p-0">
                                <a href="{{ route('quizcode') }}">
                                    <i class="fa fa-laptop mr-3"></i>
                                    <span>New Quiz</span>
                                </a>
                            </div>
                        </li>
                        <li class="list-group-item p-0">
                            <div class="w-100 p-0">
                                <a href="">
                                    <i class="fa fa-cogs mr-3"></i>
                                    <span>Settings</span>
                                </a>
                            </div>
                        </li>
                        <li class="list-group-item p-0">
                            <div class="w-100 p-0">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-lock mr-4"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    @show
                </ul>
            </div>
            <div style="flex-grow: 1" id="maincontent">
                @section('content')
                @show
            </div>
        </div>
    </div>
    @yield('script') 
</body>
</html>