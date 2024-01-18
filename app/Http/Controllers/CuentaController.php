<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuentaController extends Controller
{
    public function index (){
        return "Pruebaaaa";
    }

    public function obtenerDatos (Request $request){
        $id_dato = $request->id_input;

        return response()->json(['resultado' => $id_dato]);
        //$this->$request->ajax()
    }
}
