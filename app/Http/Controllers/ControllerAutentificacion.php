<?php

namespace ProyectoRedRojas\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use ProyectoRedRojas\mausuarios;
use ProyectoRedRojas\Http\Requests;
use ProyectoRedRojas\Http\Requests\RequestAutentificacion;

class ControllerAutentificacion extends Controller
{
  
    public function index()
    {
      return view('Autentificacion.principal');
    }

    public function store (RequestAutentificacion $request)
    {
      if(Auth::attempt(['ad_us_segusuarios'=>$request['ad_us_segusuarios'], 'ad_us_segclave'=>$request['ad_us_segclave']]))
      {
        return view('principal');
      }
      else {
      Session::flash('message-error','Datos incorrectos');
      return Redirect::to('/autentificacion');
      }
    }
}
