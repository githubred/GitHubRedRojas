<?php

namespace ProyectoRedRojas\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use ProyectoRedRojas\User;
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
      if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']]))
      {
        return view('Principal.principal');
      }
      else {
      Session::flash('message-error','Datos incorrectos');
      return Redirect::to('/autentificacion');
      }
    }
}
