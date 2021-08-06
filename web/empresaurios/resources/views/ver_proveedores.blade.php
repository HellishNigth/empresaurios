@extends('layouts.master')

@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-info">
                    <tr>
                        <td>Empresa Proveedora</td>
                        <td>Producto a proveer</td>
                        <td>Tipo Proveedor</td>
                        <td>¿Es fragil?</td>
                        <td>Cantidad a proveer</td>
                        <td>Acciones</td>
                    </tr>
                    <tbody id="tbody-proveedores">
    
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
@endsection
@section("javascript")
    <script src="{{asset('js/servicios/proveedoresService.js')}}"></script>
    <script src="{{asset('js/ver_proveedores.js')}}"></script>
@endsection