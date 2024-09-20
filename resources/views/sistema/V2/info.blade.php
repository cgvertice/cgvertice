<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">
<head>
    <meta charset="utf-8" />
    <!-- Seccion de la Configuración y Metadatos -->
    <script src="../js/color-modes.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $producto->nombre }} || Corporate Group Vértice</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="../img/v2.png" type="image/x-icon" />
    @include('sistema.CGV.includes.head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card {
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    @include('sistema.CGV.includes.regresarArriba')
    @include('sistema.CGV.includes.boton')

    <!-- Contenedor de la cabeza de la pagina "head" -->
    <main class="container-just">

        <nav class="navbar navbar-expand-lg bg-body-tertiary px-4 mb-3">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" aria-disabled="true">
                    <img src="../img/v2.png" alt="V2 Suministros" class="img-fluid me-5" width="50"
                        height="auto">
                </a>

                <div class="collapse navbar-collapse">
                    <ul class="nav nav-underline me-auto mb-0 mb-lg-0">
                        <div class="nav nav-underline me-auto mb-0 mb-lg-0">
                            <div class="nav-item">
                                <a class="nav-link me-2" href="../V2/"
                                    style="color: #b8860b; font-size: 1.5rem;">V2Suministos</a>
                            </div>
                        </div>
                        <div class="nav nav-underline me-auto mb-0 mb-lg-0">
                            <div class="nav-item">
                                <a class="nav-link me-2" href="../"
                                    style="color: #b8860b; font-size: 1.5rem;">Inicio</a>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            </div>
        </nav>

        <!-- Offcanvas -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarOffcanvas"
            aria-labelledby="navbarOffcanvasLabel">

            <div class="offcanvas-body">

                <div class="container-just">
                    <div class="container">
                        <div class="row text-center mb-4 py-3">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <img src="../img/Perfil.jpg" class="img-fluid rounded-4 card" alt="...">
                            </div>
                            <div class="col-4"></div>
                        </div>
                        <div class="row py-3">
                            <div class="col-4">
                                <div class="nav nav-underline me-auto mb-2 mb-lg-0">
                                    <div class="nav-item">
                                        <a class="nav-link" href="#!">Inicio</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="nav nav-underline me-auto mb-0 mb-lg-0">
                                    <div class="nav-item">
                                        <a class="nav-link" href="../">CGVértice</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Contenedor main del cuerpo o "body de la pagina" -->
    <main class="container-just">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col">

                    <!-- . -->
                    <!--Main layout-->
                    <main class="mt-1 pt-4">
                        <div class="container mt-1">
                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-6 mb-4">
                                    <div class="container-just">
                                        <!-- border -->
                                        <img src="{{ asset('imagenesProducto/img/' . $producto->imagen) }}"
                                            width="100%" height="100%" class="img-fluid" alt="" />
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6 mb-4">
                                    <!--Content-->
                                    <div class="p-4">

                                        <h1 style="color: #b8860b">{{ $producto->nombre }}</h1>
                                        <p class="lead">
                                            <span>$ {{ $producto->precio }}</span>
                                        </p>

                                            <p class="DescriptionP">Descripción</p>

                                        <div class="description-box">
                                            <p>
                                                {{ $producto->descripcion }}
                                            </p>
                                        </div>

                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                                            <a href="https://wa.me/573016280574?text=Quiero%20cotizar%20el%20{{ $producto->nombre }}."
                                                target="_blank" rel="noopener noreferrer"
                                                class="btn btn-outline-warning btn-sm">Comprar ahora
                                            </a>
                                            <br>

                                            @can('Editar Productos')
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#edit{{ $producto->idProducto }}">Editar
                                                    Productos</button>
                                            @endcan
                                            @can('Eliminar Productos')
                                                <button type="button" class="btn btn-outline-danger"
                                                    data-producto-id="{{ $producto->idProducto }}"
                                                    onclick="eliminarProducto('{{ $producto->idProducto }}')">
                                                    Eliminar Producto
                                                </button>
                                            @endcan
                                        </div>

                                    </div>
                                    @include('sistema.V2.editar')
                                </div>
                                <!--Grid column-->
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row d-flex justify-content-center">
                                <!-- Grid column -->
                                <div class="col-md-12 text-center">

                                    <div class="row g-3 my-4">
                                        <div class="col-3">
                                            <h4 class="text-center" style="color: #b8860b">Información Adicional</h4>
                                        </div>
                                        <div class="col-9">
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="informacion-box">
                                        <p>
                                            {{ $producto->informacionA }}
                                        </p>
                                    </div>
                                    <style>
                                        .informacion-box {
                                            max-width: 1500px;
                                            height: auto;
                                            overflow-wrap: break-word;
                                            border: 1px solid #ddd;
                                            padding: 10px;
                                            background-color: #f9f9f9;
                                            border-radius: 5px;
                                            color: black;
                                        }
                                    </style>

                                    @if ($producto->opcion == 'Botiquin')
                                        @can('Ver DetallesProductos')
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <!-- En tu vista info.blade.php -->
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed text-center"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                            aria-controls="flush-collapseOne">
                                                            <h5>Detalles del Botiquín</h5>
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            @can('Crear Detalles')
                                                                <div class="container text-center">
                                                                    <a href="{{ route('producto.detalles.modal', ['id' => $producto->idProducto]) }}"
                                                                        class="btn btn-outline-primary p-2"
                                                                        data-bs-toggle="modal" data-bs-target="#create">
                                                                        Registrar Elementos
                                                                    </a>
                                                                </div>
                                                            @endcan
                                                            <br>
                                                            @if ($producto->detalleproductos->count() > 0)
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ELEMENTOS</th>
                                                                            <th>UNIDADES</th>
                                                                            <th>CANTIDAD</th>
                                                                            @if (Auth::check() && (Auth::user()->can('Editar Detalles') || Auth::user()->can('Eliminar Detalles')))
                                                                                <th>Acciones</th>
                                                                            @endif
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($producto->detalleproductos as $detalle)
                                                                            <tr>
                                                                                <td>{{ $detalle->elementos }}</td>
                                                                                <td>{{ $detalle->unidades }}</td>
                                                                                <td>{{ $detalle->cantidad }}</td>
                                                                                @if (Auth::check() && (Auth::user()->can('Editar Detalles') || Auth::user()->can('Eliminar Detalles')))
                                                                                    <td>
                                                                                        @can('Editar Detalles')
                                                                                            <button type="button"
                                                                                                class="btn btn-outline-secondary"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#editarDetalle{{ $detalle->idDetalle }}">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="16"
                                                                                                    height="16"
                                                                                                    fill="currentColor"
                                                                                                    class="bi bi-pencil-square"
                                                                                                    viewBox="0 0 16 16">
                                                                                                    <path
                                                                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                                                    <path fill-rule="evenodd"
                                                                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                                                                </svg>
                                                                                            </button>
                                                                                        @endcan
                                                                                        @can('Eliminar Detalles')
                                                                                            <button type="button"
                                                                                                class="btn btn-outline-danger"
                                                                                                data-detalle-id="{{ $detalle->idDetalle }}"
                                                                                                onclick="eliminarDetalle('{{ $detalle->idDetalle }}')">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="16"
                                                                                                    height="16"
                                                                                                    fill="currentColor"
                                                                                                    class="bi bi-trash"
                                                                                                    viewBox="0 0 16 16">
                                                                                                    <path
                                                                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                                                                    <path
                                                                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                                                                </svg>
                                                                                            </button>
                                                                                        @endcan
                                                                                    </td>
                                                                                @endif
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            @else
                                                                <p>No hay detalles disponibles.</p>
                                                            @endif
                                                            @include('sistema.V2.detalles')
                                                        </div>
                                                    </div>
                                                    @foreach ($producto->detalleproductos as $detalle)
                                                        @include('sistema.V2.editarDetalle', [
                                                            'detalle' => $detalle,
                                                        ])
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endcan
                                </div>
                            </div>

                            <div class="card my-4">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #b8860b">Consideraciones al Adquirir un Botiquín</h5>
                                    <p>
                                        Al adquirir un botiquín, ten en cuenta lo siguiente:
                                    </p>
                                    <ul>
                                        <li>Este se utiliza únicamente en situaciones de emergencia, dentro del
                                            escenario u operación de la empresa.</li>
                                        <li>Siempre verifica la vigencia de los productos y realiza su reposición con
                                            antelación a su fecha de caducidad.</li>
                                        <li>Es recomendable contar con capacitación previa en el uso de botiquines, así
                                            como en primeros auxilios. Mantén actualizados los planes de emergencia y
                                            proporciona entrenamiento al personal de las brigadas de emergencias.</li>
                                        <li>Realiza inspecciones periódicas del botiquín y sus elementos.</li>
                                        <li>Haz un uso adecuado de los equipos y herramientas, de acuerdo con la función
                                            para la que fueron creados.</li>
                                    </ul>
                                </div>
                            </div>
                        @else
                            @endif

                        </div>
                    </main>

                    <style>
                        .description-box {
                            max-width: 600px;
                            height: auto;
                            overflow-wrap: break-word;
                            border: 1px solid #ddd;
                            padding: 10px;
                            background-color: #f9f9f9;
                            border-radius: 5px;
                            color: black;
                        }
                    </style>

                    <!--Main layout-->

                </div>
            </div>
        </div>
    </main>

    <!-- Contenedor main del footer de la pagina -->
    <main class="container-just">
        <footer class="container-fluid">
            @include("sistema.CGV.includes.footer")
        </footer>
    </main>

    <!-- Seccion de js funcionalidades -->
    <script src="../js/code.jquery.com_jquery-3.7.1.js"></script>
    <script src="../js/cdnjs.cloudflare.com_ajax_libs_lightslider_1.1.6_js_lightslider.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async>
    </script>
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function mostrarSweetAlertEliminar(idProducto) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: 'No podrás revertir esto.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminarlo'
            }).then((result) => {
                if (result.isConfirmed) {
                    eliminarProducto(idProducto);
                }
            });
        }

        function eliminarProducto(idProducto) {
            Swal.fire({
                title: '¿Confirmar eliminación?',
                text: 'Estás a punto de eliminar el producto.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Realiza una solicitud DELETE usando Fetch API
                    fetch('/V2/' + idProducto, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                    }).then(response => {
                        if (response.ok) {
                            // Redirige a la ruta /V2 después de eliminar
                            window.location.href = '/V2';
                        } else {
                            // Muestra un mensaje de error si la eliminación no fue exitosa
                            Swal.fire({
                                icon: 'error',
                                title: 'Error al eliminar el producto',
                                text: 'Hubo un problema al intentar eliminar el producto.'
                            });
                        }
                    }).catch(error => {
                        console.error(error);
                        // Muestra un mensaje de error si hay un problema con la solicitud
                        Swal.fire({
                            icon: 'error',
                            title: 'Error al eliminar el producto',
                            text: 'Hubo un problema al intentar eliminar el producto.'
                        });
                    });
                }
            });
        }

        function eliminarDetalle(idDetalle) {
            Swal.fire({
                title: '¿Confirmar eliminación?',
                text: 'Estás a punto de eliminar el detalle.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Realiza una solicitud DELETE usando Fetch API
                    fetch('/eliminar-detalle/' + idDetalle, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                    }).then(response => {
                        if (response.ok) {
                            // Recarga la página actual después de eliminar
                            location.reload();
                        } else {
                            // Muestra un mensaje de error si la eliminación no fue exitosa
                            Swal.fire({
                                icon: 'error',
                                title: 'Error al eliminar el detalle',
                                text: 'Hubo un problema al intentar eliminar el detalle.'
                            });
                        }
                    }).catch(error => {
                        console.error(error);
                        // Muestra un mensaje de error si hay un problema con la solicitud
                        Swal.fire({
                            icon: 'error',
                            title: 'Error al eliminar el detalle',
                            text: 'Hubo un problema al intentar eliminar el detalle.'
                        });
                    });
                }
            });
        }
    </script>
</body>
</html>