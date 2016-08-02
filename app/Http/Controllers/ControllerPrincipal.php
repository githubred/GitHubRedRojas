<?php

namespace ProyectoRedRojas\Http\Controllers;

use Illuminate\Http\Request;

use ProyectoRedRojas\Http\Requests;

class ControllerPrincipal extends Controller
{
    public function index()
    {
      return view('Principal.principal');
    }
}
