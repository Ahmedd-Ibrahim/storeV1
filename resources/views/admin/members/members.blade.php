@extends('admin.inclouds.masterAdmin')

@section('content')
@section('title','MEMBERS')
          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">MEMEBERS</h1>
            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">MEMBERS TABLE</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>id</th>
                        <th>Edit <i class="fas fa-edit"></i></th>
                        <th>Delete <i class="fas fa-trash-alt"></i></th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>name</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>id</th>
                        <th>Edit <i class="fas fa-edit"></i></th>
                        <th>Delete <i class="fas fa-trash-alt"></i></th>
                      </tr>
                    </tfoot>
                    <tbody>

                        @foreach ($users as $user)

                      <tr>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->phone}}</td>
                      <td>{{$user->id}}</td>
                      <td><a href="{{url('admin/members/edit',$user->id)}}" class="btn btn-info member_btn">Edit<i class="fas fa-edit"></i></a></td>
                      <td><a data-toggle="modal" data-target="{{'#deleteModal'. $user['id']}}" href="#" class="btn btn-danger  member_btn">Delete <i class="fas fa-trash-alt"></i></a></td>
<td class="">
  <!-- delete Modal-->
  <div class="modal fade" id="{{'deleteModal'. $user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to delet? </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
    <div class="modal-body">Select "Delete" below if you are ready to Delete "{{$user->name}}" user! </div>
    <div></div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{url('admin/members/delete',$user['id'])}}" >Delete! </a>
        </div>
      </div>
    </div>
  </div>
{{-- End delete modal --}}
</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

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

          <a class="btn btn-primary" href="{{ route('logout')}}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"
          >Logout </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </div>
      </div>
    </div>
  </div>
{{-- End logout modal --}}

@endsection
