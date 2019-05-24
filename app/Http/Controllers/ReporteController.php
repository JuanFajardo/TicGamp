<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trabajo;
use Carbon\Carbon;

class ReporteController extends Controller
{
    public function reporteActa($id){
      $dato = \App\Prestamo::find($id);
      $pdf = \PDF::loadView('reporte.acta', compact('dato'));
      return $pdf->download('Acta.pdf');
    }

    public function index(){
      return view('reporte.index');
    }

    public function reporte(Request $request){
      $vista = "";
      if ($request->boton  == "Reporte Mensual"){
        $vista = "reporte.reporteMensual";
      }elseif ($request->boton  == "Reporte Semanal"){
        $vista = "reporte.reporteSemanal";
      }elseif ($request->boton  == "Reporte Cuatrimestral"){
        $vista = "reporte.reporteCuatrimestral";
      }else{
        $vista = "reporte.reporteMensual";
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
