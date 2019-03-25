<section id="contact">
<div class="container">
	<header class="text-center mb-60">
		<h2>Lista de Prestadores</h2>
		<p class="lead font-lato">Esta es la lista de los prestadores registrados en el sistema.</p>
		<hr />
	</header>
<table class="table table-hover">
	<thead>
		<tr>

				<th>Foto</th>
				<th>Prestadores</th>
				<th>RIF</th>
				<th>Telefono</th>
				<th>Editar</th>
				<th>Suspender</th>

		</tr>
	</thead>
	<tbody>
	@foreach ($prestadores as $notes)
	<tr>
		<td>
				<img src="{{asset('storage/imagen/prestador/'.$notes->imagen)}}" style="width:75px; height:75px; float:left; border-radius:50%; margin-right:25px;">
		</td>
		<td>
				<a>{{$notes->Nombre}} </a>
		</td>
		<td>
				<a>{{$notes->RIF}} </a>
		</td>
		<td>
				<a>{{$notes->Telefono}} </a>
		</td>
		<td>
				<a href="Prestador/{{$notes->RIF}}/editar" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Editar </a>
		</td>
		<td>
				<a href="Prestador/{{$notes->RIF}}/borrar" class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Suspender </a>
		</td>
	<tr>
	@endforeach
</tbody>
</table>
</div>
</section>

<!-- BUTTON CALLOUT -->
<a href="/elproyecto/public/Prestador/suspender" rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
  <span class="font-lato fs-30">
    Si quiere revisar los prestadores que han sido suspendidos!
    <strong>Presionar aqui &raquo;</strong>
  </span>
</a>
