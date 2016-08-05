@extends('plantillas.sistema')
@section('content')
<!--3-Cuerpo Formularios Consultas, Registros y Modificaciones-->
<div id="lado-der" class="col-xs-12 col-sm-9 col-md-9" onclick="ocultarMenu();" >
    <h3 class="blank1">Registro de Administrativos/Asistenciales a la Red Oftalmologica</h3>

        {!!Form::open(['route'=>'administrativo.store','method'=>'POST','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}

         <div class="form-group">
             <label for="inputEmail">CODIGO:</label>
             {!!Form::text('codigo',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Codigo ','class'=>'form-control'])!!}

         </div>

         <div class="form-group">
             <label for="inputEmail">Apellido Paterno:</label>
             {!!Form::text('apater',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Apellido Paterno ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Apellido Materno:</label>
             {!!Form::text('amater',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Apellido Materno ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Nombre:</label>
             {!!Form::text('nombre',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Nombre ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Numero de DNI:</label>
             {!!Form::text('dni',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' dni ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
                 <label for="inputEmail">Email:</label>
                 {!!Form::email('email',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' ejemplo@gmail.com ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
                 <label for="inputEmail">ID-Gmail</label>
                 {!!Form::password('password',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Id gmail ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Codigo Registrador</label>
             {{ Form::select('codusre', [
                Auth::user()->id => Auth::user()->ad_us_codigo ]
             ) }}
         </div>

         <div class="form-group">
             <label for="inputEmail">Estado</label>
             {{ Form::select('estado', [
                'A' => 'Activo',
                'B' => 'Baja',
                'S' => 'Suspendido']
             ) }}
         </div>

         <button type="submit" class="btn btn-primary">Registrar</button>
         <a href="{{ URL::to('medico') }}">Regresar</a>
         {!!Form::close()!!}

</div>
<!--3-Cuerpo Formularios Consultas, Registros y Modificaciones-->
@stop
