<?php

namespace ProyectoRedRojas\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoRedRojas\mamedico;
use Session;
use Redirect;
use ProyectoRedRojas\Http\Requests;
use ProyectoRedRojas\Http\Controllers\Controller;

class ControllerMaMedico extends Controller
{
  public function index()
  {
    $mamedicos = mamedico::All();
    return view('MaMedico.principal',compact('mamedicos'));
  }

  public function create()
  {
    return view('MaMedico.create');
  }

  public function store(Request $request)
  {
    $ma_medico = new mamedico;
    $ma_medico ->pr_codigo       = $request->codigo;
    $ma_medico ->pr_apater       = $request->apater;
    $ma_medico ->pr_amater       = $request->amater;
    $ma_medico ->pr_nombre       = $request->nombre;
    $ma_medico ->pr_nrocol       = $request->nrocol;
    $ma_medico ->pr_dni          = $request->dni;
    $ma_medico ->pr_nacfecha     = $request->nacfecha;
    $ma_medico ->pr_dirdomi      = $request->dirdomi;
    $ma_medico ->pr_dirfono      = $request->dirfono;
    $ma_medico ->pr_dircelu      = $request->dircelu;
    $ma_medico ->email           = $request->email;
    $ma_medico ->pr_fechregi     = $request->fechregi;
    $ma_medico ->pr_estado       = $request->estado;
    $ma_medico ->password        = $request->password;
    $ma_medico ->pr_codusre      = $request->codusre;
    $ma_medico -> save();




    Session::flash('message', 'Medico registrado correctamente.');
    return Redirect::to('/sede');
  }

  public function edit($id)
  {
    $mamedico =mamedico::find($id);

    return view('MaMedico.update',['mamedicos'=>$mamedico]);
  }

  public function update($id, Request $request)
  {

    $ma_medico =mamedico::find($id);
    $ma_medico ->pr_apater       = $request->apater;
    $ma_medico ->pr_amater       = $request->amater;
    $ma_medico ->pr_nombre       = $request->nombre;
    $ma_medico ->pr_nrocol       = $request->nrocol;
    $ma_medico ->pr_dni          = $request->dni;
    $ma_medico ->pr_nacfecha     = $request->nacfecha;
    $ma_medico ->pr_dirdomi      = $request->dirdomi;
    $ma_medico ->pr_dirfono      = $request->dirfono;
    $ma_medico ->pr_dircelu      = $request->dircelu;
    $ma_medico ->pr_estado       = $request->estado;
    $ma_medico -> save();

    Session::flash('message', 'Medico editado correctamente.');
    return Redirect::to('/medico');

  }
}
