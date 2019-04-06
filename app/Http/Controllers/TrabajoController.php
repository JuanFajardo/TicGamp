<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trabajo;
use Carbon\Carbon;

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
      $dato->sincro     = "true"; //$datos[0]->sincro;
      $dato->save();

      return array(array("respuesta"=>"true"));
    }

    public function reporte(Request $request){
      $vista = "";
      if ($request->boton  == "Reporte Mensual"){
        $vista = "trabajo.reporteMensual";
      }elseif ($request->boton  == "Reporte Semanal"){
        $vista = "trabajo.reporteSemanal";
      }else{
        $vista = "trabajo.reporteMensual";
      }

      $inicio = $request->fecha_inicio;
      $fin = $request->fecha_fin;
/*
      $datos = \DB::table('trabajos')->where('fecha', '>=', Carbon::parse($inicio)->format('Y-m-d') )
                                     ->where('fecha', '<=', Carbon::parse($fin)->format('Y-m-d')    )->get();
*/
      $datos = \DB::table('trabajos')->where('created_at', '>=', Carbon::parse($inicio)->format('Y-m-d') )
                                     ->where('created_at', '<=', Carbon::parse($fin)->format('Y-m-d')    )->get();
      //return $datos[0]->usuario;
      return view($vista, compact('datos', 'inicio', 'fin'));

    }

}
