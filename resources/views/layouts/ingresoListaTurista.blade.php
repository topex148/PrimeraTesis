<section id="contact">
<div class="container">
	<header class="text-center mb-60">
		<h2>Lista de Turistas</h2>
		<p class="lead font-lato">Esta es la lista de los turistas registrados en el sistema.</p>
		<hr />
	</header>
<table class="table table-hover">
	<thead>
		<tr>

				<th>Turista</th>
				<th>Pais de Procedencia</th>
				<th>Estado de Procedencia</th>
				<th>Editar</th>
				<th>Suspender</th>

		</tr>
	</thead>
	<tbody>
	@foreach ($turistas as $notes)
	<tr>
		<td>
				<a>{{$notes->id}} </a>
		</td>
		<td>
				<a>{{$notes->Pais_P}} </a>
		</td>
		<td>
				<a>{{$notes->Estado_P}} </a>
		</td>
		<td>
				<a href="Turista/{{$notes->id}}/editar" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Editar </a>
		</td>
		<td>
				<a href="Turista/{{$notes->id}}/borrar" class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Suspender </a>
		</td>
	<tr>
	@endforeach
</tbody>
</table>
</div>
</section>

<!-- BUTTON CALLOUT -->
<a href="/elproyecto/public/Turista/suspender" rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
  <span class="font-lato fs-30">
    Si quiere revisar los turistas que han sido suspendidos!
    <strong>Presionar aqui &raquo;</strong>
  </span>
</a>
