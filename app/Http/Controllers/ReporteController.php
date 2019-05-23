<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function reporteActa($id){
      $dato = \App\Prestamo::find($id);
      $pdf = \PDF::loadView('reporte.acta', compact('dato'));
      return $pdf->download('Acta.pdf');

      //return view('reporte.acta', compact('dato'));
    }
}
