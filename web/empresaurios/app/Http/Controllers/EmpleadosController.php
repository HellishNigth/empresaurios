<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
class EmpleadosController extends Controller
{
    public function getTipEmpleados(){
        $tipempleados = array();
        $tipempleados[] = "Cajero(a)";
        $tipempleados[] = "Conserje";
        $tipempleados[] = "Reponedor(a)";
        $tipempleados[] = "secretario(a)";
        return $tipempleados;
    }
    public function getExEmpleados(){
        $exempleados = array();
        $exempleados[] = "Si";
        $exempleados[] = "No";
        
        return $exempleados;
    }
    public function getEmpleados(){
        $empleados = Empleado::all();
        return $empleados;
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
