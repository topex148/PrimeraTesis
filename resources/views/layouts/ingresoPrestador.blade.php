<!-- CONTACT -->
			<section id="contact">
				<div class="container">

					<header class="text-center mb-60">
						<h2>Formulario Prestadores</h2>
						<p class="lead font-lato">Ingresa los datos de los prestadores de servicios.</p>
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


							<form enctype="multipart/form-data" action="/elproyecto/public/prestador" method="POST" role="form">

                {{csrf_field()}}

							  <!--<fieldset>-->
									<!--<input type="hidden" name="action" value="contact_send" />-->

									<div class="row">
											<div class="col-md-4">
												<label for="">RIF*</label>
												<input required type="text" maxlength="9" value="{{old('RIF')}}"  data-format="99-999999-9" data-placeholder="X" class="form-control  masked" name="RIF" placeholder="Ingrese el RIF">
											</div>
											<div class="col-md-4">
												<label for="">RTN</label>
												<input required type="text" maxlength="5" value="{{old('RTN')}}" class="form-control masked" name="RTN" data-format="99999" data-placeholder="X" placeholder="Ingrese el RTN" >
											</div>
											<div class="col-md-4">
												<label for="">Teléfono </label>
												<div class="fancy-form">
												<i class="fa fa-phone-square"></i>
												<input required type="text"  maxlength="10" class="form-control masked" value="{{old('Telefono')}}" data-format="(999) 999-9999" data-placeholder="X" name="Telefono" placeholder="Ingrese el Teléfono">
												</div>
											</div>
										<!--	<div class="col-md-4">
												<label for="">Teléfono </label>
												<input required type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10"  value="{{old('Telefono')}}" class="form-control" name="Telefono" placeholder="Ingrese el Teléfono">
											</div>-->
									</div>



									<div class="row">



                    <div class="col-md-6">
                      <label for="">Nombre</label>
                      <input required type="text"  maxlength="30" value="{{old('Nombre')}}" class="form-control" name="Nombre" placeholder="Ingrese el Nombre">
                    </div>

												<div class="col-md-6">
													<!-- custom file upload -->
												<label for="">Imagen Perfil Prestador</label>
												<input class="custom-file-upload"  required type="file" name="imagen"  data-btn-text="Seleccionar Archivo" />
												<small class="text-muted block">Tamaño de Archivo Maximo: 10Mb (zip/pdf/jpg/png)</small>

											</div>

									</div>

									<div class="row">

										<div class="col-md-12">
											<label for="">Descripcion del Servicio</label>
											<input required type="text"  maxlength="500" value="{{old('DescripcionServicio')}}" class="form-control" name="DescripcionServicio" placeholder="Ingrese la Descripcion del Servicio">
										</div>

									</div>

									<div class="row">

										<div class="col-md-12">
											<label for="">Descripcion del Prestador</label>
											<input required type="text"  maxlength="500" value="{{old('DescripcionPrestador')}}" class="form-control" name="DescripcionPrestador" placeholder="Ingrese la Descripcion del Prestador">
										</div>

									</div>




                  <div class="row">
                      <div class="col-md-4">
                        <label for="">Facebook</label>
                        <input required type="email" value="{{old('Facebook')}}" class="form-control" name="Facebook" placeholder="Ingrese el Facebook" >
                      </div>
                      <div class="col-md-4">
                        <label for="">Twitter</label>
                        <input required type="email" value="{{old('Twitter')}}" class="form-control" name="Twitter" placeholder="Ingrese el Twitter">
                      </div>
                      <div class="col-md-4">
                        <label for="">Instagram</label>
                        <input required type="email" value="{{old('Instagram')}}" class="form-control" name="Instagram" placeholder="Ingrese el Instagram" >
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
