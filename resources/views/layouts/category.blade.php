@extends('inclouds.master')

@section('content')
<!-- sub nav liks -->
<section class="links">
    <div class="container">
    <a href="{{route('index')}}"> store</a><span>></span>
      <a href="{{route('collection')}}"> collection</a><span>></span>
    <a href="{{route('category')}}"> category</a><span>></span>
      <a href=""> product</a><span></span>
    </div>
  </section>
  <!-- End nav liks -->
<!-- start categories section  -->
<section class="categories">

    <h3 class="text-center">BEST SELLER</h3>
    <h4 class="text-center">Top Products This week</h4>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="best-items-box">
              <a href="{{route('product')}}">
            <img src="imgs/clothes1.jpg">
              </a>
            <div class="like">
              <i class="far fa-heart fa-lg"></i>
              <i class="far fa-eye fa-lg"></i>
            </div>
            <div class=" container-detils">
              <div class="detils">
                <p class=" text-center item-name">new</p>
                <p class="text-center">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>

                </p>
                <button type="button" class="btn btn-primary"><i class="fas fa-cart-plus"></i> | add to cart</button>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="best-items-box">
            <a href="{{route('product')}}">
            <img src="imgs/clothes21.jpg">
          </a>
            <div class="like">
              <i class="fas fa-heart fa-lg"></i>
              <i class="far fa-eye fa-lg"></i>
            </div>
            <div class=" container-detils">
              <div class="detils">
                <p class=" text-center item-name">new</p>
                <p class="text-center">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </p>
                <button type="button" class="btn btn-primary"><i class="fas fa-cart-plus"></i> | add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="best-items-box">
            <a href="{{route('product')}}">
            <img src="imgs/clothes25.png">
            </a>
            <div class="like">
              <i class="far fa-heart fa-lg"></i>
              <i class="far fa-eye fa-lg"></i>
            </div>
            <div class=" container-detils">
              <div class="detils">
                <p class=" text-center item-name">new</p>
                <p class="text-center">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                </p>
                <button type="button" class="btn btn-primary"><i class="fas fa-cart-plus"></i> | add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="best-items-box">
            <a href="{{route('product')}}">
            <img src="imgs/clothes20.jpg">
            </a>
            <div class="like">
              <i class="far fa-heart fa-lg"></i>
              <i class="far fa-eye fa-lg"></i>
            </div>
            <div class=" container-detils">
              <div class="detils">
                <p class=" text-center item-name">new</p>
                <p class="text-center">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                </p>
                <button type="button" class="btn btn-primary"><i class="fas fa-cart-plus"></i> | add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        <div class="col-md-3 col-sm-6">
          <div class="best-items-box">
            <a href="{{route('product')}}">
            <img src="imgs/clothes1.jpg">
          </a>
            <div class="like">
              <i class="far fa-heart fa-lg"></i>
              <i class="far fa-eye fa-lg"></i>
            </div>
            <div class=" container-detils">
              <div class="detils">
                <p class=" text-center item-name">new</p>
                <p class="text-center">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>

                </p>
                <button type="button" class="btn btn-primary"><i class="fas fa-cart-plus"></i> | add to cart</button>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="best-items-box">
            <a href="{{route('product')}}">
            <img src="imgs/clothes21.jpg">
            </a>
            <div class="like">
              <i class="far fa-heart fa-lg"></i>
              <i class="far fa-eye fa-lg"></i>
            </div>
            <div class=" container-detils">
              <div class="detils">
                <p class=" text-center item-name">new</p>
                <p class="text-center">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </p>
                <button type="button" class="btn btn-primary"><i class="fas fa-cart-plus"></i> | add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="best-items-box">
            <a href="{{route('product')}}">
            <img src="imgs/clothes25.png">
            </a>
            <div class="like">
              <i class="far fa-heart fa-lg"></i>
              <i class="far fa-eye fa-lg"></i>
            </div>
            <div class=" container-detils">
              <div class="detils">
                <p class=" text-center item-name">new</p>
                <p class="text-center">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                </p>
                <button type="button" class="btn btn-primary"><i class="fas fa-cart-plus"></i> | add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="best-items-box">
            <a href="{{route('product')}}">
            <img src="imgs/clothes20.jpg">
            </a>
            <div class="like">
              <i class="far fa-heart fa-lg"></i>
              <i class="far fa-eye fa-lg"></i>
            </div>
            <div class=" container-detils">
              <div class="detils">
                <p class=" text-center item-name">new</p>
                <p class="text-center">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                </p>
                <button type="button" class="btn btn-primary"><i class="fas fa-cart-plus"></i> | add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<br>
<!-- End categories section  -->


@endsection
