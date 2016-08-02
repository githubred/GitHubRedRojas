<?php

namespace ProyectoRedRojas;

use Illuminate\Database\Eloquent\Model;

class mausuarios extends Model
{
  protected $fillable = ['ad_us_codigo', 'ad_us_unidad', 'ad_us_segusuarios', 'ad_us_segnivel','ad_us_segclave', 'ad_us_fechalta', 'ad_us_codusal', 'ad_us_estado'];
  protected $table ='mausuarios';

}
