<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view("/","productos")->name("productos");
Route::view("/ver_productos", "ver_productos")->name("ver_productos");
Route::view("/produc_falt", "produc_falt")->name("produc_falt");
Route::view("/ver_produc_falt", "ver_produc_falt")->name("ver_produc_falt");
Route::view("/proveedor", "proveedor")->name("proveedor");
Route::view("/ver_proveedores", "ver_proveedores")->name("ver_proveedores");
Route::view("/agregar_empleado", "agregar_empleado")->name("agregar_empleado");
Route::view("/ver_empleados", "ver_empleados")->name("ver_empleados");