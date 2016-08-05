<?php

namespace ProyectoRedRojas\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoRedRojas\maadministrativoasistencial;
use Session;
use Redirect;
use ProyectoRedRojas\Http\Requests;
use ProyectoRedRojas\Http\Controllers\Controller;

class ControllerMaAdministrativos extends Controller
{
  public function index()
  {
    $maadministrativo = maadministrativoasistencial::All();
    return view('MaAdministrativo.principal',compact('maadministrativo'));
  }

  public function create()
  {
    return view('MaAdministrativo.create');
  }

  public function store(Request $request)
  {
    $ma_administrativo = new maadministrativoasistencial;
    $ma_administrativo ->ad_codigo       = $request->codigo;
    $ma_administrativo ->ad_apater       = $request->apater;
    $ma_administrativo ->ad_amater       = $request->amater;
    $ma_administrativo ->ad_nombre       = $request->nombre;
    $ma_administrativo ->ad_dni          = $request->dni;
    $ma_administrativo ->email           = $request->email;
    $ma_administrativo ->password        = $request->password;
    $ma_administrativo ->ad_estado       = $request->estado;
    $ma_administrativo ->pr_codusre      = $request->codusre;
    $ma_administrativo -> save();

    Session::flash('message', 'Administrativo registrado correctamente.');
    return Redirect::to('/administrativo');
  }

  public function edit($id)
  {
    $maadministrativo =maadministrativoasistencial::find($id);

    return view('MaAdministrativo.update',['maadministrativos'=>$maadministrativo]);
  }

  public function update($id, Request $request)
  {

    $up_administrativo =maadministrativoasistencial::find($id);
    $up_administrativo ->ad_apater       = $request->apater;
    $up_administrativo ->ad_amater       = $request->amater;
    $up_administrativo ->ad_nombre       = $request->nombre;
    $up_administrativo ->ad_dni          = $request->dni;
    $up_administrativo ->ad_estado       = $request->estado;
    $up_administrativo -> save();

    Session::flash('message', 'Administrativo editado correctamente.');
    return Redirect::to('/administrativo');

  }
}
