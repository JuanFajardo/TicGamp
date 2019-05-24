<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
  protected $table    = 'trabajos';
  protected $fillable = ['id', 'usuario', 'funcionario', 'unidad', 'codBienes', 'trabajo', 'fecha', 'firma', 'sincro', 'asignadoA', 'asignadoPor', 'observacion', 'estado', 'id_user'];
}
