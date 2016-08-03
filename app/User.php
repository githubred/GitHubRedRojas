<?php

namespace ProyectoRedRojas;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['ad_us_codigo', 'ad_us_unidad', 'ad_us_segusuarios', 'ad_us_segnivel', 'ad_us_fechalta', 'ad_us_codusal', 'ad_us_estado', 'email','password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
