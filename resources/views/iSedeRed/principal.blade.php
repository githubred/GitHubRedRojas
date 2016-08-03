@extends('plantillas.sistema')
@section('content')
<!--3-Cuerpo Formularios Consultas, Registros y Modificaciones-->
<div id="lado-der" class="col-xs-12 col-sm-9 col-md-9" onclick="ocultarMenu();" >
    @if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role = "alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    {{Session::get('message')}}
</div>
@endif

<a href="{{ URL::to('sede/create') }}"> Registrar Nuevo</a>
    <div id="page-wrapper">
      <div class="graphs">
        <h3 class="blank1">Registro de Sedes En la Red Oftalmologica</h3>
         <div class="xs tabls">
          <div class="bs-example4" data-example-id="contextual-table">
           <div class="panel-body1">
           <table class="table">
           <thead>
            <tr>
              <th>Codigo</th>
              <th>RUC</th>
              <th>Razon Social</th>
              <th>Representante</th>
              <th>Telefono</th>
              <th>Sitio Web</th>
              <th>   </th>
            </tr>

            </thead>
            <tbody>
            <?php foreach ($sedes as $sede): ?>
            <tr>

              <td>{{$sede->se_codigo}}</td>
              <td>{{$sede->se_ruc}}</td>
              <td>{{$sede->se_razsoc}}</td>
              <td>{{$sede->se_representa}}</td>
              <td>{{$sede->se_fonos}}</td>
              <td>{{$sede->se_web}}</td>
              <td>
                {!!link_to_route('sede.edit', $title = 'Editar', $parameters = $sede->id, $attributes = ['class'=>'btn btn-primary'])!!}


              </td>
            </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!--3-Cuerpo Formularios Consultas, Registros y Modificaciones-->
@stop


