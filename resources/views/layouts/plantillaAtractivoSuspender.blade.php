<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0"><!--Esta etiqueta permite que el sitio web se vea bien en todos los navegadores, inclusive dispositivos moviles-->
<title>Atractivos Suspendidos</title><!--
<link rel="stylesheet" href="css/bootstrap.min.css">
-->
<!--Prueba inicio-->

<meta charset="utf-8" />


		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="{{ asset("assets/plugins/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="{{ asset("assets/css/essentials.css") }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset("assets/css/layout.css") }}" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="{{ asset("assets/css/header-1.css") }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset("assets/css/layout-shop.css") }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset("assets/css/color_scheme/green.css") }}" rel="stylesheet" type="text/css" id="color_scheme" />
<!--Prueba final-->



</head>
<body>


@include("layouts.barraMenuIngreso")
@yield("cabecera")


@include("layouts.ingresoSuspensionAtractivo")
@yield("susp")


@include("layouts.footerIngreso")
@yield("pie")


<!-- SCROLL TO TOP -->
	<a href="#" id="toTop"></a>


	<!-- PRELOADER -->
	<div id="preloader">
		<div class="inner">
			<span class="loader"></span>
		</div>
	</div><!-- /PRELOADER -->

	<!--<script src="js/jquery-3.3.1.min.js"></script>-->
	<script src="{{ asset("js/popper.min.js") }}"></script>
	<script src="{{ asset("js/bootstrap.min.js") }}"></script>


	<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = '{{ asset('assets/plugins/') }}/';</script>
		<script type="text/javascript" src="{{ asset("assets/plugins/jquery/jquery-3.2.1.min.js") }}"></script>
		<script type="text/javascript" src="{{ asset("assets/js/scripts.js") }}"></script>

		<!-- PAGE LEVEL SCRIPTS -->
		<script type="text/javascript" src="{{ asset("assets/js/view/demo.shop.js") }}"></script>

</body>
</html>
