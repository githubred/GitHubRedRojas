<?php

namespace ProyectoRedRojas;

use Illuminate\Database\Eloquent\Model;

class mamedico extends Model
{
  protected $fillable = [
    'pr_codigo',
    'pr_apater',
    'pr_amater',
    'pr_nombre',
    'pr_nrocol',
    'pr_nacfecha',
    'pr_dirdomi',
    'pr_dirfono',
    'pr_dircelu',
    'email',
    'pr_fechregi',
    'pr_estado',
    'password',
    'pr_codusre'
  ];

  


}
