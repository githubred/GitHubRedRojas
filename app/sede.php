<?php

namespace ProyectoRedRojas;

use Illuminate\Database\Eloquent\Model;

class sede extends Model
{
  protected $fillable = ['se_codigo', 'se_ruc', 'se_razsoc', 'se_representa','se_cargo', 'se_direccion', 'se_fonos', 'se_web'];
  protected $table ='sedes';


}
