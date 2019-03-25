
<!-- /OWL SLIDER -->
<div class="box-light"><!-- .box-light OR .box-dark -->

  <div class="row">

<div class="col-md-12 col-sm-6">

        <!-- FLIP BOX -->
        <header>
        <div class="box-flip box-icon box-icon-center box-icon-round box-icon-large text-center m-0">
          <div class="front">
            <div class="box1 rad-0">
              <div class="box-icon-title">
                <i class="fa fa-user"></i>
                <h2>{{$note->Nombre_Atractivo}} &ndash; Atractivo {{$note->id}}</h2>
              </div>
              <p>Acá se mostrara toda la Información del atractivo que selecciono.</p>
            </div>
          </div>

          <div class="back">
            <div class="box2 rad-0">
              <h4>Información del Atractivo</h4>
              <hr />
              <p>{{$note->Descripcion_Atractivo}}</p>
            </div>
          </div>
        </div>
        </header>
        <!-- /FLIP BOX -->


<!-- 4 -->
<section>

  <div class="container">
    <div class="row">

<div class="col-lg-9 col-md-9 col-sm-8">
    <h4>Ubicacion:</h4>
    <p>{{$note->Ubicacion}}</p>
</div>
<div class="col-lg-3 col-md-3 col-sm-4">
    @foreach ($zonas as $zona)
    @if (($note->zona_id) == ($zona->id))
    <h4>Pertenece a la Zona {{$note->zona_id}}: {{$zona->nombre}}</h4>
    <a  href='{{asset('listaz/'.$note->zona_id.'/zona')}}' class="btn btn-primary"> CONOCE LA ZONA </a>

    @endif
    @endforeach
</div>


  </div>
  </div>

  <div class="container">

    <br></br>
    <br></br>

    <h4>Galeria de Imagenes</h4>
    <div class="masonry-gallery columns-4 clearfix lightbox " data-img-big="4" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>

      @foreach ($fotos as $foto)
      @if (($note->id) == ($foto->id_Atrac))
      <a class="image-hover" href="{{asset('storage/imagen/foto/'.$foto->imagen)}}">
        <img src="{{asset('storage/imagen/foto/'.$foto->imagen)}}" alt="..." >
      </a>
      @endif
      @endforeach

    </div>

  </div>



</section>
<!-- 4/ -->

</div>

</div>
</div>
