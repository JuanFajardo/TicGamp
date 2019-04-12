<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
      'id', 'username', 'password', 'titulo', 'nombre', 'paterno', 'materno', 'ci', 'imei', 'cargo', 'grupo'
      //'id', 'username', 'password', 'nombre', 'paterno', 'materno', 'ci', 'cargo'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
}
