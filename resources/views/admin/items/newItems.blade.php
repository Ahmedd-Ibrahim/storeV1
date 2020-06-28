
@extends('admin.inclouds.masterAdmin')

@section('content')
@section('title',' -New Item')


 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add new Item</h1>

    <div class="row">

      <div class="col-lg-12">
        <!-- Circle Buttons -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Item</h6>
          </div>
          <div class="card-body">
              @if(Session::has('added'))
          <p class="btn btn-success">{{Session::get('added')}}</p>
              @endif
              @if(Session::has('error'))
          <p class="btn btn-info">{{Session::get('error')}}</p>
              @endif
            <form method="POST" action="{{ url('admin/items/save') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">

                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" required>
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

                  <div class="form-group col-md-12">
                    <label for="inputEmail4">$ price</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="price" name="price" required>
                  </div>
                  @error('price')
                  <div class="clearFix"></div>
                  <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror

                  <div class="form-group col-md-12">
                    <label for="inputEmail4">photos</label>
                    <input type="file" class="form-control @error('price') is-invalid @enderror" id="photos" placeholder="photos" name="photos" required>
                  </div>
                  @error('photos')
                  <div class="clearFix"></div>
                  <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">category</label>
                    <select name="category" id="category" class="form-control form-control-sm">
                        <option value="0">Chose Category</option>
                        @foreach ($categories as $category)

                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach

                    </select>
                  </div>
                  @error('category')
                  <div class="clearFix"></div>
                  <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror


                </div>


                <button type="submit" class="btn btn-primary">Save!</button>
              </form>
          </div>
        </div>

        <!-- Brand Buttons -->

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

    

@endsection
