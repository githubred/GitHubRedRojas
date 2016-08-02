@extends('plantillas.maUsuario')
@section('content')
<h3 class="blank1">Registro de Usuarios a la Red Oftalmologica</h3>

	{!!Form::open(['route'=>'usuario.store','method'=>'POST','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}

     <div class="form-group">
         <label for="inputEmail">CODIGO:</label>
         {!!Form::text('codigo',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Codigo ','class'=>'form-control'])!!}

     </div>

     <div class="form-group">
         <label for="inputEmail">Modulo:</label>
         {{ Form::select('unidad', [
            'HC' => 'Historia Clinica',
            'PA' => 'Pacientes',
            'AD' => 'Zona de Administracion']
         ) }}
     </div>

     <div class="form-group">
         <label for="inputEmail">Nombre de Usuario</label>
         {!!Form::text('segusuarios',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Razon Social ','class'=>'form-control'])!!}
     </div>

     <div class="form-group">
         <label for="inputEmail">Nivel</label>
         {{ Form::select('segnivel', [
            'A' => 'Administrador',
            'S' => 'Supervisor',
            'R' => 'Registrador']
         ) }}
          </div>

     <div class="form-group">
         <label for="inputEmail">Fecha :</label>
         {!!Form::date('fechalta', \Carbon\Carbon::now())!!}
     </div>

     <div class="form-group">
         <label for="inputEmail">Registrador</label>
         {!!Form::text('codusal',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Registrador ','class'=>'form-control'])!!}
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
				 <label for="inputEmail">Email:</label>
				 {!!Form::email('email',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' ejemplo@gmail.com ','class'=>'form-control'])!!}
		 </div>

		 <div class="form-group">
				 <label for="inputEmail">ID-Gmail</label>
				 {!!Form::password('password',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Id gmail ','class'=>'form-control'])!!}
		 </div>

     <button type="submit" class="btn btn-primary">Entrar</button>
     <a href="{{ URL::to('usuario') }}">Regresar</a>
     {!!Form::close()!!}


@stop
