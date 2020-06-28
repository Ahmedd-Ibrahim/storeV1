@extends('admin.inclouds.masterAdmin')

@section('content')
@section('title',' -items')


      <!-- Begin Page Content -->
      <div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="controller-buttom">
        <a href="{{url('admin/items')}}"><button class="btn btn-primary ">All items</button></a>
        <button class="btn btn-primary active">Disabled items</button>
        <button class="btn btn-primary "><a href="{{url('admin/items/add')}}" >Add New items</a></button>

        </div>
    </div>
    <div class="card-body">

<!-- start items section  -->
<section class="items">

    <div class="container">
      <div class="row">

@foreach ($items as $item)

<div class="col-md-3 col-sm-6">
    <div class="best-items-box">
        <a href="{{url('admin/items/product/'. $item->id )}}">
      <img src="../{{$item->photo}}">
        </a>
      <div class="like">
        <i class="far fa-heart fa-lg"></i>
        <i class="far fa-eye fa-lg"></i>
      </div>
      <div class=" container-detils">
        <div class="detils">
          <p class=" text-center item-name">{{$item->name}}</p>
          <p class="text-center">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </p>

            <a href="{{url('admin/enable/'.$item->id)}}"> <button type="button" class="btn btn-primary"><i class="fas fa-bell-slash"></i>Enable?</button></a>
           <a href="{{url('admin/delete/'.$item->id)}}"> <button type="button" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Delete?</button></a>
        </div>
      </div>
    </div>
  </div>
@endforeach

    </div>
    </div>
</section>

<!-- End items section  -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright &copy; Ahmed Ibrahem 2020</span>
              </div>
            </div>
          </footer>
          <!-- End of Footer -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
@endSection
