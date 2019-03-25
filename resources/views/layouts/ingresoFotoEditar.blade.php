<!-- CONTACT -->
			<section id="contact">
				<div class="container">

					<header class="text-center mb-60">
						<h2>Formulario Foto</h2>
						<p class="lead font-lato">Ingresa los datos de la Foto.</p>
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


            <form enctype="multipart/form-data" action="/elproyecto/public/Foto/{{$note ->id}}" method="POST" role="form">

              {{method_field('PATCH')}}
              {{csrf_field()}}



              <div class="row">
                  <div class="col-md-6">
                    <label for="">Titulo</label>
                    <input required type="text" value="{{$note->title}}" class="form-control" name="title" placeholder="Ingrese el Titulo" >
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-12">
                    <label for="">Descripcion</label>
                    <input required type="text" value="{{$note->descripcion}}" class="form-control" name="descripcion" placeholder="Ingrese la Descripcion de la Foto">
                  </div>
              </div>

							<div class="row">
							<div class="col-md-6">

							<label for="">Imagen</label>
							<input class="custom-file-upload"  type="file" name="imagen"  value="{{$note -> imagen}}"  data-btn-text="Seleccionar Archivo" />
							<small class="text-muted block">Tamaño de Archivo Maximo: 10Mb (zip/pdf/jpg/png)</small>

						</div>

						<div class="col-md-6">
							<h5>Galeria</h5>
									<select type="text" value="{{$note ->Galeria}}" class="form-control select2" name="Galeria" placeholder="Ingrese si Pertenece a la Galeria" >
										<option value="{{$note ->Galeria}}">--- Pertene a Galeria? ---</option>
												<option value="SI">Si</option>
									</select>
							</div>
						</div>

						<div class="row">

						<div class="col-md-6"><!-- select -->
							<label for="">RIF Prestador</label>
								<select class="form-control" name="RIF_Prest" value="{{$note->RIF_Prest}}">
										<option value="{{$note->RIF_Prest}}">--- Seleccione el RIF del prestador ---</option>
										@foreach ($prestadores as $prestadore)
											<option value="{{$prestadore->RIF}}">{{$prestadore->RIF}}</option>
										@endforeach
								</select>
						</div>

						<div class="col-md-6"><!-- select -->
							<label for="">ID Atractivo</label>
								<select class="form-control" name="id_Atrac" value="{{$note->id_Atrac}}">
										<option value="{{$note->id_Atrac}}">--- Seleccione el id del atractivo ---</option>
										@foreach ($atractivos as $atractivo)
											<option value="{{$atractivo->id}}">{{$atractivo->id}}</option>
										@endforeach
								</select>
						</div>

						</div>

						<div class="row">

						<div class="col-md-6"><!-- select -->
							<label for="">ID Zona</label>
								<select class="form-control" name="id_Zona" value="{{$note->id_Zona}}">
										<option value="{{$note->id_Zona}}">--- Seleccione el id de la zona ---</option>
										@foreach ($zonas as $zona)
											<option value="{{$zona->id}}">{{$zona->id}}</option>
										@endforeach
								</select>
						</div>

						<div class="col-md-6"><!-- select -->
							<label for="">ID Actividad</label>
								<select class="form-control" name="id_Activi" value="{{$note->id_Activi}}">
										<option value="{{$note->id_Activi}}">--- Seleccione el id de la actividad ---</option>
										@foreach ($actividades as $actividade)
											<option value="{{$actividade->id}}">{{$actividade->id}}</option>
										@endforeach
								</select>
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
      <a href="/elproyecto/public/Foto" rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
        <span class="font-lato fs-30">
          Si no esta seguro sobre esta accion!
          <strong>Regresar &raquo;</strong>
        </span>
      </a>

      <!-- BUTTON CALLOUT -->
