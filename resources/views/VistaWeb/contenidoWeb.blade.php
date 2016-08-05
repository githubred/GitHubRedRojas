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
          <img src="img/slide1.jpg" alt="...">
        </div>
        <div class="item">
          <img src="img/slide2.jpg" alt="...">
        </div>
          <div class="item">
          <img src="img/slide3.jpg" alt="...">
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
        }
    </style>
</div>

<div class="container bs-docs-section" id="cuerpo-1" style="display: none">
    <div class="container">         
        <h2>Organización</h2>
        <br/>
        <h3>Proyecto Enmarcado</h3>
        <p>
        El Fondo para la Innovación, la Ciencia y la Tecnología (FINCyT) es el Programa que administra fondos para la generación de proyectos innovadores, seleccionando, cofinanciando y acompañando técnicamente a los de mayor potencial, promoviendo el desarrollo productivo y fortaleciendo a los actores del sistema nacional de innovación empresarial, el mismo que financia el proyecto Red Médica Informática Oftalmológicos con Protocolos de Atención Especializados para Patologías Oculares de Altura.
        </p>
        <br/>
        <h3>Clínica Oftalmológica del Centro del Perú</h3>
        <p>
        La Clínica Oftalmológica del Centro del Perú es una Entidad especializada en Servicios de Salud Ocular, que cuenta con una oferta de valor renovada, con infraestructura médica moderna en tecnología y con todas las facilidades para responder a las necesidades de nuestros pacientes, con procedimientos eficientes que se complementan plenamente con un Staff Médico y Asistencial altamente calificado y comprometido con la salud de nuestros pacientes.

        Buscamos ser reconocidos por la accesibilidad y calidad de nuestros servicios, por ser una Clínica en la que los pacientes y sus familiares puedan tener una experiencia positiva en el cuidado de su salud ocular. Deseamos ser percibidos cerca de ustedes, como un grupo humano de profesionales plenamente comprometidos en el cuidado y prevención y con la tecnología médica más moderna para el diagnóstico y tratamiento que ustedes requieran.
        </p>
        <br/>
        <h3>Objetivo de la Red Oftalmológica</h3>
        <p>
        Implementar un Sistema de Información y comunicación de Telemedicina Especializada en Oftalmológica en el Perú, que permita ampliar la cobertura de los servicios de Salud en la Especialidad Oftalmológica y asociados, a través del uso de últimas Tecnologías de Información y Comunicaciones.
        </p>
    </div>
</div>

<div class="container bs-docs-section" id="cuerpo-2" style="display: none">
    <div class="container">         
        <h2>Entidades de Salud y Alianzas estrategicas</h2>
        <br/>
        <h3>•	Entidades de Salud</h3>
        <u>
            <li>Hospitales</li>
            <li>Clínicas Regionales y Nacionales</li>
            <li>Centros de Salud</li>
        </u>
        <br/>
        <h3>•	Alianzas Estratégicas</h3>
        <u>
            <li>Clínica Oftalmológica Rojas.</li>
            <li>Instituto Inca Socrático Rojas.</li>
            <li>ONG.</li>
            <li>Universidad Continental</li>
        </u>
    </div>
</div>

<div class="container bs-docs-section" id="cuerpo-3" style="display: none">
    <div class="container">         
        <h2>AQUI VA EL BANNER PUBLICITARIO</h2>
    </div>
</div>

@stop