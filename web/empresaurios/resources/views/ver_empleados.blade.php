@extends('layouts.master')

@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-info">
                    <tr>
                        <td>Nombre Empleado</td>
                        <td>Rut</td>
                        <td>Puesto</td>
                        <td>Experiencia</td>
                        <td>Acciones</td>
                    </tr>
                    <tbody id="tbody-empleados">
    
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
@endsection
@section("javascript")
    <script src="{{asset('js/servicios/empleadosService.js')}}"></script>
    <script src="{{asset('js/ver_empleados.js')}}"></script>
@endsection