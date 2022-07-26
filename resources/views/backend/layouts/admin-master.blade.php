
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin || Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public')}}/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('public')}}/backend/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('public')}}/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public')}}/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('public')}}/backend/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public')}}/backend/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('public')}}/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('public')}}/backend/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('public')}}/backend/plugins/summernote/summernote-bs4.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('public')}}/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('public')}}/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- tostr massage -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  
<!-- sweetalert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <span>{{ Auth::user()->role }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" class="dropdown-item dropdown-footer">Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

@include('backend.layouts.admin-sidebar')



    @yield('content')



  <footer class="main-footer  bg-dark">
    <strong>Copyright &copy; 2022 <a href="https://mhakash5000.github.io/resume-of-md.makbul-hosen-/">Developer Info</a></strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Designed and developed by CodingDuck</b>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('public')}}/backend/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public')}}/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('public')}}/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('public')}}/backend/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('public')}}/backend/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('public')}}/backend/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('public')}}/backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public')}}/backend/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('public')}}/backend/plugins/moment/moment.min.js"></script>
<script src="{{asset('public')}}/backend/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('public')}}/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('public')}}/backend/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public')}}/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('public')}}/backend/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public')}}/backend/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public')}}/backend/dist/js/demo.js"></script>
<!-- Select2 -->
<script src="{{asset('public')}}/backend/plugins/select2/js/select2.full.min.js"></script>
<script>
   $(function(){
       //Initialize Select2 Elements
    $('.select2').select2()
      //Initialize Select2 Elements
      $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
   })
</script>
<!-- DataTables -->
<script src="{{asset('public')}}/backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('public')}}/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('public')}}/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('public')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <!-- for toaster massage -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}");
    @endif
</script>


  <script>
      $(function(){
          $(document).on('click','#delete',function(e){
           e.preventDefault();
           var link =$(this).attr('href');
           const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You want to delete this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
            }).then((result) => {
            if (result.value) {
                window.location.href=link;
                swalWithBootstrapButtons.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                'Cancelled',
                'Your file is safe :)',
                'error'
                )
            }
            })
                    });
                });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
        var reader =new FileReader();
        reader.onload=function(e){
            $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
        });
    });
  </script>
  <script>
      //Image Show Before Upload Start
$(document).ready(function(){
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        if (fileName){
            $('#image').html(fileName);
        }
    });
});

function showImage(data, imgId){
    if(data.files && data.files[0]){
        var obj = new FileReader();

        obj.onload = function(d){
            var image = document.getElementById(imgId);
            image.src = d.target.result;
        }
        obj.readAsDataURL(data.files[0]);
    }
}


//Image Show Before Upload End
  </script>
  {{-- date picker for date --}}
  <script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        format:'yyyy-mm-dd'
    });
</script>

{{-- CountDown Timer --}}
<script src="{{asset('public/backend/build/js/jquery.countdown.min.js')}}"></script>
<script>
   ;(function($) {
    
    var MERCADO_JS = {
      init: function(){
         this.mercado_countdown();
         
      }, 
    mercado_countdown: function() {
         if($(".mercado-countdown").length > 0){
                $(".mercado-countdown").each( function(index, el){
                  var _this = $(this),
                  _expire = _this.data('expire');
               _this.countdown(_expire, function(event) {
                        $(this).html( event.strftime('<span><b>%D</b> Days</span> <span><b>%-H</b> Hrs</span> <span><b>%M</b> Mins</span> <span><b>%S</b> Secs</span>'));
                    });
                });
         }
      },
   
   }
   
      window.onload = function () {
         MERCADO_JS.init();
      }
   
      })(window.Zepto || window.jQuery, window, document);
</script>

{{-- for seleted value javascript --}}
@yield('script')

</body>
</html>
