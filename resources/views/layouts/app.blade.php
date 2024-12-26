<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>

    <!-- Dynamic Page Title -->
    <title>@yield('title', 'Dormitory')</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Preloader CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/preloader.min.css') }}" type="text/css" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons CSS -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App CSS -->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="auth-page">
        <div class="container-fluid p-0">
        @include('layouts.partials.header')

        <!-- Sidebar -->
        @include('layouts.partials.sidebar')
            @yield('content')
            
        </div>
        <!-- end container fluid -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <!-- Pace JS -->
    <script src="{{ asset('assets/libs/pace-js/pace.min.js') }}"></script>
    <!-- ApexCharts -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- Dashboard Init -->
    <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

    <!-- App JS -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Password Addon Init -->
    <script src="{{ asset('assets/js/pages/pass-addon.init.js') }}"></script>
</body>
</html>
