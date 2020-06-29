<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{URL::asset('theme/defualt/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('theme/defualt/css/all.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('theme/defualt/css/normalize.css')}}">
<link rel="stylesheet" href="{{URL::asset('theme/defualt/css/style.css')}}">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="{{url('index')}}">store v1</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('index')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/collection.html">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">women</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">men</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  category
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="pages/categories.html">NEW</a>
                  <a class="dropdown-item" href="#">ACCESSORIES</a>
                  <a class="dropdown-item" href="#">shoes</a>
                  <a class="dropdown-item" href="#">JACKETS</a>
                  <a class="dropdown-item" href="#">PANTS</a>
                  <a class="dropdown-item" href="#">SWEATERS</a>
                  <a class="dropdown-item" href="#">POLO SHIRTS</a>
                </div>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                @csrf
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="right-box navbar-nav">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
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
        </div>
      </nav>


        <main class="py-4">
            @yield('content')
        </main>

@yield('form')

@yield('users')

        @extends('inclouds.footer')
</body>
</html>
