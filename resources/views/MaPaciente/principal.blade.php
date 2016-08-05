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

     <a href="{{ URL::to('paciente/create') }}"> Registrar Nuevo Paciente</a>
    <div id="page-wrapper">
      <div class="graphs">
        <h3 class="blank1">Registro de Pacientes a la Red Oftalmologica</h3>
         <div class="xs tabls">
          <div class="bs-example4" data-example-id="contextual-table">
           <div class="panel-body1">
           <table class="table">
           <thead>
            <tr>
              <th>Codigo</th>
              <th>Nombre Apellidos</th>
              <th>Documento</th>
              <th>Telefono</th>
              <th>Hist. Clinica</th>
              <th>Estado</th>
              <th>   </th>
            </tr>

            </thead>
            <tbody>
            <?php foreach ($mapaciente as $mapacientes): ?>
            <tr>

              <td>{{$mapaciente->pa_codigo}}</td>
              <td>{{$mapaciente->pa_nombre}} {{$mapaciente->pa_apater}} </td>
              <td>{{$mapaciente->ad_dni}}</td>
              <td>{{$mapaciente->email}}</td>
              <td>{{$mapaciente->id}}</td>
              <td>{{$mapaciente->password}}</td>
              <td>
                {!!link_to_route('paciente.edit', $title = 'Editar', $parameters = $mapaciente->id, $attributes = ['class'=>'btn btn-primary'])!!}

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
