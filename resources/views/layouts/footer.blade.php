<!-- FOOTER -->
<footer id="footer">
	<div class="container">

		<div class="row mt-60 mb-40 fs-13">

			<!-- col #1 -->
			<div class="col-md-3 col-sm-3">

				<!-- Footer Logo -->
				<img class="footer-logo" src="assets/images/_smarty/logo-126x39-negro.png" alt="" />

				<!-- Small Description -->
				<p>Cualquier duda nos puede contactar por los siguientes medios.</p>

				<!-- Contact Address -->
				<address>
					<ul class="list-unstyled">
						<li class="footer-sprite address">
							PO Box 5101<br>
							Los chorros de milla, Res Tatuy<br>
						</li>
						<li class="footer-sprite phone">
							Telefono: 0424-731-5400
						</li>
						<li class="footer-sprite email">
							<a href="mailto:support@yourname.com">support@yourname.com</a>
						</li>
					</ul>
				</address>
				<!-- /Contact Address -->

			</div>
			<!-- /col #1 -->

			<!-- REDES SOCIALES -->
			<div class="col-md-5 col-sm-5">

				<h4 class="letter-spacing-1">REDES SOCIALES</h4>


				<hr />

				<!-- Social Icons -->
				<div class="clearfix">

					<a href="#" class="social-icon social-icon-sm social-icon-border social-facebook float-left" data-toggle="tooltip" data-placement="top" title="Facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="#" class="social-icon social-icon-sm social-icon-border social-twitter float-left" data-toggle="tooltip" data-placement="top" title="Twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>

					<a href="#" class="social-icon social-icon-sm social-icon-border social-gplus float-left" data-toggle="tooltip" data-placement="top" title="Google plus">
						<i class="icon-gplus"></i>
						<i class="icon-gplus"></i>
					</a>

					<a href="#" class="social-icon social-icon-sm social-icon-border social-linkedin float-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
						<i class="icon-linkedin"></i>
						<i class="icon-linkedin"></i>
					</a>

					<a href="#" class="social-icon social-icon-sm social-icon-border social-rss float-left" data-toggle="tooltip" data-placement="top" title="Rss">
						<i class="icon-rss"></i>
						<i class="icon-rss"></i>
					</a>

				</div>
				<!-- /Social Icons -->

			</div>
			<!-- /REDES SOCIALES-->

			<!-- GALERIA -->
			<div class="col-md-4">
				<h4  class="letter-spacing-1">GALERIA DE FOTOS</h4>

				<div class="footer-gallery lightbox" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>
					@foreach ($fotos as $foto)
					@if (!empty($foto->Galeria))
					<a href="{{asset('storage/imagen/foto/'.$foto->imagen)}}">
						<img src="{{asset('storage/imagen/foto/'.$foto->imagen)}}" width="106" height="70" alt="" />
					</a>
					@endif
					@endforeach
				</div>

			</div>

			</div>
			<!-- /GALERIA-->

		</div>

	</div>

	<div class="copyright">
		<div class="container">

			Copyright &copy; 2018 MERIVENTURA. Todos los derechos reservados.
		</div>
	</div>

</footer>
<!-- /FOOTER -->
