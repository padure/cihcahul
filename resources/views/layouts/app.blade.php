<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    
    <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/summernote-bs4.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote-bs4.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        @guest
            @else
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/admin') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Acasa<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/admin/sidebar') }}">Sidebar</a></li>
                                    <li><a href="{{ url('/admin/parteneri') }}">Parteneri</a></li>
                                    <li><a href="{{ url('/admin/footer') }}">Info footer</a></li>
                                </ul>
                        </li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  <span class="glyphicon glyphicon-education" aria-hidden="true"></span> Specialitati<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/admin/specialitati') }}">List Specialitati</a></li>
                                    <li><a href="#">Adaugare Specialitati</a></li>
                                </ul>
                        </li>
                         <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Admitere<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/admin/regulament') }}">Regulament</a></li>
                                    <li><a href="#">Rezultate</a></li>  
                                </ul>
                        </li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Evenimente<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{url('/admin/evenimente')}}">List Evenimente</a></li>
                                    <li><a href="{{ url('/admin/creare')}}">Creare Evenimente</a></li>
                                </ul>
                        </li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Despre<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('admin/catedre') }}">Catedre</a></li>
                                    <li><a href="#">Nr. Elevi</a></li>
                                    <li><a href="#">Administratie</a></li>
                                    <li><a href="#">Add Administratie</a></li>
                                </ul>
                        </li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  <span class="glyphicon glyphicon-tags" aria-hidden="true"></span> Avize<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">List Avize</a></li>
                                    <li><a href="#">Creare Aviz</a></li>
                                </ul>
                        </li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  <span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Galerie<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{url('admin/galerie') }}">List Galerie</a></li>
                                    <li><a href="#">Add imagine</a></li>
                                </ul>
                        </li>
                        <li><a href="#"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Meniu</a></li>
                         <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Contacte<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Detalii</a></li>
                                    <li><a href="#">Ore de lucru</a></li>
                                    <li><a href="#">Mesaje</a></li>
                                </ul>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        
                    </ul>
                </div>
                    
            </div>
        </nav>
        @endguest
        @yield('content')
    </div>

    <!-- Scripts -->
    <!--script src="{{ asset('js/app.js') }}"></script-->
</body>
</html>
