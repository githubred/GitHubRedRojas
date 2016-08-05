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
        Session::flash('succesful','');
        return Redirect::to('/principal');
      }
      else {
      Session::flash('message-error','Usuario no registrado.');
      return Redirect::to('/autentificacion');
      }
    }
}
