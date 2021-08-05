<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faltantes;
class Produc_faltsController extends Controller
{
    public function getTipFaltantes(){
        $faltante = array();
        $faltante[] = "Falto alimento";
        $faltante[] = "Falto limpieza";
        $faltante[] = "Falto medicamento";
        $faltante[] = "Falta electronico";
 
        return $faltante;
     }
 
     public function getFaltantes(){
         $faltantes = Faltante::all();
         return $faltantes;
     }
     public function crearFaltante(Request $request){
         $input = $request->all();
         $faltante = new Faltante();
         $faltante->fnom_produc = $input["fnom_produc"];
         $faltante->ftipo_produc = $input["ftipo_produc"];
         $faltante->fcantidad = $input["fcantidad"];
 
         $faltante->save();
         return $faltante;
     }
 
     public function eliminarFaltante(Request $request){
         $input = $request->all();
         $id = $input["id"];
         $faltante = Faltante::findOrFail($id);
         $faltante->delete();
         return "ok";
     }
}
