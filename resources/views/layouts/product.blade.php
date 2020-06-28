@extends('inclouds.master')
@section('content')
 <!-- sub nav liks -->
 <section class="links">
    <div class="container">
    <a href="{{url('admin/login')}}"> store</a><span>></span>
    <a href="{{route('collection')}}"> collection</a><span>></span>
    <a href="{{route('category')}}"> category</a><span>></span>
      <a href="#"> product</a><span></span>
    </div>
  </section>
  <!-- End nav liks -->

  <!-- start product -->
  <section class="product">
      <div class="container">
          <div class="row">
              <div class="col-md-4 d-none">

                  <div class="product-box">
                      <!-- adrtsment here -->
                      <div class="advr">
                          <img src="imgs/ef2075_adidas-solecourt-boost-women-s-tennis-shoes-glow-green-ftwr-white-grey-one-f17-m.jpg" alt="advrtsment">
                      </div>
                       <!-- end advrtsment -->
                       <div class="Special-products">
                           <h3 class="text-center">Special Products  </h3>
                           <div class="special-box">
                               <div class="spcail-imge">
                                   <a href="#">
                                   <img src="imgs/A1_2.jpg" alt="">
                                 </a>
                               </div>
                               <div class="spcail-name">
                                 <p><a href="#">Special Products name </a></p>
                                 <p>$350E </p>
                               </div>
                           </div>
                           <div class="special-box">
                               <div class="spcail-imge">
                                   <a href="#">
                                   <img src="imgs/thumb.jpg" alt="">
                                 </a>
                               </div>
                               <div class="spcail-name">
                                 <p><a href="#">Special Products name </a></p>
                                 <p>$350E </p>
                               </div>
                           </div>
                           <div class="special-box">
                               <div class="spcail-imge">
                                   <a href="#">
                                   <img src="imgs/red-high-neck-maxi-dress.jpg" alt="">
                                 </a>
                               </div>
                               <div class="spcail-name">
                                 <p><a href="#">Special Products name </a></p>
                                 <p>$350E </p>
                               </div>
                           </div>

                       </div>
                        <!-- adrtsment here -->
                      <div class="advr">
                         <img src="imgs/ef2075_adidas-solecourt-boost-women-s-tennis-shoes-glow-green-ftwr-white-grey-one-f17-m.jpg" alt="advrtsment">
                     </div>
                      <!-- end advrtsment -->
                     </div>
          </div>
          <div class="col-md-4">
             <div class="product-box">
               <div class="big-img">
                 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                   <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                       <img src="imgs/thumb.jpg" class="d-block w-100" alt="...">
                     </li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1">
                       <img src="imgs/thumb.jpg" class="d-block w-100" alt="...">
                     </li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2">
                       <img src="imgs/thumb.jpg" class="d-block w-100" alt="...">
                     </li>
                   </ol>
                   <div class="carousel-inner">
                     <div class="carousel-item active">
                       <img src="imgs/thumb.jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                       <img src="imgs/thumb.jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                       <img src="imgs/thumb.jpg" class="d-block w-100" alt="...">
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

             </div>
          </div>
          
         <div class="col-md-4">
             <div class="product-box">
               <h3 class="product-name text-center">shoes sparo</h3>

               <p class="discription text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
               </p>
               <div class="info">
                 <p>price <span>$50.00</span></p>
               <p>date <span>2020</span></p>
               <p>made in  <span>EGYPT</span></p>
               <p>CATEGORY  <span>SHOES</span></p>

             </div>
               <form action="#" class="form-inline">
                 <label class="my-1 mr-2" for="inlineFormCustomSelectPref">size</label>
                 <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                   <option selected value="1">s</option>
                   <option value="2">M..</option>
                   <option value="3">L..</option>
                   <option value="3">XL..</option>
                 </select>
                 <br>
                 <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Quantity</label>
                 <input class="custom-select my-1 mr-sm-2 Quantity" type="number" name="" id="inlineFormCustomSelectPref">
                 <button type="button" class="btn btn-primary"><i class="fas fa-cart-plus"></i> | add to cart</button>
                 <button type="button" class="btn btn-primary"><i class="fas fa-credit-card"></i> | BUY NOW</button>
               </form>
             </div>
         </div>
      </div>
      </div>
  </section>
  <!-- end product -->

@endsection
