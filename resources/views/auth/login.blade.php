<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Belanja Hijab</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('asset/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('asset/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('asset/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{ asset('asset/images/logo.svg') }}" alt="logo">
                            </div>
                            <h4>Halaman Login Admin</h4>
                            <h6 class="font-weight-light">Silahkan Login Untuk Melakukan Transaksi</h6>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button> 
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            @if ($message = Session::get('danger'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button> 
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            <form class="pt-2" action="{{ url("/login") }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        type="submit">SIGN IN</button>
                                </div>                 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('asset/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('asset/js/off-canvas.js') }}"></script>
    <script src="{{ asset('asset/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('asset/js/template.js') }}"></script>
    <script src="{{ asset('asset/js/settings.js') }}"></script>
    <script src="{{ asset('asset/js/todolist.js') }}"></script>
    <!-- endinject -->
</body>

</html>
