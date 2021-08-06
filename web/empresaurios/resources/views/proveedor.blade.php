@extends('layouts.master')

@section('contenido')
<div class="row mt-5 animate__animated animate__bounce">
    <div class="col-12 col-md-6 col-lg-5 mx-auto mt-5">
        <div class="card">
            <div class="card-header bg-danger text-dark">
                <span>Registro Proveedor</span>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="nombre-txt" class="form-label">Nombre Empresa Proveedora</label>
                    <input type="text" id="nombre_proveedor-txt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="prodprov-txt" class="form-label">Producto a proveer</label>
                    <input type="text" id="prodprov-txt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="tipo_proveedor-select" class="form-label">Tipo Proveedor</label>
                    <select class="form-select" id="tipo_proveedor-select">
                    </select>
                </div>
                <div class="mb-3">
                    <label for="experiencia-select" class="form-label">¿Es fragil?</label>
                    <select name="form-select" id="fragil"></select>
                </div>
                <div class="mb-3">
                    <label for="cantidad_provista-txt" class="form-label">Cantidad a proveer</label>
                    <input type="number" class="form-control" id="cantidad_provista-txt">
                </div>
            </div>
            <div class="card-footer d-grid gap-1">
                <button id="pro" class="btn btn-primary">Registrar</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section("javascript")
    <script src="{{asset('js/servicios/proveedoresService.js')}}"></script>
    <script src="{{asset('js/proveedores.js')}}"></script>
@endsection