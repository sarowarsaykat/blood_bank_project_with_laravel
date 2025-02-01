<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Backend | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin_template/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('admin_template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css ') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('admin_template/plugins/icheck-bootstrap/icheck-bootstrap.min.css ') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('admin_template/plugins/jqvmap/jqvmap.min.css ') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin_template/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="{{ asset('admin_template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css ') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('admin_template/plugins/daterangepicker/daterangepicker.css ') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin_template/plugins/summernote/summernote-bs4.css ') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('admin_template/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin_template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    <!--Toastr-->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset('admin_template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin_template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/backend') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                {{-- logout start --}}
                <li class="nav-item mr-2">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input class="btn btn-danger btn-sm" type="submit" value="LogOut"
                            onclick="return confirm('Are you sure you want to log out?');">
                    </form>
                </li>
                {{-- logout end --}}
            </ul>
        </nav>
        <!-- /.navbar -->

        @include('backend.sidebar')

        @yield('contentBackend')

        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.5
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('admin_template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin_template/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>


    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin_template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('admin_template/plugins/select2/js/select2.full.min.js') }}"></script>

    <!-- ChartJS -->
    <script src="{{ asset('admin_template/plugins/chart.js/Chart.min.js ') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('admin_template/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('admin_template/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin_template/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('admin_template/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('admin_template/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin_template/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin_template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
    <!-- Summernote -->
    <script src="{{ asset('admin_template/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin_template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin_template/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin_template/dist/js/demo.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('admin_template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin_template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin_template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    {{-- toster --}}
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date range picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });
            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            });

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });

        })
    </script>


    <!-- DataTables Initialization -->
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    {{-- tostet --}}
    {!! Toastr::message() !!}
</body>

</html>
