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

     <a href="{{ URL::to('usuario/create') }}"> Registrar Nuevo Usuario</a>
    <div id="page-wrapper">
      <div class="graphs">
        <h3 class="blank1">Registro de Usuarios de la Red Oftalmologica</h3>
         <div class="xs tabls">
          <div class="bs-example4" data-example-id="contextual-table">
           <div class="panel-body1">
           <table class="table">
           <thead>
            <tr>
              <th>Codigo</th>
              <th>Modulo</th>
              <th>Nombre Usuario</th>
              <th>Email</th>
              <th>Privilegio</th>
              <th>Estado</th>
              <th>   </th>
            </tr>

            </thead>
            <tbody>
            <?php foreach ($ma_usuario as $mausuario): ?>
            <tr>

              <td>{{$mausuario->ad_us_codigo}}</td>
              <td>{{$mausuario->ad_us_unidad}}</td>
              <td>{{$mausuario->ad_us_segusuarios}}</td>
              <td>{{$mausuario->email}}</td>
              <td>{{$mausuario->ad_us_segnivel}}</td>
              <td>{{$mausuario->ad_us_estado}}</td>
              <td>
                {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $mausuario->id, $attributes = ['class'=>'btn btn-primary'])!!}

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
