<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class ProductosController extends Controller
{
    public function getTipProducs(){
        $tipproduc = array();
        $tipproduc[] = "Comida";
        $tipproduc[] = "Limpieza";
        $tipproduc[] = "Medicamento";
        $tipproduc[] = "Electronico";

        return $tipproduc;
    }
    public function getProductos(){
        $productos = Producto::all();
        return $productos;
    }
    public function crearProducto(Request $request){
        $input = $request->all();
        $producto = new Producto();
        $producto->nom_produc = $input["nom_produc"];
        $producto->tipo_produc = $input["tipo_produc"];
        $producto->cantidad = $input["cantidad"];

        $producto->save();
        return $producto;
    }
    public function cancelarProducto(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return "ok";
    }
}
