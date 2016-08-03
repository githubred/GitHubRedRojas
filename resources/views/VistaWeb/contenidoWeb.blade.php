@extends('Principal.principalWeb')

@section('content')

        
<!-- =CUERPO= -->
<div class="container" id="cuerpo-0" style="display: block">
    <!--<div class="bs-example" data-example-id="responsive-embed-16by9-iframe-youtube">         
        <div class="embed-responsive embed-responsive-16by9"> 
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NJwDbZwxHYY?wmode=transparent&autoplay=1&theme=dark&controls=1&autohide=1&loop=0&showinfo=0&rel=0&playlist=false&enablejsapi=0" allowfullscreen=""></iframe> 
        </div> 
    </div>-->
    <div id="carousel-example-generic" class="carousel slide col-xs-12 col-sm-10 col-md-8" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/Imagen36.jpg" alt="...">
          <div class="carousel-caption">
            <h1>SLIDE 1</h1>
          </div>
        </div>
        <div class="item">
          <img src="img/Imagen25.jpg" alt="...">
          <div class="carousel-caption">
            <h1>SLIDE 2</h1>
          </div>
        </div>
          <div class="item">
          <img src="img/Imagen30.jpg" alt="...">
          <div class="carousel-caption">
            <h1>SLIDE 3</h1>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <style rel="stylesheet">
        .carousel img{
            width: 100%;
            height: 100%;
        }
    </style>
</div>

<div class="container bs-docs-section" id="cuerpo-1" style="display: none">
    <div class="container">         
        <h2>Organización</h2>
        <h3>¿Quienes Somos?</h3>
        <p>Somos una organizacion...</p>
    </div>
</div>

<div class="container bs-docs-section" id="cuerpo-2" style="display: none">
    <div class="container">         
        <h2>Entidades de Salud y Alianzas estrategicas</h2>
        <h3>Entidades de Salud</h3>
        <p>Somos una organizacion...</p>
        <h3>Alianzas estrategicas</h3>
        <p>Somos una organizacion...</p>
    </div>
</div>

<div class="container bs-docs-section" id="cuerpo-3" style="display: none">
    <div class="container">         
        <h2>AQUI VA EL BANNER PUBLICITARIO</h2>
    </div>
</div>

@stop