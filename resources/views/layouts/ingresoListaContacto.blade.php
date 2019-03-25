<section id="contact">
<div class="container">
	<header class="text-center mb-60">
		<h2>Lista de Contactos</h2>
		<p class="lead font-lato">Esta es la lista de los contactos registrados en el sistema.</p>
		<hr />
	</header>
<table class="table table-hover">
	<thead>
		<tr>

				<th>Contacto</th>
				<th>Nombre</th>
				<th>Correo</th>
        <th>Asunto</th>
        <th>Area</th>
				<th>Informacion</th>
				<th>Suspender</th>

		</tr>
	</thead>
	<tbody>
	@foreach ($contactos as $notes)
	<tr>
		<td>
				<a>{{$notes->id}} </a>
		</td>
		<td>
				<a>{{$notes->nombre}} </a>
		</td>
    <td>
        <a>{{$notes->correo}} </a>
    </td>
    <td>
        <a>{{$notes->Asunto}} </a>
    </td>
    <td>
        <a>{{$notes->Area}} </a>
    </td>

		<td>
				<a href="Contactos/{{$notes->id}}/informacion" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Informacion </a>
		</td>
		<td>
				<a href="Contactos/{{$notes->id}}/borrar" class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Suspender </a>
		</td>
	<tr>
	@endforeach
</tbody>
</table>
</div>
</section>

<!-- BUTTON CALLOUT -->
<a href="/elproyecto/public/Contactos/suspender" rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
  <span class="font-lato fs-30">
    Si quiere revisar los contactos que han sido suspendidos!
    <strong>Presionar aqui &raquo;</strong>
  </span>
</a>
