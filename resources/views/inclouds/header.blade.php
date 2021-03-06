<?php use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\model\Category as ModelCategory;
    $category = ModelCategory::get();
?>

<!doctype html>
<html>
<head>
  <title>
    store v1
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{URL::asset('theme/defualt/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('theme/defualt/css/all.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('theme/defualt/css/normalize.css')}}">
<link rel="stylesheet" href="{{URL::asset('theme/defualt/css/style.css')}}">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body id="page-top">
<header>
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
              <a class="nav-link" href="{{url('index')}}"> home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('collection')}}">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('category')}}">NEW</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                category
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">


                @foreach ($category as $categories)
              <a class="dropdown-item" href="#">{{$categories['name']}}</a>
              @endforeach

              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
              @csrf
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <ul class="right-box navbar-nav">
            @auth
                         <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="far fa-user"></i>

                         <span>{{auth()->user()->name}}</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Your profile </a>
                  @if(Auth()->user()->user_group === 1)
                  <a class="dropdown-item" href="{{url('admin/index')}}">Your Dashboard </a>
                  @endif
                  <a class="dropdown-item" href="#">settings </a>

                  <a class="dropdown-item" href="{{ route('logout')}}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
                  >Logout </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

              </div>
            </li>

            @endauth
            @guest
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="far fa-user"></i>
                           <span>guest</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('login')}}">sign in </a>
                    <a class="dropdown-item" href="{{url('register')}}">register</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">FORGET PASSWORD? </a>
                </div>
              </li>
            @endguest
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-cogs"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">language</a>
                <a class="dropdown-item" href="#">site color</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
