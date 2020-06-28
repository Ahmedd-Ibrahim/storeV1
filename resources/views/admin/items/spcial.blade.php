@extends('admin.inclouds.masterAdmin')

@section('content')
{{-- if no Categories will chose defualt title --}}
@if(!$category)
@section('title','items')
@endif

{{-- title of the page from categories name --}}
@if ($category)
@foreach ($category as $categories)
@if(str_contains($url,$categories->name))
@section('title')
{{$categories->name}}
@endSection
@endif
@endforeach
@endif
{{--End  title of the page from categories name --}}

      <!-- Begin Page Content -->
      <div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="controller-buttom">
        <button class="btn btn-primary"><a href="{{url('admin/items')}}">All items</a></button>
        <button class="btn btn-primary ">Disabled items</button>
        <button class="btn btn-primary "><a href="{{url('admin/items/add')}}" >Add New items</a></button>
        @if ($category)
        @foreach ($category as $categories)
        <button class="btn btn-primary {{str_contains($url,$categories->name)? 'active' : ''}}" ><a href="{{url('admin/items/'. $categories->name.'/'. $categories->id )}}">{{$categories->name}}</a></button>
        @endforeach
        @endif
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
        <a href="{{url('admin/items/product/'.$item->id)}}">
      <img src="../../../{{$item->photo}}">
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

          <a href="{{url('admin/disable/'.$item->id)}}"> <button type="button" class="btn btn-primary"><i class="fas fa-bell-slash"></i> disable?</button></a>
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

