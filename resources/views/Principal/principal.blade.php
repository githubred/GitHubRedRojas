@extends('plantillas.isede')
@section('content')

<h1>PANEL DE ADMINISTRACION DEL SISTEMA DE LA RED OFTALMOLOGICA</h1>
  <a href="{{ URL::to('usuario') }}"> Usuarios</a> <br>
  <a href="{{ URL::to('sede') }}"> Sedes</a> <br>
  <a href="#"> Medicos</a> <br>
  <a href="#"> Pacientes</a> <br>

@stop
