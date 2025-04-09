
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('admin_assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin_assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('admin_assets/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin_assets/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('admin_assets/dist/css/skins/_all-skins.min.css')}}">
  <!--dataTables-->
  <link rel="stylesheet" href="{{asset('admin_assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!--toast-->
  <link rel="stylesheet" href="{{asset('admin_assets/plugins/toastr/toastr.min.css')}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('admin_assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{asset('admin_assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_assets/plugins/timepicker/bootstrap-timepicker.min.css')}}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    td{
      vertical-align: top;
    }
  </style>
  @stack('css')
</head>
  <body class="hold-transition skin-purple-light sidebar-mini">
  <!-- Site wrapper -->
    
    <div class="wrapper">
      
      <!--navbar-->
      @include('dashboard.master.header.headermain')
      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      
      @include('dashboard.master.sidebar.sidebarmain')
      
      

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 style="text-transform: uppercase;">
            @yield('pageheadertitle')
          </h1>
          <ol class="breadcrumb">
            @yield('breadcrumb')
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          @yield('content')
          <!-- /.box -->

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript:void(0)">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <i class="menu-icon fa fa-user bg-yellow"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript:void(0)">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul>
            <!-- /.control-sidebar-menu -->

          </div>
          <!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
          <!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>

                <p>
                  Some information about this general settings option
                </p>
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>

                <p>
                  Other sets of options are available
                </p>
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>

                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div>
              <!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div>
              <!-- /.form-group -->
            </form>
          </div>
          <!-- /.tab-pane -->
        </div>
      </aside>
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
          immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
    
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{asset('admin_assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('admin_assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset('admin_assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('admin_assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{asset('admin_assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- bootstrap time picker -->
    <script src="{{asset('admin_assets/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{asset('admin_assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- DataTables -->
    <script src="{{asset('admin_assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <!--toast-->
    <script src="{{asset('admin_assets/plugins/toastr/toastr.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin_assets/dist/js/adminlte.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('admin_assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('admin_assets/dist/js/demo.js')}}"></script>
    <script>
      function submitForm(button) {
        var form = $(button).closest('form');
        var formData = new FormData(form[0]);
        var endpoint = form.data('endpoint');

        $.ajax({
          type: 'POST',
          url: endpoint,
          data: formData,
          processData: false,
          contentType: false,
          success: function (response) {
            // Tanggapan sukses (validasi berhasil)
            $(form).closest('.modal').modal('hide');
            // Tambahkan logika lainnya jika diperlukan
            location.reload();
          },
          error: function (xhr, status, error) {
            // Tanggapan error (validasi gagal)
            if (xhr.status === 422) {
              var errors = xhr.responseJSON.errors;
              for (var key in errors) {
                alert(errors[key][0]);
              }
            } else {
              alert('Terjadi kesalahan. Silakan coba lagi.');
            }
          }
        });
      }
      $(document).ready(function () {
        // Tangkap submit form secara global
        $('.ajax-form').submit(function (e) {
          e.preventDefault();
          submitForm($(this).find('button[type="button"]'));
        });
      });
    </script>
    <script>
    $(function () {
      $('.datatable').DataTable()
      $('.datatable-custom').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
    $(function() {
      $( "#iTanggalMasuk" ).datepicker({
        format: "yyyy-mm-dd"
      });
    });
    $(function() {
      $( "#iTanggalMulai" ).datepicker({
        format: "yyyy-mm-dd"
      });
    });
    $(function() {
      $( "#iTanggalSelesai" ).datepicker({
        format: "yyyy-mm-dd"
      });
    });
    $(function() {
      $( "#iDiterbitkanPada" ).datepicker({
        format: "yyyy-mm-dd"
      });
    });
    $(function() {
      $( "#iTanggalDiterima" ).datepicker({
        format: "yyyy-mm-dd"
      });
    });
    $(function() {
      $( "#iTanggalSPM" ).datepicker({
        format: "yyyy-mm-dd"
      });
    });
    $(function() {
      $( "#iTanggalSurat" ).datepicker({
        format: "yyyy-mm-dd"
      });
    });
    $(function() {
      $( "#iTanggalSuratPermintaan" ).datepicker({
        format: "yyyy-mm-dd"
      });
    });
    $(function() {
      $( "#iTanggalSuratBalasan" ).datepicker({
        format: "yyyy-mm-dd"
      });
    });
    $(function() {
      $( "#iTanggalNotaDinas" ).datepicker({
        format: "yyyy-mm-dd"
      });
    });
    $(function() {
      $( "#iTanggalAwalMagang" ).datepicker({
        format: "yyyy-mm-dd"
      });
    });
    $(function() {
      $( "#iTanggalAkhirMagang" ).datepicker({
        format: "yyyy-mm-dd"
      });
    });
    </script>
    @yield('customscripts')
    @stack('modal')
    @stack('js')
  </body>
</html>