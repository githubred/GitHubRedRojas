@extends('plantillas.sistema')
@section('content')
<!--3-Cuerpo Formularios Consultas, Registros y Modificaciones-->
<div id="lado-der" class="col-xs-12 col-sm-9 col-md-9" onclick="ocultarMenu();" >
    <h3 class="blank1">Registro de Sedes a la Red Oftalmologica</h3>

  {!!Form::model($sedes,['route'=>['mamedico.update', $mamedicos->id],'method'=>'PUT','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}

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
             <label for="inputEmail">Numero de Colegiatura:</label>
             {!!Form::text('nrocol',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Numero de Colegiatura ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Numero de DNI:</label>
             {!!Form::text('dni',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' dni ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Fecha Nacimiento:</label>
             {!!Form::date('nacfecha', \Carbon\Carbon::now()->subYears(25))!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Direccion</label>
             {!!Form::text('dirdomi',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Direccion ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Telefono</label>
             {!!Form::text('dirfono',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Telefono ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Celular:</label>
             {!!Form::text('dircelu',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Celular ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
                 <label for="inputEmail">Email:</label>
                 {!!Form::email('email',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' ejemplo@gmail.com ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Fecha Registro:</label>
             {!!Form::date('fechregi', \Carbon\Carbon::now())!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Estado</label>
             {{ Form::select('estado', [
                'A' => 'Activo',
                'B' => 'Baja',
                'S' => 'Suspendido']
             ) }}
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


         <button type="submit" class="btn btn-primary">Registrar</button>
         <a href="{{ URL::to('medico') }}">Regresar</a>
         {!!Form::close()!!}

</div>
<!--3-Cuerpo Formularios Consultas, Registros y Modificaciones-->
@stop
