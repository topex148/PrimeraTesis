<section id="contact">
<div class="container">
	<header class="text-center mb-60">
		<h2>Lista de Atractivos</h2>
		<p class="lead font-lato">Esta es la lista de los atractivos registrados en el sistema.</p>
		<hr />
	</header>
<table class="table table-hover">
	<thead>
		<tr>

				<th>Atractivo</th>
        <th>Nombre</th>
				<th>Zona</th>
        <th>Ubicacion</th>
				<th>Descripcion</th>
				<th>Editar</th>
				<th>Suspender</th>

		</tr>
	</thead>
	<tbody>
	@foreach ($atractivos as $notes)
	<tr>

		<td>
				<a>{{$notes->id}} </a>
		</td>
    <td>
        <a>{{$notes->Nombre_Atractivo}} </a>
    </td>
		<td>
				<a>{{$notes->zona->nombre}} </a>
		</td>
    <td>
        <a>{{$notes->Ubicacion}} </a>
    </td>
		<td>
				<a>{{$notes->Descripcion_Atractivo}} </a>
		</td>

		<td>
				<a href="Atractivo/{{$notes->id}}/editar" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Editar </a>
		</td>
		<td>
				<a href="Atractivo/{{$notes->id}}/borrar" class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Suspender </a>
		</td>
	<tr>
	@endforeach
</tbody>
</table>
</div>
</section>

<!-- BUTTON CALLOUT -->
<a href="/elproyecto/public/Atractivo/suspender" rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
  <span class="font-lato fs-30">
    Si quiere revisar los atractivos que han sido suspendidos!
    <strong>Presionar aqui &raquo;</strong>
  </span>
</a>
