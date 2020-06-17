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
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">store v1</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <ul class="right-box navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="far fa-user"></i>
                <span></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="login.php">sign in </a>
                  <a class="dropdown-item" href="#">register</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">FORGET PASSWORD? </a>
              </div>
            </li>
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