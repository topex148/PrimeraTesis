


  <div class="row grid-color">
    <div class="col-md-3"></div>
    <div class="col-md-6">

        <img class="img-fluid" src="{{ asset("demo_files/images/girl_looking-min.jpg") }}" alt="">

    </div>
    <div class="col-md-3"></div>
  </div>

  <!-- CALLOUT -->
  <div class="alert alert-transparent bordered-bottom m-0">
    <div class="container">

      <div class="row">

        <div class="col-md-9 col-sm-12"><!-- left text -->
          <h3>Si deseas proseguir con la suspension <span><strong>Presiona el boton</strong></span> </h3>
          <p class="font-lato fw-300 fs-20 mb-0">
            Toma tu tiempo en meditar tu accion.
          </p>
        </div><!-- /left text -->


        <div class="col-md-3 col-sm-12 text-right"><!-- right btn -->
          <form action="/elproyecto/public/Itinerario/{{$note->id}}" method="POST" role="form">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-lg"><i class="fa fa-check"></i> Suspender </Button>
          </form>
        </div><!-- /right btn -->

      </div>

    </div>
  </div>
  <!-- /CALLOUT -->

<!-- BUTTON CALLOUT -->
<a href="/elproyecto/public/Itinerario" rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
  <span class="font-lato fs-30">
    Si no esta seguro sobre esta accion!
    <strong>Regresar &raquo;</strong>
  </span>
</a>

<!-- BUTTON CALLOUT -->
