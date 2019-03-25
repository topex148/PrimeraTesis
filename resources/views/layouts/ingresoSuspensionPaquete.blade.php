<section id="contact">
<div class="container">
	<header class="text-center mb-60">
		<h2>Lista de Paquetes Suspendidos</h2>
		<p class="lead font-lato">Esta es la lista de los paquetes suspendidos en el sistema.</p>
		<hr />
	</header>
<table class="table table-hover">
	<thead>
		<tr>

				<th>Paquete</th>
				<th>Fecha de Inicio</th>
				<th>Fecha Final</th>
				<th>Restaurar</th>
				<th>Eliminar</th>

		</tr>
	</thead>
	<tbody>
	@foreach ($paquetes as $suspe)
	<tr>
		<td>
				<a>{{$suspe->id}} </a>
		</td>
		<td>
				<a>{{$suspe->Fecha_Inicio}} </a>
		</td>
		<td>
				<a>{{$suspe->Fecha_Final}} </a>
		</td>


    <td>
        <a href="suspender/{{$suspe->id}}/{id}/Restaurar" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Restaurar </a>
    </td>
    <td>
        <a href="suspender/{{$suspe->id}}/{id}/Borrar" class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Eliminar </a>
    </td>

	<tr>
	@endforeach
</tbody>
</table>
</div>
</section>

<!-- BUTTON CALLOUT -->
<a href="/elproyecto/public/Paquete" rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
  <span class="font-lato fs-30">
    Si no esta seguro sobre esta accion!
    <strong>Regresar &raquo;</strong>
  </span>
</a>
