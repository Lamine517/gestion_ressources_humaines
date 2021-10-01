<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/css/all.css') }}" rel="stylesheet">
 
    <!-- jquery -->
    <script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('#icon').click(function(){
                $('ul').toggleClass('show');
            });
        });
    </script>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div id="app">
    <header id="mon-header">
            <div class="mon-container">
                <nav class="mon-header-content">
                    <label for="" class="title-logo">GRH</label>

                    <!-- menu -->
                    <ul class="main-menu">
                        
                        <li><a href="{{ url('/user') }}" class="mon-menu actived">Accueil</a></li>
                        <li><a href="{{ route('user.employes.create') }}" class="mon-menu">Recrutement</a></li>
                        <li><a href="#" class="mon-menu">Rémunération</a></li>
                        <li><a href="#" class="mon-menu">Gestion des Carrières</a></li>
                        <li><a href="#" class="mon-menu">Evaluations</a></li>
                        <li><a href="#" class="mon-menu">Formation</a></li>
                        
                       
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                
                            @endif
                        @else
                       
                       
                        <div class="dropdown">
                            <li class="dropbtn">{{ Auth::user()->name }}</li>
                            <div class="dropdown-content">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                          </div>
                       
                            
                            
                        @endguest
                    </ul>
                    <label for="" id="icon"> <i class="fa fa-bars"></i></label>
                    
                </nav>
            </div>
        </header>

        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
