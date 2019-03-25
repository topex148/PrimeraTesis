<!-- CONTACT -->
			<section id="contact">
				<div class="container">

					<header class="text-center mb-60">
						<h2>Formulario Planes</h2>
						<p class="lead font-lato">Ingresa los datos de los planes.</p>
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


							<form action="/elproyecto/public/plane" method="POST" role="form">

                {{csrf_field()}}

                  <div class="row">

										<div class="col-md-4">
											<h5>Publicidad</h5>
													<select required type="text" value="{{old('Publicidad')}}" class="form-control select2" name="Publicidad" placeholder="Ingrese la Publicidad" >
														<option value="">--- Posee Publicidad? ---</option>
																<option value="SI">Si</option>
																<option value="NO">No</option>
													</select>
											</div>

                    <div class="col-md-4">
                      <h5>Fecha de Inicio</h5>
                      <!-- date picker -->
                      <input type="text" value="{{old('Fecha_Inicio')}}" class="form-control datepicker" name="Fecha_Inicio" data-format="yyyy-mm-dd" data-lang="en" data-RTL="false" placeholder="Ingrese la Fecha de Inicio">


                    </div>

                    <div class="col-md-4">
                      <h5>Fecha Final</h5>
                      <!-- date picker -->
                      <input type="text" value="{{old('Fecha_Final')}}" class="form-control datepicker" name="Fecha_Final" data-format="yyyy-mm-dd" data-lang="en" data-RTL="false" placeholder="Ingrese la Fecha Final">


                    </div>

                  </div>




							<!--	</fieldset>-->

								<div class="row">
									<div class="col-md-12">
										  <br /><br />
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
