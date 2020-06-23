
@extends('admin.inclouds.masterAdmin')
@section('content')
@section('title',' -Edit')

<div class="row member_row">
    <div class="col-lg-12">
 <!-- Edit categories -->
 <div class="card shadow member_card ">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Member</h6>
    </div>
    <div class="card-body">
        @if(Session::has('edit'))
    <p class="btn btn-success">{{Session::get('edit')}}</p>
        @endif
        @if(Session::has('updated'))
    <p class="btn btn-success">{{Session::get('updated')  }} </p>
        @endif
      <form method="POST" action="{{ route('admin.members.update',$findUser['id']) }}">
          @csrf

          <div class="form-row">
            <div class="form-group col-md-12">

              <label for="inputEmail4">Name</label>
            <input required type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" value="{{$findUser['name']}}">
            </div>

            @error('name')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            <div class="form-group col-md-12">
              <label for="Email">Email</label>
            <input type="Email" class="form-control" id="email" placeholder="Email" name="email" value="{{$findUser['email']}}" required>
            @error('email')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            </div>
            <div class="form-group col-md-12">
              <label for="phone">phone</label>
            <input type="number" class="form-control" id="phone" placeholder="phone Number" name="phone" value="{{$findUser['phone']}}">
            @error('phone')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            </div>
            <div class="form-group col-md-12">
              <label for="password">new Password</label>
            <input type="password" class="form-control" id="password" placeholder="New password" name="newPassword" required>
            @error('newPassword')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            </div>
          </div>


          <button type="submit" class="btn btn-primary">Save!</button>
        <a href="{{url('admin/members')}}" class="btn btn-primary">back To MEmeber</a>
        </form>
    </div>
  </div>
    </div>
</div>
  @endsection
