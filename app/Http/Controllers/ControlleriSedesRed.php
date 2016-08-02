<?php

namespace ProyectoRedRojas\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoRedRojas\sede;
use Session;
use Redirect;
use ProyectoRedRojas\Http\Requests;

class ControlleriSedesRed extends Controller
{

  public function index()
  {
    $sedes = sede::All();
    return view('iSedeREd.principal',compact('sedes'));
  }

  public function create()
  {
    return view('iSedeREd.create');
  }

  public function store(Request $request)
  {
    $se = new sede;
    $se ->se_codigo       = $request->codigo;
    $se ->se_ruc          = $request->ruc;
    $se ->se_razsoc       = $request->razsoc;
    $se ->se_representa   = $request->representa;
    $se ->se_cargo        = $request->cargo;
    $se ->se_direccion    = $request->direccion;
    $se ->se_fonos        = $request->fonos;
    $se ->se_web          = $request->web;
    $se -> save();

    Session::flash('message', 'Sede registrada correctamente.');
    return Redirect::to('/sede');
  }

  public function edit($id)
  {
    $sede =sede::find($id);

    return view('iSedeRed.update',['sedes'=>$sede]);
  }

  public function update($id, Request $request)
  {

    $sedes =sede::find($id);
    $sedes ->se_codigo       = $request->codigo;
    $sedes ->se_ruc          = $request->ruc;
    $sedes ->se_razsoc       = $request->razsoc;
    $sedes ->se_representa   = $request->representa;
    $sedes ->se_cargo        = $request->cargo;
    $sedes ->se_direccion    = $request->direccion;
    $sedes ->se_fonos        = $request->fonos;
    $sedes ->se_web          = $request->web;
    $sedes ->save();

    Session::flash('message', 'Sede editada correctamente.');
    return Redirect::to('/sede');

  }


}
