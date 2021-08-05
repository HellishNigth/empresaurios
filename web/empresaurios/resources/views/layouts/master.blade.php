<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset("css/style.css")}}">
        <title>Proyecto_Web</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('productos')}}">
                    <img class="logo" src="{{asset("img/logo.png")}}" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active text-danger" aria-current="page" href="{{route('productos')}}">Agregar Producto</a>
                        <a class="nav-link text-danger" href="{{route('ver_productos')}}">Ver Productos</a>
                        <a class="nav-link text-danger" href="{{route('produc_falt')}}">Producto faltante</a>
                        <a class="nav-link text-danger" href="{{route('ver_produc_falt')}}">Ver produc. faltante</a>
                        <a class="nav-link text-danger" href="{{route('proveedor')}}">Proveedor de producto</a>
                        <a class="nav-link text-danger" href="{{route('ver_proveedores')}}">Ver Proveedores</a>
                        <a class="nav-link text-danger" href="{{route('agregar_empleado')}}">Agregar Empleado</a>
                        <a class="nav-link text-danger" href="{{route('ver_empleados')}}">Ver Empleados</a>
                    </div>
                    </div>
                </div>
                </nav>
        </header>
        <main class="container-fluid">
            @yield('contenido')
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{asset('js/axios_config.js')}}"></script>
        @yield("javascript")
    </body>
</html>