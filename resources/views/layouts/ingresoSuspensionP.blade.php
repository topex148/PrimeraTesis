<section id="contact">
<div class="container">
	<header class="text-center mb-60">
		<h2>Lista de Prestadores Suspendidos</h2>
		<p class="lead font-lato">Esta es la lista de los prestadores suspendidos en el sistema.</p>
		<hr />
	</header>
<table class="table table-hover">
	<thead>
		<tr>

				<th>Foto</th>
				<th>Prestadores</th>
				<th>id</th>
				<th>RIF</th>
				<th>Telefono</th>
				<th>Restaurar</th>
				<th>Eliminar</th>

		</tr>
	</thead>
	<tbody>
	@foreach ($prestadores as $suspe)
	<tr>
		<td>
				<img src="{{asset('storage/imagen/prestador/'.$suspe->imagen)}}" style="width:75px; height:75px; float:left; border-radius:50%; margin-right:25px;">
		</td>
		<td>
				<a>{{$suspe->Nombre}} </a>
		</td>
		<td>
				<a>{{$suspe->id}} </a>
		</td>
		<td>
				<a>{{$suspe->RIF}} </a>
		</td>
		<td>
				<a>{{$suspe->Telefono}} </a>
		</td>

    <td>
        <a href="suspender/{{$suspe->RIF}}/{RIF}/Restaurar" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Restaurar </a>
    </td>
    <td>
        <a href="suspender/{{$suspe->RIF}}/{RIF}/Borrar" class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Eliminar </a>
    </td>

	<tr>
	@endforeach
</tbody>
</table>
</div>
</section>

<!-- BUTTON CALLOUT -->
<a href="/elproyecto/public/Prestador" rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
  <span class="font-lato fs-30">
    Si no esta seguro sobre esta accion!
    <strong>Regresar &raquo;</strong>
  </span>
</a>
