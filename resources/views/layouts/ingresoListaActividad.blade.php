<section id="contact">
<div class="container">
	<header class="text-center mb-60">
		<h2>Lista de Actividades</h2>
		<p class="lead font-lato">Esta es la lista de las actividades registradas en el sistema.</p>
		<hr />
	</header>
<table class="table table-hover">
	<thead>
		<tr>

				<th>Actividad</th>
				<th>Titulo</th>
				<th>Descripcion</th>
				<th>Editar</th>
				<th>Suspender</th>

		</tr>
	</thead>
	<tbody>
	@foreach ($actividades as $notes)
	<tr>
		<td>
				<a>{{$notes->id}} </a>
		</td>
		<td>
				<a>{{$notes->titulo}} </a>
		</td>
		<td>
				<a>{{$notes->descripcion}} </a>
		</td>
		<td>
				<a href="actividades/{{$notes->id}}/editar" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Editar </a>
		</td>
		<td>
				<a href="actividades/{{$notes->id}}/borrar" class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Suspender </a>
		</td>
	<tr>
	@endforeach
</tbody>
</table>
</div>
</section>

<!-- BUTTON CALLOUT -->
<a href="/elproyecto/public/actividades/suspender" rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
  <span class="font-lato fs-30">
    Si quiere revisar los planes que han sido suspendidos!
    <strong>Presionar aqui &raquo;</strong>
  </span>
</a>
