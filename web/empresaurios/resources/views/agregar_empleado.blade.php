@extends('layouts.master')

@section('contenido')
<div class="row mt-5">
    <div class="col-12 col-md-6 col-lg-5 mx-auto">
        <div class="card">
            <div class="card-header bg-danger text-dark">
                <span>Ingresar Empleado</span>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name-txt" class="form-label">Nombre del Empleado</label>
                    <input type="text" id="nameEmpleado" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="rut" class="form-label">Rut del Empleado</label>
                    <input type="text" id="rut" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="puestoempleado" class="form-label">Puesto del trabajador</label>
                    <select class="form-select" id="puesto">
                    </select>
                </div>
                <div class="mb-3">
                    <label for="experiencia-select" class="form-label">¿Tiene Experiencia?</label>
                    <select name="form-select" id="experiencia"></select>
                </div>
            </div>
            <div class="card-footer d-grid gap-1">
                <button id="esta" class="btn btn-info">Registrar</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section("javascript")
    <script src="{{asset('js/servicios/empleadosService.js')}}"></script>
    <script src="{{asset('js/agregar_empleado.js')}}"></script>
@endsection
