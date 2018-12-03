<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trabajo;
class TrabajoController extends Controller
{

    public function index(){
      $datos = Trabajo::all();
      return view('trabajo.index', compact('datos'));
    }

    public function guardar(Request $request){
      $datos = json_decode($request->cadena);
      $dato = new Trabajo;
      $dato->usuario    = $datos[0]->usuario;
      $dato->funcionario= $datos[0]->funcionario;
      $dato->unidad     = $datos[0]->unidad;
      $dato->codBienes  = $datos[0]->codBienes;
      $dato->trabajo    = $datos[0]->trabajo;
      $dato->fecha      = $datos[0]->fecha;
      $dato->firma      = $datos[0]->firma;
      $dato->sincro     = "true";//$datos[0]->sincro;
      $dato->save();

      return array(array("respuesta"=>"true"));
    }
}
