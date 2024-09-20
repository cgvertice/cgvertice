<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">

<head>
    <meta charset="utf-8" />
    <!-- Seccion de la Configuración y Metadatos -->

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Converges || Corporate Group Vértice</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="../img/Converge.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">
    @include('sistema.CGV.includes.head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Incluir jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>


    <div class="botonAdmin">
        <ul class="navbar-nav ms-auto">
            @can('Admin Configuracion')
            <div class="nav-item dropdown">
                <a id="adminDropdown" class="nav-link dropdown-toggle" style="color: #b8860b" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Admin Configuración
                </a>
                <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                    <li>
                        <a class="dropdown-item" href="#" id="VerUsersbtn">
                            <i class="fas fa-users ml-2"></i> Usuarios
                        </a>
                    </li>
                    <script>
                        document.getElementById('VerUsersbtn').addEventListener('click', function() {
                            window.location.href = "{{ route('ruta_Users') }}";
                        });
                    </script>
                    <li>
                        <a class="dropdown-item" href="#" id="rolesBtn">
                            <i class="fas fa-user-tag"></i> Roles
                        </a>
                    </li>
                    <script>
                        document.getElementById('rolesBtn').addEventListener('click', function() {
                            window.location.href = "{{ route('ruta_Roles') }}";
                        });
                    </script>
                    <li>
                        <a class="dropdown-item" href="#" id="permissionsBtn">
                            <i class="fas fa-key"></i> Permisos
                        </a>
                    </li>
                    <script>
                        document.getElementById('permissionsBtn').addEventListener('click', function() {
                            window.location.href = "{{ route('ruta_Perm') }}";
                        });
                    </script>
                </ul>
            </div>

            @endcan
            &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        </ul>
    </div>

    <div class="container-fluid">
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-lg-nowrap flex-wrap justify-content-center align-items-center">

                <!-- Logo de la empresa -->
                <div class="col-lg-4 col-md-6 col-6 text-center">
                    <div class="Converge-div-logo">
                        <img id="VerIniciobtn" src="/img/Converge.png" alt="Logotipo Converge" class="img-fluid" />
                    </div>
                </div>
                <script>
                    document.getElementById('VerIniciobtn').addEventListener('click', function() {
                        window.location.href = "{{ route('inicio') }}";
                    });
                </script>
            </div>
        </header>
        <a href="{{ route('roles.index') }}" class="btn btn-outline-warning">
            <i class="fas fa-arrow-left"></i>
        </a>
        <main class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        {{$roles->name}}
                    </div>
                    <div class="card-body">
                        {!! Form::model($roles, ['route' => ['roles.update', $roles], 'method' => 'put']) !!}

                        <!-- Noticias Section -->
                        <label>
                            {!! Form::checkbox('permisos[]', 'Ver Noticias', $roles->hasPermissionTo('Ver Noticias') ?: false, ['class'=>'mr-1', 'id' => 'verNoticias']) !!}
                            Ver Noticias
                        </label>
                        <div id="otrosClientes" style="display: none;">
                            <label>
                                {!! Form::checkbox('permisos[]', 'Crear Noticias', $roles->hasPermissionTo('Crear Noticias') ?: false, ['class'=>'mr-1']) !!}
                                Crear Noticias
                            </label>
                            <label>
                                {!! Form::checkbox('permisos[]', 'Editar Noticias', $roles->hasPermissionTo('Editar Noticias') ?: false, ['class'=>'mr-1']) !!}
                                Editar Noticias
                            </label>
                            <label>
                                {!! Form::checkbox('permisos[]', 'Eliminar Noticias', $roles->hasPermissionTo('Eliminar Noticias') ?: false, ['class'=>'mr-1']) !!}
                                Eliminar Noticias
                            </label>
                        </div>
                        <br>
                        <!-- V2 Section -->
                        <label>
                            {!! Form::checkbox('permisos[]', 'Ver V2', $roles->hasPermissionTo('Ver V2') ?: false, ['class'=>'mr-1', 'id' => 'verV2']) !!}
                            Ver V2
                        </label>
                        <div id="otrosAsesores" style="display: none;">
                            <label>
                                {!! Form::checkbox('permisos[]', 'Crear Productos', $roles->hasPermissionTo('Crear Productos') ?: false, ['class'=>'mr-1']) !!}
                                Crear Productos
                            </label>
                            <label>
                                {!! Form::checkbox('permisos[]', 'Editar Productos', $roles->hasPermissionTo('Editar Productos') ?: false, ['class'=>'mr-1']) !!}
                                Editar Productos
                            </label>
                            <label>
                                {!! Form::checkbox('permisos[]', 'Eliminar Productos', $roles->hasPermissionTo('Eliminar Productos') ?: false, ['class'=>'mr-1']) !!}
                                Eliminar Productos
                            </label>
                        </div>
                        <br>
                        <!-- Detalles Productos Section -->
                        <label>
                            {!! Form::checkbox('permisos[]', 'Ver DetallesProductos', $roles->hasPermissionTo('Ver DetallesProductos') ?: false, ['class'=>'mr-1', 'id' => 'verDetallesProductos']) !!}
                            Ver Detalle de Productos
                        </label>
                        <div id="otrosProyectos" style="display: none;">
                            <label>
                                {!! Form::checkbox('permisos[]', 'Crear Detalles', $roles->hasPermissionTo('Crear Detalles') ?: false, ['class'=>'mr-1']) !!}
                                Crear Detalles
                            </label>
                            <label>
                                {!! Form::checkbox('permisos[]', 'Editar Detalles', $roles->hasPermissionTo('Editar Detalles') ?: false, ['class'=>'mr-1']) !!}
                                Editar Detalles
                            </label>
                            <label>
                                {!! Form::checkbox('permisos[]', 'Eliminar Detalles', $roles->hasPermissionTo('Eliminar Detalles') ?: false, ['class'=>'mr-1']) !!}
                                Eliminar Detalles
                            </label>
                        </div>
                        <br>

                        <!-- Admin Configuración Section -->
                        <style>
                            .custom-checkbox {
                                position: relative;
                                padding-left: 25px;
                                cursor: pointer;
                                display: inline-block;
                            }

                            .custom-checkbox input {
                                position: absolute;
                                opacity: 0;
                                cursor: pointer;
                                height: 0;
                                width: 0;
                            }

                            .checkmark {
                                position: absolute;
                                top: 0;
                                left: 0;
                                height: 15px;
                                width: 15px;
                                background-color: #ccc;
                                border-radius: 3px;
                            }

                            .custom-checkbox input:checked + .checkmark:after {
                                content: '';
                                position: absolute;
                                top: 4px;
                                left: 4px;
                                width: 7px;
                                height: 7px;
                                border-radius: 50%;
                                background-color: #333;
                            }
                        </style>

                        <label class="custom-checkbox">
                            {!! Form::checkbox('permisos[]', 'Admin Configuracion', $roles->hasPermissionTo('Admin Configuracion') ?: false, ['class'=>'mr-1', 'id' => 'adminConfiguracionCheckbox']) !!}
                            <span class="checkmark"></span> <!-- Etiqueta personalizada -->
                            Admin Configuracion
                        </label>

                        <br>
                        {!! Form::submit('Actualizar Rol',['class'=>'btn btn-outline-warning mt-3']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>

                <script>
                    $(document).ready(function() {
                        // Mostrar u ocultar secciones según el estado inicial de los checkboxes
                        toggleSection('#verNoticias', '#otrosClientes');
                        toggleSection('#verV2', '#otrosAsesores');
                        toggleSection('#verDetallesProductos', '#otrosProyectos');

                        // Agregar event listeners a los checkboxes
                        $('#verNoticias').change(function() {
                            toggleSection('#verNoticias', '#otrosClientes');
                        });
                        $('#verV2').change(function() {
                            toggleSection('#verV2', '#otrosAsesores');
                        });
                        $('#verDetallesProductos').change(function() {
                            toggleSection('#verDetallesProductos', '#otrosProyectos');
                        });

                        // Función para mostrar u ocultar secciones
                        function toggleSection(checkboxSelector, sectionSelector) {
                            if ($(checkboxSelector).prop('checked')) {
                                $(sectionSelector).show();
                            } else {
                                $(sectionSelector).hide();
                                $(sectionSelector).find('input[type=checkbox]').prop('checked', false);
                            }
                        }
                    });
                </script>
            </div>
        </main>
    </div>
    @include('sistema.CGV.includes.boton')
    @include('sistema.CGV.includes.footer')
</body>
</html>
