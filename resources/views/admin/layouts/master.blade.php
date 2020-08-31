<!DOCTYPE html>
<html  lang="en">

<head>
    <meta charset="UTF-8"  name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/multicheck/multicheck.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/toastr/build/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/switch.css')}}">
    @yield('styles')

    <![endif]-->
</head>
<body>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<div id="main-wrapper">
@include('admin.layouts.header')
<!-- Left Sidebar   -->
    @include('admin.layouts.sidebar')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">List</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-12">
                  @yield('content')
                </div>
            </div>
        </div>
        <!-- End Container fluid  -->

        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- End footer -->
    </div>

</div>

<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->y
<script src="{{asset('dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('dist/js/custom.min.js')}}"></script>
<!-- this page js -->
<script src="{{asset('assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
<script src="{{asset('assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
<script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
<script src="{{asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('assets/libs/toastr/build/toastr.min.js')}}"></script>
@stack('scripts')
<script >
        @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
<script>
        tinymce.init({

            selector: '#content_post',
            mages_upload_credentials: true,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"

            ],
            toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
            toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
            relative_urls: false,
            external_filemanager_path:"{{asset('/')}}filemanager/",

            filemanager_title:"Responsive Filemanager" ,
            external_plugins: {

                "filemanager": "{{asset('filemanager/plugin.min.js')}}",
                "responsivefilemanager": "{{asset('tinymce/plugins/responsivefilemanager/plugin.min.js')}}",
            },


        });
    </script>
</html>

