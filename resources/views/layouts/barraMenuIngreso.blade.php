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


							<li class="dropdown"><!-- Contacto -->

								<a  href="http://localhost/elproyecto/public/Contactos">
									<span class="bordered">CONTACTO</span>
								</a>

							</li>

							<li class="dropdown"><!-- PERFIL -->

								<a  href="http://localhost/elproyecto/public/perfil">
									<span class="bordered">PERFIL</span>
								</a>

							</li>

							<li class="dropdown"><!-- FOTO -->

								<a  href="http://localhost/elproyecto/public/Foto">
									<span class="bordered">FOTO</span>
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
