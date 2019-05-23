<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table = "prestamos";
    protected $fillable = ['id', 'responsable', 'unidad', 'fecha_prestamo', 'fecha_devolucion', 'codigo_bien', 'detalle', 'id_user', 'id_user_presto','id_user_recogio'];
}
