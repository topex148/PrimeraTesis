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
            		<h2>Lista de Itinerarios Suspendidos</h2>
            		<p class="lead font-lato">Esta es la lista de los itinerarios suspendidos en el sistema.</p>
            		<hr />
            	</header>
            <table class="table table-hover">
            	<thead>
            		<tr>

            				<th>Itinerarios</th>
            				<th>ID Paquete</th>
            				<th>Numero de cliente</th>
            				<th>Restaurar</th>
            				<th>Eliminar</th>

            		</tr>
            	</thead>
            	<tbody>
            	@foreach ($itinerarios as $suspe)
              @if (($suspe->RIF_4) == ($note->RIF))
            	<tr>
            		<td>
            				<a>{{$suspe->id}} </a>
            		</td>
            		<td>
            				<a>{{$suspe->id_P_3}} </a>
            		</td>
            		<td>
            				<a>{{$suspe->id_Cliente_1}} </a>
            		</td>


                <td>
                    <a href="suspender/{{$suspe->id}}/{id}/Restaurar" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Restaurar </a>
                </td>
                <td>
                    <a href="suspender/{{$suspe->id}}/{id}/Borrar" class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Eliminar </a>
                </td>

            	<tr>
              @endif
            	@endforeach
            </tbody>
            </table>
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
  <a href='{{asset('servicios/'.$note->RIF.'/prestador/itinerarios')}}' rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
    <span class="font-lato fs-30">
      Si no esta seguro sobre esta accion!
      <strong>Regresar &raquo;</strong>
    </span>
  </a>

  <!-- BUTTON CALLOUT -->
