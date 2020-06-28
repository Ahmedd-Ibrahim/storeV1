@extends('admin.inclouds.masterAdmin')

@section('content')
@section('title','Error 404')



          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- 404 Error Text -->
            <div class="text-center">
              <div class="error mx-auto" data-text="404">404</div>
              <p class="lead text-gray-800 mb-5">Page Not Found</p>
              <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
              <a href="index.html">&larr; Back to Dashboard</a>
            </div>

          </div>
          <!-- /.container-fluid -->


        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2020</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


@endsection
