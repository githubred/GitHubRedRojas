<?php

namespace ProyectoRedRojas\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoRedRojas\mapaciente;
use Session;
use Redirect;

use ProyectoRedRojas\Http\Requests;
use ProyectoRedRojas\Http\Controllers\Controller;

class ControllerMaPaciente extends Controller
{
  public function index()
  {
    $mapaciente = maPACIENTE::All();
    return view('MaPaciente.principal',compact('mapaciente'));
  }

  public function create()
  {
    return view('MaPaciente.create');
  }

  public function store(Request $request)
  {
    $ma_paciente = new mapaciente;

    $ma_paciente ->pa_codigo       = $request->codigo;
    $ma_paciente ->pa_apater       = $request->apater;
    $ma_paciente ->pa_amater       = $request->amater;
    $ma_paciente ->pa_nombre       = $request->nombre;
    $ma_paciente ->pa_sexo         = $request->sexo ;
    $ma_paciente ->pa_estciv       = $request->estciv;
    $ma_paciente ->pa_filiacion    = $request->filiacion;
    $ma_paciente ->pa_dni          = $request->dni;
    $ma_paciente ->pa_nacfecha     = $request->nacfecha;
    $ma_paciente ->pa_dirdomi      = $request->dirdomi ;
    $ma_paciente ->pa_dirfono      = $request->dirfono ;
    $ma_paciente ->pa_dircelu      = $request->dircelu;
    $ma_paciente ->pa_fechinsc     = $request->fechinsc;
    $ma_paciente ->pa_fechregi     = $request->fechregi;
    $ma_paciente ->pa_codusre      = $request->codusre;
    $ma_paciente ->pa_estado       = $request->codusre;
    $ma_paciente -> save();



    Session::flash('message', 'Paciente registrado correctamente.');
    return Redirect::to('/paciente');
  }

  public function edit($id)
  {
    $mapaciente =mapciente::find($id);

    return view('MaPaciente.update',['mapacientes'=>$mapaciente]);
  }

  public function update($id, Request $request)
  {

    $ma_paciente =mapaciente::find($id);
    $ma_paciente ->pa_codigo       = $request->codigo;
    $ma_paciente ->pa_apater       = $request->apater;
    $ma_paciente ->pa_amater       = $request->amater;
    $ma_paciente ->pa_nombre       = $request->nombre;
    $ma_paciente ->pa_sexo         = $request->sexo ;
    $ma_paciente ->pa_estciv       = $request->estciv;
    $ma_paciente ->pa_filiacion    = $request->filiacion;
    $ma_paciente ->pa_dni          = $request->dni;
    $ma_paciente ->pa_nacfecha     = $request->nacfecha;
    $ma_paciente ->pa_dirdomi      = $request->dirdomi ;
    $ma_paciente ->pa_dirfono      = $request->dirfono ;
    $ma_paciente ->pa_dircelu      = $request->dircelu;
    $ma_paciente ->pa_fechinsc     = $request->fechinsc;
    $ma_paciente ->pa_fechregi     = $request->fechregi;
    $ma_paciente ->pa_codusre      = $request->codusre;
    $ma_paciente ->pa_estado       = $request->codusre;
    $ma_paciente -> save();

    Session::flash('message', 'Paciente editado correctamente.');
    return Redirect::to('/paciente');

  }
}
