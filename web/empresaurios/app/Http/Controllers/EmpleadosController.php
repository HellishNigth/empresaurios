<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
class EmpleadosController extends Controller
{
    public function getTipEmpleados(){
        $empleados = array();
        $empleados[] = "Cajero(a)";
        $empleados[] = "Conserje";
        $empleados[] = "Reponedor(a)";
        $empleados[] = "secretario(a)";
        return $empleados;
    }
    public function getEmpleados(){
        $productos = Empleado::all();
        return $productos;
    }
    public function crearEmpleado(Request $request){
        $input = $request->all();
        $empleado = new Empleado();
        $empleado->nameE = $input["nameE"];
        $empleado->rutE = $input["rutE"];
        $empleado->puestoE = $input["puestoE"];
        $empleado->experiencia = $input["experiencia"];
        $empleado->save();
        return $empleado;
    }
    public function cancelarEmpleado(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();
        return "ok";
    }
}
