<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listado de usuarios</title>
</head>

<body>

	<h1><?= e($title)?></h1> <!--de esta forma se llama al titulo desde la base de datos-->
	<h2>{{$title}}</h2> <!--de esta forma se llama usando la plantilla blade-->
	
	<ul>
	
		<?php /*?><?php foreach ($users as $user): ?><?php */?>
			<?php /*?><li><?php echo e($user) ?></li> <?php */?><!--con el helper e() se evita que introduzcan codigos html en la pagina, que puedan danar la aplicacion-->
	<?php /*?>	<?php endforeach; ?><?php */?>
	
	<!--de esta forma lo colocamos usando blade y es mas elegante-->
	
	@if (!empty($users))
	
	<ul>
	@foreach ($users as $user)
		<li>{{$user}}</li>

	@endforeach
	</ul>	
	
	@else 
	
		<p>No hay usuarios registrados.</p>
	
	@endif				
				
	</ul>

</body>
</html>