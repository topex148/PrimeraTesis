<!-- CONTACT -->
			<section id="contact">
				<div class="container">

					<header class="text-center mb-60">
						<h2>Formulario itinerarios</h2>
						<p class="lead font-lato">Ingresa los datos de los itinerarios.</p>
						<hr />
					</header>


					<div class="row">

						<!-- FORM -->
						<div class="col-md-12 col-sm-12">

							<h3>Verifica los datos antes de seleccionar <strong><em>Registrar!</em></strong></h3>



							<!-- Alert Success -->
							<div id="alert_success" class="alert alert-success mb-30">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Gracias!</strong> Tu mensaje fue enviado exitosamente!
							</div><!-- /Alert Success -->


							<!-- Alert Failed -->
						<div id="alert_failed" class="alert alert-danger mb-30">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>[SMTP] Error!</strong> Error interno del servidor!
							</div><!-- /Alert Failed -->


							<!-- Alert Mandatory -->
						<div id="alert_mandatory" class="alert alert-danger mb-30">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Lo sentimos!</strong> Necesitas completar todos los campos (*) obligatorios!
						</div><!-- /Alert Mandatory -->


							<form action="/elproyecto/public/itinerario" method="POST" role="form">

                {{csrf_field()}}

							  <!--<fieldset>-->
									<!--<input type="hidden" name="action" value="contact_send" />-->

									<div class="row">
										<!--
											<div class="col-md-4">
												<label for="">RIF*</label>
												<input required type="text" maxlength="9" value="{{old('RIF_4')}}" data-format="99-999999-9" data-placeholder="X" class="form-control  masked" name="RIF_4" placeholder="Ingrese el RIF">
											</div>
											-->

											<div class="col-md-4"><!-- select -->
												<label for="">RIF</label>
													<select required class="form-control" name="RIF_4" value="{{old('RIF_4')}}">
															<option value="">--- Seleccione el RIF del prestador ---</option>
															@foreach ($prestadores as $prestadore)
																<option value="{{$prestadore->RIF}}">{{$prestadore->RIF}}</option>
															@endforeach
													</select>
											</div>

											<!--
											<div class="col-md-4">
												<label for="">Ingrese el id del Paquete</label>
												<input required type="text" maxlength="4" value="{{old('id_P_3')}}" class="form-control" name="id_P_3" placeholder="Ingrese el id del Paquete" >
											</div>
											-->

											<div class="col-md-4"><!-- select -->
												<label for="">Id de paquete</label>
													<select required class="form-control" name="id_P_3" value="{{old('id_P_3')}}">
															<option value="">--- Seleccione el id del paquete ---</option>
															@foreach ($paquetes as $paquete)
																<option value="{{$paquete->id}}">{{$paquete->id}}</option>
															@endforeach
													</select>
											</div>

											<!--<div class="col-md-4">
												<label for="">Ingrese el numero de cliente</label>
												<input required type="text" maxlength="4" value="{{old('id_Cliente_1')}}" class="form-control" name="id_Cliente_1" placeholder="Ingrese el numero de cliente">
											</div>
										-->

										<div class="col-md-4"><!-- select -->
											<label for="">Numero de cliente</label>
												<select required class="form-control" name="id_Cliente_1" value="{{old('id_Cliente_1')}}">
														<option value="">--- Seleccione el numero de cliente ---</option>
														@foreach ($turistas as $turista)
															<option value="{{$turista->id}}">{{$turista->id}}</option>
														@endforeach
												</select>
										</div>

									</div>

									<div class="row">
                    <div class="col-md-6">
                      <h5>Fecha de Inicio</h5>
                      <!-- date picker -->
                      <input required type="text" value="{{old('Fecha_Inicio')}}" class="form-control datepicker" name="Fecha_Inicio" data-format="yyyy-mm-dd" data-lang="en" data-RTL="false" placeholder="Ingrese la Fecha de Inicio">

                      <br /><br />

                    </div>

                    <div class="col-md-6">
                      <h5>Fecha Final</h5>
                      <!-- date picker -->
                      <input required type="text" value="{{old('Fecha_Final')}}" class="form-control datepicker" name="Fecha_Final" data-format="yyyy-mm-dd" data-lang="en" data-RTL="false" placeholder="Ingrese la Fecha Final">

                      <br /><br />

                    </div>

									</div>


							<!--	</fieldset>-->

								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Registrar</button>
									</div>
								</div>
							</form>

						</div>
						<!-- /FORM -->




					</div>

				</div>
			</section>
			<!-- /CONTACT -->
