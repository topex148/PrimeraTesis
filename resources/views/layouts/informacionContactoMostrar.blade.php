<!-- CONTACT -->
			<section id="contact">
				<div class="container">

					<header class="text-center mb-60">
						<h2>Informacion Contacto</h2>
						<p class="lead font-lato">Esta es la informacion agreagada por el contacto.</p>
						<hr />
					</header>


					<div class="row">

						<!-- FORM -->
						<div class="col-md-12 col-sm-12">

							<h3>Lea la informacion ingresada <strong><em>Cuidadosamente!</em></strong></h3>



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


            <!-- -->
<section>
  <div class="container">
    <div class="row">

      <div class="col-md-4">

        <div class="heading-title heading-border-bottom heading-color">
          <h3>Nombre Completo</h3>
        </div>

        <p>{{$note->nombre}}</p>

      </div>

      <div class="col-md-4">
        <div class="heading-title heading-border-bottom heading-color">
          <h3>Dirección E-mail</h3>
        </div>
        <p>{{$note->correo}}</p>


      </div>

      <div class="col-md-4">
        <div class="heading-title heading-border-bottom heading-color">
          <h3>Teléfono</h3>
        </div>
        <p>{{$note->Telefono}}</p>

      </div>

    </div>

  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-8">

        <div class="heading-title heading-border-bottom heading-color">
          <h3>Asunto</h3>
        </div>

        <p>{{$note->Asunto}}</p>

      </div>

      <div class="col-md-4">
        <div class="heading-title heading-border-bottom heading-color">
          <h3>Area</h3>
        </div>
        <p>{{$note->Area}}</p>


      </div>

    </div>

  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-6">

        <div class="heading-title heading-border-bottom heading-color">
          <h3>Mensaje</h3>
        </div>

        <p>{{$note->Mensaje}}</p>

      </div>

      <div class="col-md-6">

        <div class="heading-title heading-border-bottom heading-color">
          <h3>Archivo</h3>
        </div>

        	<td><img src="{{asset('storage/imagen/contactar/'.$note->archivo)}}" style="width:300px; height:300px; border-radius:50%; margin-right:25px;">	</td>

      </div>

    </div>

  </div>
</section>
<!-- / -->


						</div>
						<!-- /FORM -->




					</div>

				</div>
			</section>
			<!-- /CONTACT -->

      <!-- BUTTON CALLOUT -->
      <a href="/elproyecto/public/Contactos" rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
        <span class="font-lato fs-30">
          Si termino de leer la informacion!
          <strong>Regresar &raquo;</strong>
        </span>
      </a>

      <!-- BUTTON CALLOUT -->
