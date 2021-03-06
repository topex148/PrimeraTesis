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
  						<h2>Formulario itinerarios</h2>
  						<p class="lead font-lato">Ingresa los datos de los itinerarios.</p>
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


  							<form enctype="multipart/form-data" action="/elproyecto/public/servicios/{{$notes->id}}" method="POST" role="form">

                  {{method_field('PATCH')}}
                  {{csrf_field()}}

  							  <!--<fieldset>-->
  									<!--<input type="hidden" name="action" value="contact_send" />-->

  									<div class="row">


  										<div class="col-md-4"><!-- select -->
  											<label for="">RIF</label>
  												<select class="form-control" name="RIF_4" value="{{$notes->RIF_4}}">
  														<option value="{{$notes->RIF_4}}">--- Seleccione el RIF del prestador ---</option>
  														@foreach ($prestadores as $prestadore)
                              @if (($prestadore->RIF) == ($note->RIF))
  															<option value="{{$prestadore->RIF}}">{{$prestadore->RIF}}</option>
                              @endif
  														@endforeach
  												</select>
  										</div>

  										<!--
  											<div class="col-md-4">
  												<label for="">RIF*</label>
  												<input required type="text" maxlength="9" value="{{$note->RIF_4}}" data-format="99-999999-9" data-placeholder="X" class="form-control  masked" name="RIF_4" placeholder="Ingrese el RIF">
  											</div>
  											-->

  											<div class="col-md-4"><!-- select -->
  												<label for="">Id de paquete</label>
  													<select class="form-control" name="id_P_3" value="{{$notes->id_P_3}}">
  															<option value="{{$notes->id_P_3}}">--- Seleccione el id del paquete ---</option>
  															@foreach ($paquetes as $paquete)
  																<option value="{{$paquete->id}}">{{$paquete->id}}</option>
  															@endforeach
  													</select>
  											</div>


  											<!--
  											<div class="col-md-4">
  												<label for="">Ingrese el id del Paquete</label>
  												<input required type="text" maxlength="4" value="{{$note->id_P_3}}" class="form-control" name="id_P_3" placeholder="Ingrese el id del Paquete" >
  											</div>
  											-->

  											<div class="col-md-4"><!-- select -->
  												<label for="">Numero de cliente</label>
  													<select  class="form-control" name="id_Cliente_1" value="{{$notes->id_Cliente_1}}">
  															<option value="{{$notes->id_Cliente_1}}">--- Seleccione el numero de cliente ---</option>
  															@foreach ($turistas as $turista)
  																<option value="{{$turista->id}}">{{$turista->id}}</option>
  															@endforeach
  													</select>
  											</div>

  											<!--
  											<div class="col-md-4">
  												<label for="">Ingrese el numero de cliente</label>
  												<input required type="text" maxlength="4" value="{{$note->id_Cliente_1}}" class="form-control" name="id_Cliente_1" placeholder="Ingrese el numero de cliente">
  											</div>
  										-->

  									</div>

  									<div class="row">
                      <div class="col-md-6">
                        <h5>Fecha de Inicio</h5>
                        <!-- date picker -->
                        <input required type="text" value="{{$notes->Fecha_Inicio}}" class="form-control datepicker" name="Fecha_Inicio" data-format="yyyy-mm-dd" data-lang="en" data-RTL="false" placeholder="Ingrese la Fecha de Inicio">

                        <br /><br />

                      </div>

                      <div class="col-md-6">
                        <h5>Fecha Final</h5>
                        <!-- date picker -->
                        <input required type="text" value="{{$notes->Fecha_Final}}" class="form-control datepicker" name="Fecha_Final" data-format="yyyy-mm-dd" data-lang="en" data-RTL="false" placeholder="Ingrese la Fecha Final">

                        <br /><br />

                      </div>

  									</div>


  							<!--	</fieldset>-->

  								<div class="row">
  									<div class="col-md-12">
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

<!-- BUTTON CALLOUT -->
<a href="/elproyecto/public/Itinerario" rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
  <span class="font-lato fs-30">
    Si no esta seguro sobre esta accion!
    <strong>Regresar &raquo;</strong>
  </span>
</a>

<!-- BUTTON CALLOUT -->
