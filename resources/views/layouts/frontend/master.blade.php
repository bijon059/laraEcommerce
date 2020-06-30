<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('assets/frontend/img/favicon.png')}} " type="image/png">
    <title>Fashiop</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/jquery-ui/jquery-ui.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}">
</head>

<body>

    @include('layouts.frontend.header')

    @yield('content')

    @include('layouts.frontend.footer')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('assets/frontend/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/popper.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/stellar.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/lightbox/simpleLightbox.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/isotope/isotope-min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/flipclock/timer.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/counter-up/jquery.counterup.js')}}"></script>
    <script src="{{asset('assets/frontend/js/mail-script.js')}}"></script>
    <script src="{{asset('assets/frontend/js/theme.js')}}"></script>
</body>

</html>