<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{ asset('magazine/img/fav.png') }}">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>SMP Negeri 2 Patrol</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="{{ asset('magazine/css/linearicons.css') }}">
		<link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('magazine/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('magazine/css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('magazine/css/nice-select.css') }}">
		<link rel="stylesheet" href="{{ asset('magazine/css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('magazine/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('magazine/css/jquery-ui.css') }}">
		<link rel="stylesheet" href="{{ asset('magazine/css/main.css') }}">
		<link rel="stylesheet" href="{{ asset('bower_components/datatables/css/dataTables.bootstrap.css')}}">
	</head>
	<body>
		@include('public/layouts/header')
		
		@yield('konten')

		
		<!-- start footer Area -->
		@include('public/layouts/footer')
		<!-- End footer Area -->
		<script src="{{ asset('magazine/js/vendor/jquery-2.2.4.min.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="{{ asset('magazine/js/vendor/bootstrap.min.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="{{ asset('magazine/js/easing.min.js') }}"></script>
		<script src="{{ asset('magazine/js/hoverIntent.js') }}"></script>
		<script src="{{ asset('magazine/js/superfish.min.js') }}"></script>
		<script src="{{ asset('magazine/js/jquery.ajaxchimp.min.js') }}"></script>
		<script src="{{ asset('magazine/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('magazine/js/mn-accordion.js') }}"></script>
		<script src="{{ asset('magazine/js/jquery-ui.js') }}"></script>
		<script src="{{ asset('magazine/js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('magazine/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('magazine/js/mail-script.js') }}"></script>
		<script src="{{ asset('magazine/js/main.js') }}"></script>
		<script src="{{ asset('bower_components/datatables-net/js/jquery.dataTables.js')}}"></script>
		<script src="{{ asset('bower_components/datatables/js/dataTables.bootstrap.js')}}"></script>
		

	@yield('skrip')

	</body>
</html>