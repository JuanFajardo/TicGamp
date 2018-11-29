<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrabajoController extends Controller
{
    public function guardar(Request $request){
      return $request->all();
    }
}
