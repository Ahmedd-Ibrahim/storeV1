
@extends('admin.inclouds.masterAdmin')

@section('content')
@section('title',' -Categories')



 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Categories</h1>

    <div class="row">

      <div class="col-lg-6">

        <!-- Circle Buttons -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Categories</h6>
          </div>
          <div class="card-body">
              @if(Session::has('added'))
          <p class="btn btn-success">{{Session::get('added')}}</p>
              @endif
            <form method="POST" action="{{ url('admin/categories/save') }}">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name">
                  </div>
                  @error('name')
                  <div class="clearFix"></div>
                  <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror
                  <div class="form-group col-md-12">
                    <label for="inputPassword4">Discription</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="discription" name="discription">
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
              </form>
          </div>
        </div>

        <!-- Brand Buttons -->

      </div>
      <div class="col-lg-6">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Your Category</h6>
          </div>
          <div class="card-body">
              @error('delete-error')
              <p class="btn btn-warning"> {{$message}}</p>
              @enderror
              @if(Session::has('success'))
              <p class="btn btn-success"> {{Session::get('success')}}</p>
              @endif
            @foreach ($category as $categories)
            <div class="my-2"></div>
            <div class="mycategory">
                <a href="#" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">{{$categories['name']}}</span>
                  </a>
            </div>


            <div class="mybutton">
                <a href="{{url('admin/categories/delete/'.$categories['id'])}}" class="btn btn-danger " type="button">Delete <i class="fas fa-trash-alt"></i></a>
                <a href="{{url('admin/categories/categoryEdit/'.$categories['id'])}}" class="btn btn-info">Edit <i class="fas fa-edit"></i></a>
            </div>

            <div class="my-2"></div>
            @endforeach
          </div>
        </div>

      </div>

    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


          {{-- Endcontent --}}

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Aheed Ibrahem  2020</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{url('admin/login')}}">Logout</a>
          </div>
        </div>
      </div>
    </div>

@endsection
