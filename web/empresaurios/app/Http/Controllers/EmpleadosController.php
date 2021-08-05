<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function getEmpleados(){
        $empleados = array();
        $empleados[] = "Cajero(a)";
        $empleados[] = "Conserje";
        $empleados[] = "Reponedor(a)";
        $empleados[] = "secretario(a)";
        return $empleados;
    }
}
