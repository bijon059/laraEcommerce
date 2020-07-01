<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Sleek - Admin Dashboard Template</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('assets/assets/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/assets/plugins/flag-icons/css/flag-icon.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/assets/plugins/ladda/ladda.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('assets/assets/css/sleek.css') }}" />



    <!-- FAVICON -->
    <link href="{{ asset('assets/assets/img/favicon.png') }}" rel="shortcut icon" />

    <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <script src="{{ asset('assets/assets/plugins/nprogress/nprogress.js') }}"></script>
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
        @include('backend.layout.sidebar')
        <div class="page-wrapper">
            @include('backend.layout.header')
            <div class="content-wrapper">
                @yield('content')
            </div>
            @include('backend.layout.footer')
        </div>
    </div>

    <!-- base js -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
    <script src="{{ asset('assets/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/assets/plugins/toaster/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/assets/plugins/charts/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/assets/plugins/ladda/spin.min.js') }}"></script>
    <script src="{{ asset('assets/assets/plugins/ladda/ladda.min.js') }}"></script>
    <script src="{{ asset('assets/assets/plugins/jquery-mask-input/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('assets/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('assets/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('assets/assets/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/assets/plugins/jekyll-search.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/sleek.js') }}"></script>
    <script src="{{ asset('assets/assets/js/chart.js') }}"></script>
    <script src="{{ asset('assets/assets/js/date-range.js') }}"></script>
    <script src="{{ asset('assets/assets/js/map.js') }}"></script>
    <script src="{{ asset('assets/assets/js/custom.js') }}"></script>

    @yield('js')

    <!-- end base js -->
    {{--

  <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('assets/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->

    <!-- common js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- end common js -->

    @stack('custom-scripts')
    --}}
</body>

</html>
