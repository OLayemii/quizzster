@extends('layouts.app')

@section('content')
    <div class="container-fluid wrapper p-0 w-100">
        <header id="header" class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light navbar-quizzster">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
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
                    </ul>
                </div>
            </nav>
        </header>
        <main id="main" class="h-100">
            <div class="main-intro w-100 p-0">
                <div class="d-flex flex-column justify-content-center text-center h-100">
                   <div class="text">
                       <h2>QUIZZSTER</h2>
                       <h6>Create and manage quizzes swiftly and effortlessly.</h6>
                   </div>
                </div>
            </div>
            <div class="h-100 d-flex flex-column justify-content-between flex-no-wrap">
                <div class="main-contents text-center pt-3 w-75 mx-auto">
                    <h2>Start Creating Quizzess and Tracking Scores <br> In Few Easy Steps</h2>
                    <span>Quizzster enables admins to create, manage and track scores of created quizes <br>
                        in a very easy way, quiz scores can also be exported out of the app.
                    </span>
                    <div class="pt-3">
                        <a href="{{ url('/register') }}" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
                <div>
                    <div class="row p-0 my-5 m-0" style="color: gray">
                        <div class="col-md-3 col-6 col-sm-6">
                            <div class="d-flex flex-column text-center">
                                <i class="fa fa-pencil fa-4x"></i>
                                <div class="hello">
                                    <strong>Create an account</strong>
                                </div>
                                <span>Register an account to gain full access to the site</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 col-sm-6">
                            <div class="d-flex flex-column text-center">
                                <i class="fa fa-lock fa-4x"></i>
                                <div class="hello">
                                    <strong>Login to your account</strong>
                                </div>
                                <span>Supply credentials to login if you already own an account.</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 col-sm-6">
                            <div class="d-flex flex-column text-center">
                                <i class="fa fa-cogs fa-4x"></i>
                                <div class="hello">
                                    <strong>Administrator's Portal</strong>
                                </div>
                                <span>Login to your admin account to manage quizzes</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 col-sm-6">
                            <div class="d-flex flex-column text-center">
                                <i class="fa fa-file fa-4x"></i>
                                <div class="hello">
                                    <strong>Generate Report</strong>
                                </div>
                                <span>View quizzstar inventory and details of operation</span>
                            </div>
                        </div>
                    </div>
                    <footer>Made with Love</footer>
                </div>
            </div>
        </main>
    </div>
@endsection



                {{--  <div class="row">
                    <div class="col-md-3 col-6">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa fa-lock fa-5x"></i>
                            <span>Login with credentials</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa fa-lock fa-2x"></i>
                            <span>Login with credentials</span>
                        </div>                        
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa fa-lock fa-2x"></i>
                            <span>Login with credentials</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa fa-lock fa-2x"></i>
                            <span>Login with credentials</span>
                        </div>
                    </div>
                </div>  --}}



{{--  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>  --}}
