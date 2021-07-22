<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend/plugins/images/favicon.png')}}">
    <title>Cubic Admin Template</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="{{asset('backend/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <link href="{{asset('backend/plugins/components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!-- ===== Animation CSS ===== -->
    <link href="{{asset('backend/css/animate.css')}}" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    <!-- ===== table CSS ===== -->
    <link rel="stylesheet" href="{{asset('backend/plugins/components/jquery-datatables-editable/datatables.css')}}" />
    <!-- ===== Color CSS ===== -->
    <link href="{{asset('backend/css/colors/green-dark.css')}}" id="theme" rel="stylesheet">
    <!-- ===== toastr CSS ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ===== font awesome CSS ===== -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- <link href="{{asset('backend/plugins/components/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/components/custom-select/custom-select.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/components/switchery/dist/switchery.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" /> -->

    <!-- ===== dropdown menu product add category,brand ===== -->

    <link href="{{asset('backend/plugins/components/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />


</head>

<body class="mini-sidebar">
    <!-- ===== Main-Wrapper ===== -->
    <div id="wrapper">
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <!-- ===== Top-Navigation ===== -->
        @include('admin.body.header')
        <!-- ===== Top-Navigation-End ===== -->
        <!-- ===== Left-Sidebar ===== -->
        @include('admin.body.sidebar')
        <!-- ===== Left-Sidebar-End ===== -->
        <!-- ===== Page-Content ===== -->
        <div class="page-wrapper">
            @yield('content')
            <!-- ===== Page-Container ===== -->

            <!-- ===== Page-Container-End ===== -->
            <div class="container">
                @include('admin.body.footer')
            </div>
        </div>
        <!-- ===== Page-Content-End ===== -->
    </div>
    <!-- ===== Main-Wrapper-End ===== -->
    <!-- ==============================
        Required JS Files
    =============================== -->
    <script src="{{asset('backend/plugins/components/dropify/dist/js/dropify.min.js')}}"></script>

    <!-- ===== CK Editor ===== -->
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script src="[ckeditor-build-path]/ckeditor.js"></script>
    <!-- ===== jQuery ===== -->
    <script src="{{asset('backend/plugins/components/jquery/dist/jquery.min.js')}}"></script>
    <!-- ===== Bootstrap JavaScript ===== -->
    <script src="{{asset('backend/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- ===== Slimscroll JavaScript ===== -->
    <script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
    <!-- ===== Wave Effects JavaScript ===== -->
    <script src="{{asset('backend/js/waves.js')}}"></script>
    <!-- ===== Menu Plugin JavaScript ===== -->
    <script src="{{asset('backend/js/sidebarmenu.js')}}"></script>
    <!-- ===== Custom JavaScript ===== -->
    <script src="{{asset('backend/js/custom.js')}}"></script>
    <!-- ===== Plugin JS ===== -->

    <!-- <script src="{{asset('backend/plugins/components/switchery/dist/switchery.min.js')}}"></script>
    <script src="{{asset('backend/plugins/components/custom-select/custom-select.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/plugins/components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('backend/plugins/components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script> -->

    <!-- ===== dropdown menu product add category,brand ===== -->
    <script src="{{asset('backend/plugins/components/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>


    <script src="{{asset('backend/plugins/components/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{asset('backend/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('backend/plugins/components/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('backend/plugins/components/sparkline/jquery.charts-sparkline.js')}}"></script>
    <script src="{{asset('backend/plugins/components/knob/jquery.knob.js')}}"></script>
    <script src="{{asset('backend/plugins/components/easypiechart/dist/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('backend/js/db1.js')}}"></script>

    <script src="{{asset('backend/plugins/components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('backend/plugins/components/jquery-datatables-editable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('backend/plugins/components/datatables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('backend/plugins/components/tiny-editable/mindmup-editabletable.js')}}"></script>
    <script src="{{asset('backend/plugins/components/tiny-editable/numeric-input-example.js')}}"></script>
    <!-- for table show search and pagination -->
    <script>
        $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        // $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
        $(function() {
            $('#editable-datatable').DataTable();
        });
    </script>
    <!--Style Switcher -->
    <script src="{{asset('backend/plugins/components/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <!-- ===== Toastr JS ===== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script>
        @if(Session::has('message'))
        var type = "{{Session::get('alert-type', 'info')}}"
        switch (type) {
            case 'info':
                toastr.info("{{Session::get('message')}}");
                break;
            case 'success':
                toastr.success("{{Session::get('message')}}");
                break;
            case 'warning':
                toastr.warning("{{Session::get('message')}}");
                break;
            case 'error':
                toastr.error("{{Session::get('message')}}");
                break;
                @endif
        }
    </script>


    <!-- sweet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            $(document).on('click', '#delete', function(e) {
                e.preventDefault();
                var link = $(this).attr("href");
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Delete This Data?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                });
            });
        });
    </script>


</body>

</html>