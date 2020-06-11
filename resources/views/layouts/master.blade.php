<!DOCTYPE html>
<html>
<head>
	<title>Laravel Ecommerce Project</title>

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/js/all.js">-->
</head>
<body>

<div class="wrapper">
	{{--Navigation Start--}}
	@include('partials/nav')
	{{--Navigation End--}}

		
		@yield('content')

		<!-- Footer -->
		@include('partials/footer')
		<!-- Footer -->
</div>

<!-- Optional JavaScript -->
@include('partials/script')
</body>
</html>