<!-- CONTACT -->
			<section id="contact">
				<div class="container">

					<header class="text-center mb-60">
						<h2>Formulario Turista</h2>
						<p class="lead font-lato">Ingresa los datos del turista.</p>
						<hr />
					</header>


					<div class="row">

						<!-- FORM -->
						<div class="col-md-12 col-sm-12">

							<h3>Verifica los datos antes de seleccionar <strong><em>Actualizar!</em></strong></h3>



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


            <form action="/elproyecto/public/Turista/{{$note ->id}}" method="POST" role="form">

              {{method_field('PATCH')}}
              {{csrf_field()}}



              <div class="row">
                  <div class="col-md-6">
                    <label for="">Pais de Procedencia</label>
                    <input required type="text" value="{{$note->Pais_P}}" class="form-control" name="Pais_P" placeholder="Ingrese el Pais de Procedencia" >
                  </div>
                  <div class="col-md-6">
                    <label for="">Estado de Procedencia</label>
                    <input type="text" value="{{$note->Estado_P}}" class="form-control" name="Estado_P" placeholder="Ingrese el Estado de Procedencia">
                  </div>

              </div>



							<!--	</fieldset>-->

								<div class="row">
									<div class="col-md-12">
										  <br /><br />
										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Actualizar</button>
									</div>
								</div>
							</form>

						</div>
						<!-- /FORM -->




					</div>

				</div>
			</section>
			<!-- /CONTACT -->

      <!-- BUTTON CALLOUT -->
      <a href="/elproyecto/public/Turista" rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
        <span class="font-lato fs-30">
          Si no esta seguro sobre esta accion!
          <strong>Regresar &raquo;</strong>
        </span>
      </a>

      <!-- BUTTON CALLOUT -->
