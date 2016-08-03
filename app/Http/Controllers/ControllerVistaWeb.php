<?php

namespace ProyectoRedRojas\Http\Controllers;

use Illuminate\Http\Request;

use ProyectoRedRojas\Http\Requests;
use ProyectoRedRojas\Http\Controllers\Controller;

class ControllerVistaWeb extends Controller
{
    public function index(){
        return view('VistaWeb.contenidoWeb');
    }
}
