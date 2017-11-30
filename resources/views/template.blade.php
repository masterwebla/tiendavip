<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />	
	
	<link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
	<title>TIENDA VIP | @yield('titulo')</title>
	@include('parciales.head')
</head>
<body class="wide">
	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- HEADER -->
		@include('parciales.header')
		<!-- END: HEADER -->
		
		@yield('contenido')

		<!-- FOOTER -->
		@include('parciales.footer')
		<!-- END: FOOTER -->
	</div>
	<!-- END: WRAPPER -->
	<!-- GO TOP BUTTON -->
	<a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a>
	<!-- Theme Base, Components and Settings -->
	<script src="{{ asset('js/theme-functions.js') }}"></script>
	<!-- Custom js file -->
	<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>