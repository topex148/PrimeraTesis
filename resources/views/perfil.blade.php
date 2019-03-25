<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0"><!--Esta etiqueta permite que el sitio web se vea bien en todos los navegadores, inclusive dispositivos moviles-->
<title>Ingreso Paquete</title><!--
<link rel="stylesheet" href="css/bootstrap.min.css">
-->
<!--Prueba inicio-->

<meta charset="utf-8" />
		<title>Smarty - Multipurpose + Admin</title>
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

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


  <div id="header" class="navbar-toggleable-md sticky clearfix">

  				<!-- TOP NAV -->
  				<header id="topNav">
  					<div class="container">

  						<!-- Mobile Menu Button -->
  						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
  							<i class="fa fa-bars"></i>
  						</button>

  						<!-- Logo -->
  						<a href="#" class="logo float-left" href="index.html">
  							<img src="{{ asset("assets/images/_smarty/logo-126x80.png") }}" alt="" />
  						</a>


  						<div class="navbar-collapse collapse float-right nav-main-collapse">
  							<nav class="nav-main">

  								<ul id="topMain" class="nav nav-pills nav-main">

  								<!-- Gerente-->

  							@if (auth()->user()->hasRole(['gerente']))


                <li class="dropdown"><!-- PERFIL -->

                  <a  href="http://localhost/elproyecto/public/perfil">
                    <span class="bordered">PERFIL</span>
                  </a>

                </li>



  							<li class="dropdown"><!-- PRESTADOR -->

  								<a  href="http://localhost/elproyecto/public/Prestador">
  									<span class="bordered">PRESTADOR</span>
  								</a>

  							</li>

  							<li class="dropdown"><!-- ZONA -->

  								<a  href="http://localhost/elproyecto/public/Zona">
  									<span class="bordered">ZONA</span>
  								</a>

  							</li>

  							<li class="dropdown"><!-- ATRACTIVO -->

  								<a  href="http://localhost/elproyecto/public/Atractivo">
  									<span class="bordered">ATRACTIVO</span>
  								</a>

  							</li>

  							@endif


  							<!-- PRESTADOR-->

  							@if (auth()->user()->hasRole(['prestador']))


  							<li class="dropdown"><!-- PERFIL -->

  								<a  href="http://localhost/elproyecto/public/perfil">
  									<span class="bordered">PERFIL</span>
  								</a>

  							</li>

  							<li class="dropdown"><!-- ITINERARIO -->

  								<a  href="http://localhost/elproyecto/public/Itinerario">
  									<span class="bordered">ITINERARIO</span>
  								</a>

  							</li>

  							@endif

  							<!-- Turista-->

  							@if (auth()->user()->hasRole(['user']))


  							<li class="dropdown"><!-- PERFIL -->

  								<a  href="http://localhost/elproyecto/public/perfil">
  									<span class="bordered">PERFIL</span>
  								</a>

  							</li>

  							<li class="dropdown"><!-- TURISTA -->

  								<a  href="http://localhost/elproyecto/public/Turista">
  									<span class="bordered">TURISTA</span>
  								</a>

  							</li>

  							@endif

  							<!-- ADMIN-->

  							@if (auth()->user()->hasRole(['admin']))


  							<li class="dropdown"><!-- PERFIL -->

  								<a  href="http://localhost/elproyecto/public/perfil">
  									<span class="bordered">PERFIL</span>
  								</a>

  							</li>

  							<li class="dropdown"><!-- PAQUETE -->

  								<a  href="http://localhost/elproyecto/public/Paquete">
  									<span class="bordered">PAQUETE</span>
  								</a>

  							</li>

								<li class="dropdown"><!-- ACTIVIDAD -->

									<a  href="http://localhost/elproyecto/public/actividades">
										<span class="bordered">ACTIVIDAD</span>
									</a>

								</li>

  							<li class="dropdown"><!-- FOTO -->

  								<a  href="http://localhost/elproyecto/public/Foto">
  									<span class="bordered">FOTO</span>
  								</a>

  							</li>

  							<li class="dropdown"><!-- ZONA -->

  								<a  href="http://localhost/elproyecto/public/Zona">
  									<span class="bordered">ZONA</span>
  								</a>

  							</li>

  							<li class="dropdown"><!-- PLAN -->

  								<a  href="http://localhost/elproyecto/public/Plane">
  									<span class="bordered">PLAN</span>
  								</a>

  							</li>

  							@endif

  							<!-- PROMOTOR-->

  							@if (auth()->user()->hasRole(['promotor']))


  							<li class="dropdown"><!-- PERFIL -->

  								<a  href="http://localhost/elproyecto/public/perfil">
  									<span class="bordered">PERFIL</span>
  								</a>

  							</li>

  							<li class="dropdown"><!-- PRESTADOR -->

  								<a  href="http://localhost/elproyecto/public/Prestador">
  									<span class="bordered">PRESTADOR</span>
  								</a>

  							</li>

  							<li class="dropdown"><!-- ZONA -->

  								<a  href="http://localhost/elproyecto/public/Zona">
  									<span class="bordered">ZONA</span>
  								</a>

  							</li>

  							<li class="dropdown"><!-- ATRACTIVO -->

  								<a  href="http://localhost/elproyecto/public/Atractivo">
  									<span class="bordered">ATRACTIVO</span>
  								</a>

  							</li>

  							@endif


  							<!-- COMMUNITY-->

  							@if (auth()->user()->hasRole(['community']))

  							<li class="dropdown"><!-- PERFIL -->

  								<a  href="http://localhost/elproyecto/public/perfil">
  									<span class="bordered">PERFIL</span>
  								</a>

  							</li>

  							<li class="dropdown"><!-- PAQUETE -->

  								<a  href="http://localhost/elproyecto/public/Paquete">
  									<span class="bordered">PAQUETE</span>
  								</a>

  							</li>

  							@endif

  												@guest
  														<li class="dropdown">
  																<a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
  														</li>
  														<li class="dropdown">
  																@if (Route::has('register'))
  																		<a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
  																@endif
  														</li>
  												@else
  														<li class="dropdown">
  																<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position:relative; padding-left:50px;">
                                      <!--<img src="uploads/avatars/{{Auth::user()->avatar}}" style="width:32px; position:absolute; top:10px; left:10px; border-radius:50%">-->
                                      {{ Auth::user()->name }} <span class="caret"></span>
  																</a>

  																<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

  																		<a class="dropdown-item" href="{{ route('logout') }}"
  																			 onclick="event.preventDefault();
  																										 document.getElementById('logout-form').submit();">
  																				{{ __('Salir') }}
  																		</a>

  																		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  																				@csrf
  																		</form>
  																</div>
  														</li>
  												@endguest



  								</ul>   <!--FIN MENU-->

  							</nav>
  						</div>

  					</div>
  				</header>
  				<!-- /Top Nav -->

  			</div>

<div class="container">
  <div class="row">
    <div class="col-mod-10 col-md-offset-1">
      <img src="uploads/avatars/{{$user->avatar}}" style="width:150; height:150px; float: left; border-radius:50%; margin-right:25%;">
      <h2>{{$user->name}} Perfil </h2>
      <form enctype="multipart/form-data" action="/elproyecto/public/perfil" method="POST" role="form">
        <label>Actualizar Foto Perfil</label>
        <input type="file" name="avatar">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" class="pull-right btn bnt-sm btn-primary">
      </form>

    </div>
  </div>
</div>




<!-- FOOTER -->
<footer id="footer">


	<div class="copyright">
		<div class="container">

			Copyright &copy; 2018 MERIVENTURA. Todos los derechos reservados.
		</div>
	</div>

</footer>
<!-- /FOOTER -->

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
