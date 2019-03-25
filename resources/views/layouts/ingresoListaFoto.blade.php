<section id="contact">
<div class="container">
	<header class="text-center mb-60">
		<h2>Lista de Fotos</h2>
		<p class="lead font-lato">Esta es la lista de las fotos registradas en el sistema.</p>
		<hr />
	</header>
<table class="table table-hover">
	<thead>
		<tr>

				<th>Foto</th>
				<th>Numero</th>
				<th>Titulo</th>
				<th>Descripcion</th>
				<th>Editar</th>
				<th>Eliminar</th>

		</tr>
	</thead>
	<tbody>
	@foreach ($fotos as $notes)
	<tr>
		<td>
			<img src="{{asset('storage/imagen/foto/'.$notes->imagen)}}" style="width:75px; height:75px; float:left; border-radius:50%; margin-right:25px;">
		</td>
		</td>
		<td>
				<a>{{$notes->id}} </a>
		</td>
		<td>
				<a>{{$notes->title}} </a>
		</td>
		<td>
				<a>{{$notes->descripcion}} </a>
		</td>
		<td>
				<a href="Foto/{{$notes->id}}/editar" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Editar </a>
		</td>
		<td>
	
			<form  action="/elproyecto/public/Foto/{{$notes->id}}"  method="POST" role="form">
					{{ method_field('DELETE') }}
					{{ csrf_field() }}

			  	<button type="button" class="btn btn-danger btn-sm btn-delete"><i class="fa fa-check"></i> Borrar </button>

			</form>
		</td>
	<tr>
	@endforeach
</tbody>
</table>
</div>
</section>

@section('scripts')
		<script>
				$('.btn-delete').on('click', function(e){
						if(confirm('Estas seguro de borrar la foto?')){
								$(this).parents('form:first').submit();
						}
				})
		</script>
@endsection
