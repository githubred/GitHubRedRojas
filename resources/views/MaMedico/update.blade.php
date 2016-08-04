@extends('plantillas.sistema')
@section('content')
<!--3-Cuerpo Formularios Consultas, Registros y Modificaciones-->
<div id="lado-der" class="col-xs-12 col-sm-9 col-md-9" onclick="ocultarMenu();" >
    <h3 class="blank1">Editar la Sede {{$sedes->se_razsoc}} de la Red Oftalmologica </h3>
    {!!Form::model($sedes,['route'=>['sede.update', $sedes->id],'method'=>'PUT','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}

         <div class="form-group">
             <label for="inputEmail">CODIGO:</label>
             {!!Form::text('codigo',$sedes->se_codigo,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Codigo ','class'=>'form-control'])!!}

         </div>

         <div class="form-group">
             <label for="inputEmail">RUC:</label>
             {!!Form::text('ruc',$sedes->se_ruc,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' RUC ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Razon Social</label>
             {!!Form::text('razsoc',$sedes->se_razsoc,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Razon Social ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Representante</label>
             {!!Form::text('representa',$sedes->se_representa,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>'Representante ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Cargo</label>
             {!!Form::text('cargo',$sedes->se_cargo,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Cargo ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Direccion</label>
             {!!Form::text('direccion',$sedes->se_direccion,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Direccion ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Telefono</label>
             {!!Form::text('fonos',$sedes->se_fonos,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Telefono ','class'=>'form-control'])!!}
         </div>

         <div class="form-group">
             <label for="inputEmail">Web</label>
             {!!Form::text('web',$sedes->se_web,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Web ','class'=>'form-control'])!!}
         </div>


         <button type="submit" class="btn btn-primary">Entrar</button>
         <a href="{{ URL::to('sede') }}">Regresar</a>
         {!!Form::close()!!}
</div>
<!--3-Cuerpo Formularios Consultas, Registros y Modificaciones-->
@stop
