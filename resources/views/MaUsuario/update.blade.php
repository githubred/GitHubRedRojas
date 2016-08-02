@extends('plantillas.maUsuario')
@section('content')
<h3 class="blank1">Actualizar a {!!$uuser->ad_us_segusuarios!!}</h3>

{!!Form::model($uuser,['route'=>['usuario.update', $uuser->id],'method'=>'PUT','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}

     <div class="form-group">
         <label for="inputEmail">CODIGO:</label>
         {!!Form::text('codigo',$uuser->ad_us_codigo,['required'=>' ','disabled'=>'disabled', 'autocomplete'=>'off', 'placeholder' =>' Codigo ','class'=>'form-control'])!!}

     </div>

     <div class="form-group">
         <label for="inputEmail">Modulo:</label>
         {{ Form::select('unidad', [
            'HC' => 'Historia Clinica',
            'PA' => 'Pacientes',
            'AD' => 'Zona de Administracion'],$uuser->ad_us_unidad
         ) }}
     </div>

     <div class="form-group">
         <label for="inputEmail">Nombre de Usuario</label>
         {!!Form::text('segusuarios',$uuser->ad_us_segusuarios,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Nombre de Usuario ','class'=>'form-control'])!!}
     </div>

     <div class="form-group">
         <label for="inputEmail">Nivel</label>
         {{ Form::select('segnivel', [
            'A' => 'Administrador',
            'S' => 'Supervisor',
            'R' => 'Registrador'],$uuser->ad_us_segnivel
         ) }}
          </div>



     <div class="form-group">
         <label for="inputEmail">Fecha registrado:</label>
         {!!Form::text('codigo',$uuser->ad_us_fechalta,['required'=>' ','disabled'=>'disabled', 'autocomplete'=>'off', 'placeholder' =>' Codigo ','class'=>'form-control'])!!}
     </div>

     <div class="form-group">
         <label for="inputEmail">Registrador</label>
         {!!Form::text('codusal',$uuser->ad_us_codusal,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Registrador ','class'=>'form-control'])!!}
     </div>

     <div class="form-group">
         <label for="inputEmail">Estado</label>
         {{ Form::select('estado', [
            'A' => 'Activo',
            'B' => 'Baja',
            'S' => 'Suspendido'],$uuser->ad_us_estado
         ) }}
     </div>

     <div class="form-group">
         <label for="inputEmail">Email:</label>
         {!!Form::email('email',$uuser->email,['required'=>' ', 'autocomplete'=>'off', 'disabled'=>'disabled','class'=>'form-control'])!!}
     </div>


     <button type="submit" class="btn btn-primary">Editar</button>
     <a href="{{ URL::to('usuario') }}">Regresar</a>
     {!!Form::close()!!}


@stop
