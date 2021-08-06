<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
class ProveedoresController extends Controller
{
    public function getTipProveedor(){
        $tipprovs = array();
        $tipprovs[] = "Comida";
        $tipprovs[] = "Limpieza";
        $tipprovs[] = "Medicamento";
        $tipprovs[] = "Electronico";
        return $tipprovs;
    }
    public function getFragil(){
        $fragil = array();
        $fragil[] = "Si";
        $fragil[] = "No";
        
        return $fragil;
    }
    public function getProveedores(){
        $proveedores = Proveedor::all();
        return $proveedores;
    }
    public function crearProveedor(Request $request){
        $input = $request->all();
        $proveedor = new Proveedor();
        $proveedor->nameE = $input["nameE"];
        $proveedor->rutE = $input["rutE"];
        $proveedor->puestoE = $input["puestoE"];
        $proveedor->experiencia = $input["experiencia"];
        $proveedor->save();
        return $proveedor;
    }
    public function cancelarProveedor(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();
        return "ok";
    }
}
