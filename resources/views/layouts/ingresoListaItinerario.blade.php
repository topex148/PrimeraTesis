<section id="contact">
<div class="container">
	<header class="text-center mb-60">
		<h2>Lista de Itinerarios</h2>
		<p class="lead font-lato">Esta es la lista de los itinerarios registrados en el sistema.</p>
		<hr />
	</header>
<table class="table table-hover">
	<thead>
		<tr>

				<th>Itinerarios</th>
				<!--<th>RIF</th>-->
				<th>ID Paquete</th>
				<th>Numero de cliente</th>
				<th>Editar</th>
				<th>Suspender</th>

		</tr>
	</thead>
	<tbody>
	@foreach ($itinerarios as $notes)
	<tr>
		<td>
				<a>{{$notes->id}} </a>
		</td>
		<!--<td>
				<a>{{$notes->prestadore->RIF}} </a>
		</td>-->
		<td>
				<a>{{$notes->id_P_3}} </a>
		</td>
		<td>
				<a>{{$notes->id_Cliente_1}} </a>
		</td>
		<td>
				<a href="Itinerario/{{$notes->id}}/editar" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Editar </a>
		</td>
		<td>
				<a href="Itinerario/{{$notes->id}}/borrar" class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Suspender </a>
		</td>
	<tr>
	@endforeach
</tbody>
</table>
</div>
</section>

<!-- BUTTON CALLOUT -->
<a href="/elproyecto/public/Itinerario/suspender" rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
  <span class="font-lato fs-30">
    Si quiere revisar los itinerarios que han sido suspendidos!
    <strong>Presionar aqui &raquo;</strong>
  </span>
</a>
