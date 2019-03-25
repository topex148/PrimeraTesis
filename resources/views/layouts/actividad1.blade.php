<!-- FEATURES -->
			<section id="features">
				<div class="container">

					<header class="text-center mb-60">
						<h2>Ahora es tu turno de elegir</h2>
						<h2>Entre todas las actividades ofrecidas en Mérida</h2>
						<p class="lead font-lato">Debido a la geografía de la región, se cuentan con gran cantidad de actividades disponibles para tu entretenimiento. Te ofrecemos servicios de escalado, bicicleta, senderismo y más, todo depende de ti. </p>
						<hr />
					</header>

					<!-- FEATURED BOXES 3 -->
					<div class="row">

						@foreach ($actividades as $actividade)
						<div class="col-md-3 col-xs-6">
							<div class="text-center">
								@foreach ($fotos as $foto)
								@if (($foto->id_Activi) == ($actividade->id))
								<figure class="float">
										<img class="rounded" src="{{asset('storage/imagen/foto/'.$foto->imagen)}}" style="width:75px; height:75px;">
								</figure>
								@endif
								@endforeach
								<h4>{{$actividade->titulo}}</h4>
								<p>{{$actividade->descripcion}}</p>
							</div>
						</div>
						@endforeach


					</div>
					<!-- /FEATURED BOXES 3 -->


				</div>
			</section>
			<!-- /FEATURES -->
