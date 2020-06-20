@extends('inclouds.master')

@section('content')
      <!-- start up scroll -->
  <div class="scrolling ">
    <a href="#"> <i class="fas fa-arrow-circle-up fa-2x "></i></a>
  </div>
  <!-- End up scroll -->
  <!-- start main-->
  <main>
    <!-- slider-->
    <div class="slider-box">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 " src="imgs/slider.png" alt="First slide">
            <div class="carousel-caption  d-md-block">
              <h5 class="d-none">ready to use unique items</h5>
              <div class="shop">
              <a href="{{route('collection')}}" type="button" class="btn btn-primary btn-lg"> shop now!<a>

              </div>
            </div>

          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imgs/slider2.png" alt="Second slide">
            <div class="carousel-caption d-md-block">
              <h5 class="d-none">Find products for your shop!</h5>
              <div class="shop">
                <a href="{{route('collection')}}" type="button" class="btn btn-primary btn-lg"> shop now!<a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imgs/online-shopping-m.jpg" alt="Third slide">
            <div class="carousel-caption  d-md-block">
              <h5 class="d-none">easest ways to pay!</h5>
              <div class="shop">
                <a href="{{route('collection')}}" type="button" class="btn btn-primary btn-lg"> shop now!<a>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!--end slider-->

  </main>
  <!-- end main-->
  <div class="clearfix"></div>
  <!-- sctions -->
  <section class="sections">

    <div class="row">
      <div class="col-md-3">
        <!-- first col in the scection -->
        <div class="section-box">
          <a href="#">
            <div class="section-box-sub top">
              <img src="imgs/men.webp">
              <button type="button" class="btn btn-primary btn-lg">SALE</button>
            </div>
          </a>

          <a href="#">
            <div class="section-box-sub bottom">
              <img src="imgs/new.jpg">
              <button type="button" class="btn btn-primary btn-lg">NEW</button>
            </div>
          </a>
        </div>
        <!--End  first col in the scection -->
      </div>
      <div class="col-md-3">
        <!-- 2end col in the section -->
        <div class="clearFix"></div>
        <div class="section-box ">
          <a href="#" class="sub-box women">
            <img src="imgs/women.jpg">
            <button type="button" class="btn btn-primary btn-lg">WOMEN</button>

          </a>
        </div>
        <!--End  2end col in the section -->
      </div>
      <!-- 3ed sction in the call -->
      <div class="col-md-6">

        <div class="row">
          <div class="col-md-6">
            <div class="section-box">
              <a href="#" class="sub-box">
                <img src="imgs/men.jpg">
                <button type="button" class="btn btn-primary btn-lg">men</button>

              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="section-box">
              <a href="#" class="sub-box">
                <img src="imgs/accss.jpg">
                <button type="button" class="btn btn-primary btn-lg">ACCESSORIES</button>

              </a>
            </div>
          </div>
        </div>

        <div class="section-box">
          <a href="#" class="sub-box">
            <img src="imgs/shoes.jpg">
            <button type="button" class="btn btn-primary btn-lg">shoes</button>

          </a>
        </div>

      </div>
    </div>
    <!-- End 3ed sction in the call -->

    </div>

  </section>
  <!-- End sctions -->

  <!-- start best seller section -->
  <section class="best-items">

    <h3 class="text-center">BEST SELLER</h3>
    <h4 class="text-center">Top Products This week</h4>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="best-items-box">
           <a href="pages/product.html"> <img src="imgs/clothes1.jpg"></a>
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


            <a href="pages/product.html"> <img src="imgs/clothes21.jpg"></a>
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

            <a href="pages/product.html"> <img src="imgs/clothes25.png"></a>
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
            <a href="pages/product.html"> <img src="imgs/clothes20.jpg"></a>
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

           <a href="pages/product.html"> <img src="imgs/clothes1.jpg"></a>
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
            <a href="pages/product.html"> <img src="imgs/clothes21.jpg"></a>
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

            <a href="pages/product.html"> <img src="imgs/clothes25.png"></a>
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
            <a href="pages/product.html"> <img src="imgs/clothes20.jpg"></a>
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
  <!-- End best seller section -->
  <!-- start offer section  -->
  <section class="offers">
    <div class="row">
      <div class="col-md-4">
        <div class="offers-box">
          <img src="imgs/demo01_10_501x.jpg">
          <div>
            <p class="text-center">AuTUMN 2019</p>
            <h3 class="text-center">NEW ARRIVALS</h3>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="offers-box">
          <img src="imgs/demo01_11_501x.png">

          <div>
            <p class="text-center">AuTUMN 2019</p>
            <h3 class="text-center">NEW ARRIVALS</h3>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="offers-box">
          <img src="imgs/demo01_09_501x.jpg">
          <div>
            <p class="text-center">AuTUMN 2019</p>
            <h3 class="text-center">NEW ARRIVALS</h3>
          </div>
        </div>
      </div>


    </div>
  </section>
  <!-- End offer section  -->
  <!-- start trinding section -->
  <section class="best-items">
    <h3 class="text-center">TRENDING</h3>
    <h4 class="text-center">TOP WISHES OF THIS WEEK</h4>
    <div class="container">
      <div class="row">

        <div class="col-md-3 col-sm-6">
          <div class="best-items-box">

           <a href="pages/product.html"> <img src="imgs/clothes1.jpg"></a>
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


            <a href="pages/product.html"> <img src="imgs/clothes21.jpg"></a>
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

            <a href="pages/product.html"> <img src="imgs/clothes25.png"></a>
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
            <a href="pages/product.html"> <img src="imgs/clothes20.jpg"></a>
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

           <a href="pages/product.html"> <img src="imgs/clothes1.jpg"></a>
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


            <a href="pages/product.html"> <img src="imgs/clothes21.jpg"></a>
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

            <a href="pages/product.html"> <img src="imgs/clothes25.png"></a>
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
            <a href="pages/product.html"> <img src="imgs/clothes20.jpg"></a>
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
  <!-- End  trending section -->
  <!-- follow us -->
  <section class="follow-us">
    <h2 class="text-center"> <a href="#">@_FOLLOW</a> us on</h2>
    <h3 class="text-center">INSTGRAM</h3>
    <div class="row">
      <div class="col-md-2 col-sm-6">
        <div class="follow-us-box">

          <img src="imgs/67d590d02b26fea9c8d22d49c82da697.jpg">
          <div>
            <div class="eye"><i class="far fa-eye fa-lg"></i></div>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-6">
        <div class="follow-us-box">

          <img src="imgs/5cad97ad06d18-father-and-sons-tight-shirt-male-model-ad-reactions-21-5cac439d947e3__700.jpg">
          <div>
            <div class="eye"><i class="far fa-eye fa-lg"></i></div>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-6">
        <div class="follow-us-box">

          <img src="imgs/Single.jpg">
          <div>
            <div class="eye"><i class="far fa-eye fa-lg"></i></div>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-6">
        <div class="follow-us-box">


          <img src="imgs/864add44bc74051538efd201cc85d55c--urban-style-style-clothes.jpg">
          <div>
            <div class="eye"><i class="far fa-eye fa-lg"></i></div>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-6">
        <div class="follow-us-box">

          <img src="imgs/rBVaV1xwt02AVJZtAAE88Da_KFQ699.jpg">
          <div>
            <div class="eye"><i class="far fa-eye fa-lg"></i></div>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-6">
        <div class="follow-us-box">


          <img src="imgs/demo01_10_501x.jpg">
          <div>
            <div class="eye"><i class="far fa-eye fa-lg"></i></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="servicse-box">
            <span><i class="fas fa-headset fa-3x"></i></span>
            <div>

              <h5 class="text-left"><a href="#">SUPPORT 24/7</a> </h5>
              <p> Contact Us 24 hours a day, 7 days in a week</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="servicse-box">
            <span><i class="fas fa-undo-alt fa-3x"></i></span>
            <div>

              <h5 class="text-left"><a href="#">30 Days RETURN</a> </h5>
              <p> Simply return it within 24 days for an exchange.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="servicse-box">
            <span><i class="fas fa-shipping-fast fa-3x"></i></span>
            <div>

              <h5 class="text-left"><a href="#">SUPPORT 24/7</a> </h5>
              <p> Free shipping on all US order or order above $99</p>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>
  </section>
  <!-- follow us -->
  <!-- keep in touch -->
  <section class="touch">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="touch-box">
            BE IN TOUCH WITH US:
          </div>
        </div>
        <div class="col-md-4">
          <div class="touch-box">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Enter Your E-mail" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">join us</button>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="touch-box">
            <span>
              <i class="fab fa-instagram-square "></i>
            </span>
            <span>
              <i class="fab fa-google-plus-g "></i>
            </span>
            <span>
              <i class="fab fa-facebook "></i>
            </span>
            <span>
              <i class="fab fa-twitter "></i>
            </span>
            <span>
              <i class="fab fa-linkedin-in "></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end keep in touch -->
@endsection
