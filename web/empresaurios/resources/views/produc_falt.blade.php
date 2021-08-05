@extends('layouts.master')

@section('contenido')
<div class="row mt-5">
    <div class="col-12 col-md-6 col-lg-5 mx-auto">
        <div class="card">
            <div class="card-header bg-danger text-dark">
                <span>Agregar Producto Faltante</span>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="nombre-txt" class="form-label">Nombre Producto</label>
                    <input type="text" id="nombre_produc_falt-txt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="tipo_produc_falt-select" class="form-label">Tipo Producto</label>
                    <select class="form-select" id="faltante-select">
                    </select>
                </div>
                <div class="mb-3">
                    <label for="cantidad_faltante-txt" class="form-label">Cantidad faltante</label>
                    <input type="number" class="form-control" id="cantidad_faltante-txt">
                </div>
            </div>
            <div class="card-footer d-grid gap-1">
                <button class="btn btn-info" id="registrarfake-btn">Registrar</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section("javascript")
    <script src="{{asset('js/servicios/faltantesService.js')}}"></script>
    <script src="{{asset('js/produc_falt.js')}}"></script>
@endsection