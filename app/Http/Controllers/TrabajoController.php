<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trabajo;
use Carbon\Carbon;

class TrabajoController extends Controller
{

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

    public function index(){
      $datos = Trabajo::all();
      return view('trabajo.index', compact('datos'));
    }

    public function store(Request $request){

      $funcionario = \App\Funcionario::where('funcionario', '=', $request->funcionario)->count();
      if( !$funcionario ){
        $dato = new \App\Funcionario;
        $dato->funcionario = $request->funcionario;
        $dato->save();
      }

      $unidad = \App\Unidad::where('unidad', '=', $request->unidad)->count();;
      if( !$unidad ){
        $dato = new \App\Unidad;
        $dato->unidad = $request->unidad;
        $dato->save();
      }

      $request["usuario"] = \Auth::user()->username;
      $request["id_user"] = \Auth::user()->id;
      $request["firma"]   = "no";
      $request["sincro"]  = "SI";
      $request["estado"]  = "entregado";

      $request["fecha"] = date('Y-m-d H:i:s', strtotime($request->fecha." ".date('H:i:s')));

      if(\Auth::user()->grupo != "2"){
        $request["asignadoA"]  = \Auth::user()->username;
        $request["asignadoPor"]  = \Auth::user()->username;
      }else{
        $request["asignadoA"]   = \Auth::user()->username;
        $request["asignadoPor"] = \Auth::user()->username;
      }

      $dato = new Trabajo;
      $dato->fill( $request->all() );
      $dato->save();

      return redirect('/Trabajo');
    }

    public function show($id){
      $datos = Trabajo::Where('id', '=', $id)->get();
      return $datos;
    }

    public function update(Request $request, $id){

      $request["user_recogio"]    = \Auth::user()->username;

      $dato = Trabajo::find($id);
      $dato->fecha_devolucion = $request->fecha_devolucion;
      $dato->detalle          = $request->detalle;
      $dato->user_recogio     = $request->user_recogio;
      $dato->id_user          = \Auth::user()->id;
      $dato->save();
      return redirect('/Prestamo');
    }

    public function destroy(Request $request, $id){
      if( $request->ajax() ){
        $dato = Trabajo::find($id);
        $dato->delete();
        return "Trabajo Eliminado";
      }else{
        return redirect('/Trabajo');
      }
    }


}
