@extends('admin.inclouds.masterAdmin')

@section('content')
@section('title',' -items')



      <!-- Begin Page Content -->
      <div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="controller-buttom">
        <button class="btn btn-primary active">Product Name</button>
        <button class="btn btn-primary ">Disabled this  item</button>
        <button class="btn btn-primary "><a href="{{url('admin/items/add')}}" >Add New items</a></button>
        </div>
    </div>
    <div class="card-body">



  <!-- start product -->
  <section class="product">
    <div class="container">
        <div class="row">

        <div class="col-md-4">
           <div class="product-box">
             <div class="big-img">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                   <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                   <img src="../../../{{$item->photo}}" class="d-block w-100" alt="...">
                   </li>
                   <li data-target="#carouselExampleIndicators" data-slide-to="1">
                     <img src="../../../{{$item->photo}}" class="d-block w-100" alt="...">
                   </li>
                   <li data-target="#carouselExampleIndicators" data-slide-to="2">
                     <img src="../../../{{$item->photo}}" class="d-block w-100" alt="...">
                   </li>
                 </ol>
                 <div class="carousel-inner">
                   <div class="carousel-item active">
                     <img src="../../../{{$item->photo}}" class="d-block w-100" alt="...">
                   </div>
                   <div class="carousel-item">
                     <img src="../../../{{$item->photo}}" class="d-block w-100" alt="...">
                   </div>
                   <div class="carousel-item">
                     <img src="../../../{{$item->photo}}" class="d-block w-100" alt="...">
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
             <h3 class="product-name text-center">{{$item->name}}</h3>

             <p class="discription text-center">{{$item->discription}}
             </p>
             <div class="info">
             <p>price <span>$ {{$item->price}}</span></p>
             <p>date <span>{{$item->created_at}}</span></p>

             <p>CATEGORY  <span>{{$category->name}}</span></p>

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
               <button type="button" class="btn btn-primary"> Edit!</button>
            <button type="button" class="btn btn-primary">Delete {{$item->name}}?</button>
             </form>
           </div>
       </div>
    </div>
    </div>
</section>
<!-- end product -->
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright &copy; Ahmed Ibrahem 2020</span>
              </div>
            </div>
          </footer>
          <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->


      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
@endSection
