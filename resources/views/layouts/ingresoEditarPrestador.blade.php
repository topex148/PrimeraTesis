<!-- -->
<section>
  <div class="container">
    <div class="row">


      <!-- LEFT -->
<div class="col-lg-3 col-md-3 col-sm-4">

  <div class="thumbnail text-center">
    <img class="img-fluid" src="{{asset('storage/imagen/prestador/'.$note->imagen)}}" alt="" />
    <h2 class="fs-18 mt-10 mb-0">{{$note->Nombre}}</h2>
    <h3 class="fs-11 mt-0 mb-10 text-muted">PRESTADOR DE SERVICIO</h3>
  </div>


  <!-- SIDE NAV -->
  <ul class="side-nav list-group mb-60" id="sidebar-nav">
    <li class="list-group-item active"><a href='{{asset('servicios/'.$note->RIF.'/prestador')}}'><i class="fa fa-eye"></i> PERFIL</a></li>
    @if(\Auth::check())
    <li class="list-group-item"><a href='{{asset('servicios/'.$note->RIF.'/prestador/galeria')}}'><i class="fa fa-tasks"></i> GALERIA</a></li>
    <li class="list-group-item"><a href='{{asset('servicios/'.$note->RIF.'/prestador/comentarios')}}'><i class="fa fa-comments-o"></i> COMENTARIOS</a></li>
    <li class="list-group-item"><a href='{{asset('servicios/'.$note->RIF.'/prestador/itinerarios')}}'><i class="fa fa-tasks"></i> ITINERARIOS</a></li>
    <li class="list-group-item"><a href='{{asset('servicios/'.$note->RIF.'/prestador/configuracion')}}'><i class="fa fa-gears"></i> CONFIGURACION</a></li>
    @endif

  </ul>
  <!-- /SIDE NAV -->


  <!-- info -->
  <div class="box-light mb-30"><!-- .box-light OR .box-light -->

    <!-- /info -->

    <div class="text-muted">
      <h2 class="fs-18 text-muted mb-6"><b>Redes Sociales</b> </h2>
      <!-- <p>Estas son las redes sociales donde puedes contactar conmigo.</p>-->

      <ul class="list-unstyled m-0">
        <li class="mb-10"><i class="fa fa-globe fw-20 hidden-xs-down hidden-sm"></i> <a href="http://www.stepofweb.com">www.stepofweb.com</a></li>
        <li class="mb-10"><i class="fa fa-facebook fw-20 hidden-xs-down hidden-sm"></i> <a href="http://www.facebook.com/stepofweb">stepofweb</a></li>
        <li class="mb-10"><i class="fa fa-twitter fw-20 hidden-xs-down hidden-sm"></i> <a href="http://www.twitter.com/stepofweb">@stepofweb</a></li>
      </ul>
    </div>

  </div>

</div>


<!-- RIGHT -->
<div class="col-lg-9 col-md-9 col-sm-8">


  <div class="box-light"><!-- .box-light OR .box-dark -->

    <div class="row">

      <!-- CONTACT -->

        <div class="col-md-12 col-sm-6">
        <div class="box-inner">

				<div class="container">

					<header class="text-center mb-60">
						<h2>Formulario Prestadores</h2>
						<p class="lead font-lato">Ingresa los datos de los prestadores de servicios.</p>
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


							<form enctype="multipart/form-data" action="/elproyecto/public/servicios/{{$note ->RIF}}/prestador/configuracion" method="POST" role="form">

                {{method_field('PATCH')}}

                {{csrf_field()}}

							  <!--<fieldset>-->
									<!--<input type="hidden" name="action" value="contact_send" />-->

									<div class="row">
											<div class="col-md-4">
												<label for="">RIF*</label>
												<input required type="text" maxlength="9" value="{{$note -> RIF}}"  data-format="99-999999-9" data-placeholder="X" class="form-control  masked" name="RIF" placeholder="Ingrese el RIF">
											</div>
											<div class="col-md-4">
												<label for="">RTN</label>
												<input required type="text" maxlength="5" value="{{$note -> RTN}}" class="form-control masked" data-format="99999" data-placeholder="X" name="RTN" placeholder="Ingrese el RTN" >
											</div>
											<div class="col-md-4">
												<label for="">Teléfono </label>
												<div class="fancy-form">
												<i class="fa fa-phone-square"></i>
												<input required type="text" maxlength="10" class="form-control masked"  value="{{$note -> Telefono}}" data-format="(999) 999-9999" data-placeholder="X"  name="Telefono" placeholder="Ingrese el Teléfono">
												</div>
											</div>
									</div>

									<div class="row">
                    <div class="col-md-6">
                      <label for="">Nombre</label>
                      <input required type="text" maxlength="30" value="{{$note -> Nombre}}" class="form-control" name="Nombre" placeholder="Ingrese el Nombre">
                    </div>


										<div class="col-md-6">

										<label for="">Imagen Perfil Prestador</label>
										<input class="custom-file-upload"  type="file" name="imagen"  value="{{$note -> imagen}}"  data-btn-text="Seleccionar Archivo" />
										<small class="text-muted block">Tamaño de Archivo Maximo: 10Mb (zip/pdf/jpg/png)</small>

									</div>

                  </div>

									<div class="row">

										<div class="col-md-12">
											<label for="">Descripcion del Servicio</label>
											<input required type="text"  maxlength="500"  value="{{$note -> DescripcionServicio}}" class="form-control" name="DescripcionServicio" placeholder="Ingrese la Descripcion del Servicio">
										</div>

									</div>

									<div class="row">

										<div class="col-md-12">
											<label for="">Descripcion del Prestador</label>
											<input required type="text"  maxlength="500"  value="{{$note -> DescripcionPrestador}}" class="form-control" name="DescripcionPrestador" placeholder="Ingrese la Descripcion del Prestador">
										</div>

									</div>



                  <div class="row">
                      <div class="col-md-4">
                        <label for="">Facebook</label>
                        <input required type="email" value="{{$note -> Facebook}}" class="form-control" name="Facebook" placeholder="Ingrese el Facebook" >
                      </div>
                      <div class="col-md-4">
                        <label for="">Twitter</label>
                        <input required type="email" value="{{$note -> Twitter}}" class="form-control" name="Twitter" placeholder="Ingrese el Twitter">
                      </div>
                      <div class="col-md-4">
                        <label for="">Instagram</label>
                        <input required type="email" value="{{$note -> Instagram}}" class="form-control" name="Instagram" placeholder="Ingrese el Instagram" >
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


      </div>
      </div>

      <!-- /CONTACT -->


      </div>

      </div>

      </div>



    </div>
  </div>
</section>
<!-- / -->
