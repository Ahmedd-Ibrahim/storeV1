@extends('admin.inclouds.masterAdmin')

@section('content')
@section('title',' -Edit')

<div class="row">
    <div class="col-lg-12">
 <!-- Edit categories -->
 <div class="card shadow ">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Categories</h6>
    </div>
    <div class="card-body">
        @if(Session::has('edit'))
    <p class="btn btn-success">{{Session::get('edit')}}</p>
        @endif
        @if(Session::has('updated'))
    <p class="btn btn-success">{{Session::get('updated') .' to -> ' . $edit['name'] }} </p>
        @endif
      <form method="POST" action="{{ route('admin.categories.update',$edit -> id) }}">
          @csrf

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputEmail4">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" value="{{$edit['name']}}">
            </div>

            @error('name')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            <div class="form-group col-md-12">
              <label for="inputPassword4">Discription</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="discription" name="discription" value="{{$edit['discription']}}">
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Active ?
              </label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Save!</button>
        <a href="{{url('admin/categories')}}" class="btn btn-primary">back To categories</a>
        </form>
    </div>
  </div>
    </div>
</div>
  @endsection
