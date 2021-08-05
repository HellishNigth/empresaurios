@extends('layouts.master')

@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-info">
                    <tr>
                        <td>Nombre</td>
                        <td>Tipo</td>
                        <td>Cantidad</td>
                        <td>Acciones</td>
                    </tr>
                    <tbody id="tbody-produc">
    
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
@endsection
@section("javascript")
    <script src="{{asset('js/servicios/productosService.js')}}"></script>
    <script src="{{asset('js/ver_productos.js')}}"></script>
@endsection