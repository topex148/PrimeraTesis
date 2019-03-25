<div id="header" class="navbar-toggleable-md sticky clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- BUTTONS -->
						<!-- <ul class="float-right nav nav-pills nav-second-main">-->

							<!-- SEARCH -->
							<!-- <li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
								<div class="search-box">
									<form action="page-search-result-1.html" method="get">
										<div class="input-group">
											<input type="text" name="src" placeholder="Search" class="form-control" />
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Search</button>
											</span>
										</div>
									</form>
								</div>
							</li>-->
							<!-- /SEARCH -->

						<!-- </ul>-->
						<!-- /BUTTONS -->


						<!-- Logo -->
						<a  href="http://localhost/elproyecto/public/inicio" class="logo float-left" href="index.html">
							<img src="{{ asset("assets/images/_smarty/logo-126x80.png") }}" alt="" />
						</a>

						<!--
							Top Nav

							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse collapse float-right nav-main-collapse">
							<nav class="nav-main">

								<!--
									NOTE

									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example:

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">






								<!-- 	<li> --><!-- INICIO -->
								<!-- 		<a  href="http://localhost/comienzo/public/index"> -->
									<!-- 		<span class="bordered">INICIO</span> -->
									<!-- 	</a> -->
								<!-- 	</li> -->
								@if(Auth::guest())


									<li class="dropdown"><!-- NOSOTROS -->

										<a  href="http://localhost/elproyecto/public/nosotros">
											<span class="bordered">NOSOTROS</span>
										</a>

									</li>

									<li class="dropdown"><!-- ATRACTIVOS -->

										<a  href="http://localhost/elproyecto/public/ListaAtractivo">
											<span class="bordered">ATRACTIVOS</span>
										</a>

									</li>

									<li class="dropdown"><!-- ZONAS -->

										<a  href="http://localhost/elproyecto/public/listaz">
											<span class="bordered">ZONAS</span>
										</a>

									</li>

									<li class="dropdown"><!-- ACTIVIDADES -->

										<a  href="http://localhost/elproyecto/public/actividad">
											<span class="bordered">ACTIVIDADES</span>
										</a>

									</li>

									<li class="dropdown"><!-- SERVICIOS -->

										<a  href="http://localhost/elproyecto/public/servicios">
											<span class="bordered">SERVICIOS</span>
										</a>

									</li>

									<li class="dropdown"><!-- GALERIA -->

										<a  href="http://localhost/elproyecto/public/galeria">
											<span class="bordered">GALERIA</span>
										</a>

									</li>

									<li class="dropdown"><!-- CONTACTO -->

										<a  href="http://localhost/elproyecto/public/contacto">
											<span class="bordered">CONTACTO</span>
										</a>

									</li>

									@endif

									<!--	@if (session('statut') == 'user')

										@endif-->

									<!-- LOGIN-->

									@guest
											<li class="dropdown">
													<a class="nav-link" href="{{ route('login') }}">{{ __('INGRESAR') }}</a>
											</li>
											<li class="dropdown">
													@if (Route::has('register'))
															<a class="nav-link" href="{{ route('register') }}">{{ __('REGISTRAR') }}</a>
													@endif
											</li>
									@else
											<li class="dropdown">
													<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
															{{ Auth::user()->name }} <span class="caret"></span>
													</a>

													<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
															<a class="dropdown-item" href="{{ route('logout') }}"
																 onclick="event.preventDefault();
																							 document.getElementById('logout-form').submit();">
																	{{ __('SALIR') }}
															</a>

															<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																	@csrf
															</form>
													</div>
											</li>
									@endguest


								<!-- <li class="dropdown">--><!-- INGRESAR -->

									<!-- 	<a  href="http://localhost/prueba/public/login">-->
										<!-- 	<span class="bordered">INGRESAR</span>-->
									<!-- 	</a>-->

								<!-- 	</li>-->


								</ul>   <!--FIN MENU-->

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>
