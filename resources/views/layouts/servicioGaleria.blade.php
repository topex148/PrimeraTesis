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

  <!-- FLIP BOX -->
  <div class="box-flip box-icon box-icon-center box-icon-round box-icon-large text-center m-0">
    <div class="front">
      <div class="box1 rad-0">
        <div class="box-icon-title">
          <i class="fa fa-user"></i>
          <h2>{{$note->Nombre}}  &ndash; Perfil</h2>
        </div>
        <p>En esta paginá conseguira toda la información relevante sobre el prestador de servicio y el servicio prestado por el mismo.</p>
      </div>
    </div>

    <div class="back">
      <div class="box2 rad-0">
        <h4>¿QUIÉN SOY?</h4>
        <hr />
        <p>{{$note->DescripcionPrestador}}</p>
      </div>
    </div>
  </div>
  <!-- /FLIP BOX -->


  <div class="box-light"><!-- .box-light OR .box-dark -->

    <div class="row">

      <!-- CONTACT -->

        <div class="col-md-12 col-sm-6">
          <div class="box-inner">

      				<div class="container">

      					<header class="text-center mb-60">
      						<h2>Formulario Foto</h2>
      						<p class="lead font-lato">Ingresa los datos de la foto.</p>
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


      							<form enctype="multipart/form-data" action="/elproyecto/public/servicios/{note}/prestador/galeria" method="POST" role="form" >

                      {{csrf_field()}}

      							  <!--<fieldset>-->
      									<!--<input type="hidden" name="action" value="contact_send" />-->
      									<div class="row">
      											<div class="col-md-6">
      												<label for="">Titulo</label>
      												<input required type="text" value="{{old('title')}}" class="form-control" name="title" placeholder="Ingrese el Titulo" >
      											</div>
      									</div>

                        <div class="row">
                            <div class="col-md-12">
                              <label for="">Descripcion</label>
                              <input required type="text" value="{{old('descripcion')}}" class="form-control" name="descripcion" placeholder="Ingrese la Descripcion de la Foto">
                            </div>
                        </div>

      									<div class="row">
      									<div class="col-md-12">
      										<!-- custom file upload -->
      									<label for="">Imagen</label>
      									<input class="custom-file-upload"  required type="file" name="imagen"  data-btn-text="Seleccionar Archivo" />
      									<small class="text-muted block">Tamaño de Archivo Maximo: 10Mb (zip/pdf/jpg/png)</small>

      								</div>
      								</div>

      								<div class="row">

      								<div class="col-md-12"><!-- select -->
      									<label for="">RIF Prestador</label>
      										<select class="form-control" name="RIF_Prest" value="{{old('RIF_Prest')}}">

      												@foreach ($prestadores as $prestadore)
                              @if (($prestadore->RIF) == ($note->RIF))
      													<option value="{{$prestadore->RIF}}">{{$prestadore->RIF}}</option>
                              @endif
      												@endforeach

      										</select>
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
              </div>
              </div>

      			<!-- /CONTACT -->


    </div>

  </div>


  <form method="post" action="#" class="box-light mt-20"><!-- .box-light OR .box-dark -->
    <div class="box-inner">

      <div class="container">
      	<header class="text-center mb-60">
      		<h2>Lista de Fotos</h2>
      		<p class="lead font-lato">Esta es la lista de las fotos registradas en el sistema.</p>
      		<hr />
      	</header>
      <table class="table table-hover">
      	<thead>
      		<tr>

      				<th>Foto</th>
      				<th>Numero</th>
      				<th>Titulo</th>
      				<th>Descripcion</th>
      				<th>Editar</th>
      				<th>Suspender</th>

      		</tr>
      	</thead>
      	<tbody>
      	@foreach ($fotos as $notes)
        @if (($notes->RIF_Prest) == ($note->RIF))
      	<tr>
      		<td>
      			<img src="{{asset('storage/imagen/foto/'.$notes->imagen)}}" style="width:75px; height:75px; float:left; border-radius:50%; margin-right:25px;">
      		</td>
      		</td>
      		<td>
      				<a>{{$notes->id}} </a>
      		</td>
      		<td>
      				<a>{{$notes->title}} </a>
      		</td>
      		<td>
      				<a>{{$notes->descripcion}} </a>
      		</td>
      		<td>
      				<a href="galeria/{{$notes->id}}/editar" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Editar </a>
      		</td>
      		<td>

              <form  action="/elproyecto/public/servicios/{{$note->RIF}}/prestador/galeria/{{$notes->id}}/borrar"  method="POST" role="form">
                  {{ method_field('DELETE') }}
                  {{ csrf_field() }}

                  <button type="button" class="btn btn-danger btn-sm btn-delete"><i class="fa fa-check"></i> Borrar </button>

              </form>
      		</td>
      	<tr>
          @endif
      	@endforeach
      </tbody>
      </table>
      </div>



    </div>
  </form>


</div>




    </div>
  </div>
</section>
<!-- / -->

@section('scripts')
    <script>
        $('.btn-delete').on('click', function(e){
            if(confirm('Estas seguro de borrar la foto?')){
                $(this).parents('form:first').submit();
            }
        })
    </script>
@endsection

  <!-- POPULAR POSTS -->
<div class="col-md-12 col-sm-6">

    <div class="box-flip box-icon box-icon-center box-icon-round box-icon-large text-center m-0">
        <div class="box-inner">
            <h4>
              IMAGENES
            </h4>

            <div class="container">


              <div class="masonry-gallery columns-5 clearfix lightbox" data-img-big="1" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>


                  @foreach ($fotos as $foto)
                  @if (($foto->RIF_Prest) == ($note->RIF))
                  <a class="image-hover" href="{{asset('storage/imagen/foto/'.$foto->imagen)}}">
                    <img src="{{asset('storage/imagen/foto/'.$foto->imagen)}}" />
                  </a>
                  @endif
                  @endforeach

                </div>

            </div>
        </div>

    </div>

  </div>



  <!-- BUTTON CALLOUT -->
  <a href='{{asset('servicios/'.$note->RIF.'/prestador/galeria/suspender')}}' rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
    <span class="font-lato fs-30">
      Si quiere revisar las fotos que han sido suspendidas!
      <strong>Presionar aqui &raquo;</strong>
    </span>
  </a>
