@extends('plantillas.sistema')
@section('content')
<!--3-Cuerpo Formularios Consultas, Registros y Modificaciones-->
<div id="lado-der" class="col-xs-12 col-sm-9 col-md-9" onclick="ocultarMenu();" >
    <h3 class="blank1">Editar el Medico: {{$mamedicos->pr_nombre}} {{$mamedicos->pr_apater}} de la Red Oftalmologica</h3>

  {!!Form::model($mamedicos,['route'=>['medico.update', $mamedicos->id],'method'=>'PUT','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}

         <div class="form-group">
             <label for="inputEmail">CODIGO:</label>
             {!!Form::text('codigo',$mamedicos->pr_codigo,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Codigo ','class'=>'form-control'])!!}

         </div>

         <div class="form-group">
             <label for="inputEmail">Apellido Paterno:</label>
             {!!Form::text('apater',$mamedicos->pr_apater,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Apellido Paterno ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Apellido Materno:</label>
             {!!Form::text('amater',$mamedicos->pr_amater,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Apellido Materno ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Nombre:</label>
             {!!Form::text('nombre',$mamedicos->pr_nombre,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Nombre ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Numero de Colegiatura:</label>
             {!!Form::text('nrocol',$mamedicos->pr_nrocol,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Numero de Colegiatura ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Numero de DNI:</label>
             {!!Form::text('dni',$mamedicos->pr_dni,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' dni ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Fecha Nacimiento:</label>
             {!!Form::date('nacfecha', \Carbon\Carbon::now()->subYears(25))!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Direccion</label>
             {!!Form::text('dirdomi',$mamedicos->pr_dirdomi,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Direccion ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Telefono</label>
             {!!Form::text('dirfono',$mamedicos->pr_dirfono,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Telefono ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Celular:</label>
             {!!Form::text('dircelu',$mamedicos->pr_dircelu,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Celular ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
                 <label for="inputEmail">Email:</label>
                 {!!Form::email('email',$mamedicos->email,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' ejemplo@gmail.com ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Fecha Registro:</label>
             {!!Form::text('email',$mamedicos->pr_fechregi,['required'=>' ','disabled'=>'disabled','autocomplete'=>'off', 'placeholder' =>' ejemplo@gmail.com ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Estado</label>
             {{ Form::select('estado', [
                'A' => 'Activo',
                'B' => 'Baja',
                'S' => 'Suspendido'],$mamedicos->pr_estado
             ) }}
         </div>

         <div class="form-group">
             <label for="inputEmail">Codigo Registrador</label>
             {{ Form::select('codusre', [
                Auth::user()->id => Auth::user()->ad_us_codigo ],$mamedicos->pr_codusre
             ) }}
         </div>


         <button type="submit" class="btn btn-primary">Registrar</button>
         <a href="{{ URL::to('medico') }}">Regresar</a>
         {!!Form::close()!!}

</div>
<!--3-Cuerpo Formularios Consultas, Registros y Modificaciones-->
@stop
