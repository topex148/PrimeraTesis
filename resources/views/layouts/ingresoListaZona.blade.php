<section id="contact">
<div class="container">
	<header class="text-center mb-60">
		<h2>Lista de Zonas</h2>
		<p class="lead font-lato">Esta es la lista de las zonas registradas en el sistema.</p>
		<hr />
	</header>
<table class="table table-hover">
	<thead>
		<tr>

				<th>Zona</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Editar</th>
				<th>Suspender</th>

		</tr>
	</thead>
	<tbody>
	@foreach ($zonas as $notes)
	<tr>
		<td>
				<a>{{$notes->id}} </a>
		</td>
		<td>
				<a>{{$notes->nombre}} </a>
		</td>
		<td>
				<a>{{$notes->Descripcion_Zona}} </a>
		</td>

		<td>
				<a href="Zona/{{$notes->id}}/editar" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Editar </a>
		</td>
		<td>
				<a href="Zona/{{$notes->id}}/borrar" class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Suspender </a>
		</td>
	<tr>
	@endforeach
</tbody>
</table>
</div>
</section>

<!-- BUTTON CALLOUT -->
<a href="/elproyecto/public/Zona/suspender" rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
  <span class="font-lato fs-30">
    Si quiere revisar las zonas que han sido suspendidas!
    <strong>Presionar aqui &raquo;</strong>
  </span>
</a>
