<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Belanja Hijab</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('asset/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('asset/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('asset/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('asset/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('asset/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('asset/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('asset/images/favicon.png')}}" />
    @yield("style")
</head>

<body>
    <div class="container-scroller">
        @include("template.navbar")

        <!-- partial:partials/_navbar.html -->
    
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            
            @include("template.sidebar")

            <div class="main-panel">
                <div class="content-wrapper">
                    @yield("content")
                </div>
                <!-- content-wrapper ends -->
                
                @include("template.footer")
                
                
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('asset/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('asset/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('asset/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('asset/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('asset/js/dataTables.select.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <script src="{{asset('asset/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('asset/js/template.js')}}"></script>

    @yield("script")
</body>

</html>
