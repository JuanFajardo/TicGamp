<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Prestamo;
class PrestamoController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Prestamo::all();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('prestamo.index', compact('datos'));
    }
  }

  public function store(Request $request){
    $request["fecha_devolucion"]= "";
    $request["fecha_prestamo"]  = date('Y-m-d H:i:s' , strtotime($request->fecha_prestamo));
    $request["id_user"]         = \Auth::user()->id;
    $request["user_presto"]     = \Auth::user()->username;
    $request["user_recogio"]    = "";

    $dato = new Prestamo;
    $dato->responsable    = $request->responsable;
    $dato->unidad         = $request->unidad;
    $dato->fecha_prestamo = $request->fecha_prestamo;
    $dato->codigo_bien    = $request->codigo_bien;
    $dato->detalle        = $request->detalle;
    $dato->id_user        = $request->id_user;
    $dato->user_presto    = $request->user_presto;
    $dato->user_recogio   = "";
    $dato->save();

    return redirect('/Prestamo');
  }

  public function show($id){
    $datos = Prestamo::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){

    $request["user_recogio"]    = \Auth::user()->username;

    $dato = Prestamo::find($id);
    $dato->fecha_devolucion = $request->fecha_devolucion;
    $dato->detalle          = $request->detalle;
    $dato->user_recogio     = $request->user_recogio;
    $dato->id_user          = \Auth::user()->id;
    $dato->save();
    return redirect('/Prestamo');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Prestamo::find($id);
      $dato->delete();
      return "Prestamo Eliminado";
    }else{
      return redirect('/Prestamo');
    }
  }

}
