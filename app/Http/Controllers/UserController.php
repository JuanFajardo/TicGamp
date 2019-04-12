<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index(){
      return view('login.index');
    }

    public function login(Request $request){
      $dato = User::Where('username', '=', $request->username)->where('password', '=', $request->password)->where('imei', '=', $request->imei)->count();
      $respuesta = "";
      if( $dato > 0 ){
        $respuesta = json_encode(["respuesta"=>"true"]);
      }else{
        $respuesta = json_encode(["respuesta"=>"false"]);
      }
      return array($respuesta);
    }

    public function datos($id, $imei){
      $datos = User::Where('id', '=', $id)->where('imei', '=', $imei)
                    ->select('nombre', 'paterno', 'materno')
                    ->get()
      return $datos;
    }
}
