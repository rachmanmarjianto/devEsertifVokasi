<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="keywords" content="e-sertif, sertifikat vokasi unair">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/images/logo-unair-baru.png') }}">

    <!-- Start CSS -->   
    <link href="{{ asset('/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- End CSS -->
    
    <!-- FontAwesome css -->
    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/all.min.css') }}">
    @yield('style')

</head>
<body class="vertical-layout"> 
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
            @include('layouts.mahasiswa.leftbar')
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
            @include('layouts.mahasiswa.rightbar')          
            @include('layouts.mahasiswa.modal-edit-nama')          
            @yield('content')
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->

    <!-- Start js -->        
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('/assets/js/detect.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('/assets/js/vertical-menu.js') }}"></script>
    <!-- Switchery js -->
    <script src="{{ asset('/assets/plugins/switchery/switchery.min.js') }}"></script>
    <!-- Core js -->
    <script src="{{ asset('/assets/js/core.js') }}"></script>
    @yield('script')
    <!-- End js -->
</body>
</html>