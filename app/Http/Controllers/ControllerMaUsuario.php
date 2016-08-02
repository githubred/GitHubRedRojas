<?php

namespace ProyectoRedRojas\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoRedRojas\User;
use Session;
use Redirect;
use ProyectoRedRojas\Http\Requests;

class ControllerMaUsuario extends Controller
{
  public function index()
  {
    $ma_usuario = User::All();
    return view('MaUsuario.principal',compact('ma_usuario'));
  }

  public function create()
  {
    return view('MaUsuario.create');
  }

  public function store(Request $request)
  {
    $nuser = new User;
    $nuser ->ad_us_codigo       = $request->codigo;
    $nuser ->ad_us_unidad       = $request->unidad;
    $nuser ->ad_us_segusuarios  = $request->segusuarios;
    $nuser ->ad_us_segnivel     = $request->segnivel;
    $nuser ->ad_us_fechalta     = $request->fechalta;
    $nuser ->ad_us_codusal      = $request->codusal;
    $nuser ->ad_us_estado       = $request->estado;
    $nuser ->email              = $request->email;
    $nuser ->password           = bcrypt($request->password);
    $nuser -> save();




    Session::flash('message', 'Usuario registrado correctamente.');
    return Redirect::to('/usuario');
  }

  public function edit($id)
  {
    $uuser =User::find($id);

    return view('MaUsuario.update',['uuser'=>$uuser]);
    return 'Prueba';
  }

  public function update($id, Request $request)
  {

    $e_user =User::find($id);
    $e_user ->ad_us_unidad       = $request->unidad;
    $e_user ->ad_us_segusuarios  = $request->segusuarios;
    $e_user ->ad_us_segnivel     = $request->segnivel;
    $e_user ->ad_us_codusal      = $request->codusal;
    $e_user ->ad_us_estado       = $request->estado;
    $e_user ->save();

    Session::flash('message', 'Usuario editado correctamente.');
    return Redirect::to('/usuario');

  }
}
