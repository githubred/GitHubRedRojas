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

<a href="{{ URL::to('medico/create') }}"> Registrar Nuevo</a>
    <div id="page-wrapper">
      <div class="graphs">
        <h3 class="blank1">Registro de Medicos En la Red Oftalmologica</h3>
         <div class="xs tabls">
          <div class="bs-example4" data-example-id="contextual-table">
           <div class="panel-body1">
           <table class="table">
           <thead>
            <tr>
              <th>Codigo</th>
              <th>Nombre y Apellidos</th>
              <th>Colegiatura</th>
              <th>DNI</th>
              <th>Celular</th>
              <th>estado</th>
              <th>   </th>
            </tr>

            </thead>
            <tbody>
            <?php foreach ($mamedicos as $mamedico): ?>
            <tr>

              <td>{{$mamedico->pr_codigo}}</td>
              <td>{{$mamedico->pr_nombre}} {{$mamedico->pr_apater}} </td>
              <td>{{$mamedico->pr_nrocol}}</td>
              <td>{{$mamedico->pr_dni}}</td>
              <td>{{$mamedico->pr_dircelu}}</td>
              <td>{{$mamedico->pr_estado}}</td>
              <td>
                {!!link_to_route('medico.edit', $title = 'Editar', $parameters = $mamedico->id, $attributes = ['class'=>'btn btn-primary'])!!}


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
