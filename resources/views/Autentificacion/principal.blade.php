@extends('plantillas.isede')
@section('content')

{!!Form::open(['route'=>'autentificacion.store','method'=>'POST'])!!}

    <div class="form-group">
        <label for="exampleInputEmail1">Email de Usuario</label>

            {!!Form::text('usuario',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>'Ejemplo@ejemplo.com','class'=>'form-control','id'=>'usuario'])!!}
        </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>

            {!!Form::password('contra',['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>'Ingrese su contraseña','class'=>'form-control','id'=>'contra'])!!}
        </div>

    <center><a href=""><span></span>¿Olvidaste tu contraseña?</a></center>
    <hr>
    <center>
    <button type="submit" >Ingresar</button>
    <a href="#">Cancelar</a>
</center>

{!!Form::close()!!}


@stop
