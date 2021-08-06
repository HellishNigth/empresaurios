<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\Produc_faltsController;
use App\Http\Controllers\EmpleadosController;
//use App\Http\Controllers\ProveedoresController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Productos

Route::get("tipproduc/get", [ProductosController::class, "getTipProducs"]);
Route::get("productos/get", [ProductosController::class, "getProductos"]);
Route::post("productos/post", [ProductosController::class, "crearProducto"]);
Route::post("productos/delete", [ProductosController::class, "cancelarProducto"]);

//Productos faltantes

Route::get("tipfaltante/get", [Produc_faltsController::class, "getTipFaltantes"]);
Route::get("faltantes/get", [Produc_faltsController::class, "getFaltantes"]);
Route::post("faltantes/post", [Produc_faltsController::class, "crearFaltante"]);
Route::post("faltantes/delete", [Produc_faltsController::class, "eliminarFaltante"]);

//Proveedores

Route::get("proveedores/get", [ProveedoresController::class, "getTipProveedor"]);
Route::get("proveedores1/get", [ProveedoresController::class, "getFragil"]);
Route::post("proveedores2/post", [ProovedoresController::class, "crearProveedor"]);
Route::post("proveedores3/delete", [ProveedoresController::class, "cancelarProveedor"]);


//Empleados

Route::get("tipempleados/get",[EmpleadosController::class, "getTipEmpleados"]);
Route::get("expempleados/get",[EmpleadosController::class, "getExEmpleados"]);
Route::get("empleados/get",[EmpleadosController::class, "getEmpleados"]);
Route::post("empleados/post",[EmpleadosController::class, "crearEmpleado"]);
Route::post("empleados/delete",[EmpleadosController::class, "cancelarEmpleado"]);