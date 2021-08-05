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
                    <select class="form-control" id="rut">
                    </select>
                </div>
                <div class="mb-3">
                    <label for="puestoempleado" class="form-label">Puesto del trabajador</label>
                    <select class="form-select" id="puesto">
                        
                    </select>
                </div>
                <div class="mb-3">
                    <label for="experiencia-rb" class="form-label">¿Tiene Experiencia?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ex-rb" id="si-ex-rb">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ex-rb" id="no-ex-rb" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          No
                        </label>
                    </div>
                </div>
            </div>
            <div class="card-footer d-grid gap-1">
                <button class="btn btn-info" id="registrarfake-btn">Registrar</button>
            </div>
        </div>
    </div>
</div>
@endsection