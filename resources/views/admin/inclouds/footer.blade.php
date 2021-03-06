


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
</div><!-- End of Content Wrapper -->
</div><!-- End of Page Wrapper -->
  <!-- Bootstrap core JavaScript-->
  <script src="{{url('backend/jquery/jquery.min.js')}}"></script>
  <script src="{{url('backend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{url('backend/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
<script src="{{url('backend/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
<script src="{{url('backend/chart.js/Chart.min.js')}}"></script>
<script src="{{url('backend/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('backend/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <!-- Page level custom scripts -->
<script src="{{url('backend/js/demo/chart-area-demo.js')}}"></script>
<script src="{{url('backend/js/demo/chart-pie-demo.js')}}"></script>
</body>
</html>
