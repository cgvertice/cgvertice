<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">

<head>
    <meta charset="utf-8" />
    <!-- Seccion de la Configuración y Metadatos -->
    <script src="../js/color-modes.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Usuarios || Corporate Group Vértice</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="../img/Converge.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/cdn.jsdelivr.net_npm_bootstrap@5.3.2_dist_css_bootstrap.min.css" />
    <link rel="stylesheet" href="../css/cdnjs.cloudflare.com_ajax_libs_lightslider_1.1.6_css_lightslider.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
    @include('sistema.CGV.includes.boton')

    <div>
        <div class="row flex-lg-nowrap flex-wrap justify-content-center align-items-center pt-5">
            <!-- Logo de la empresa -->
            <div class="col-lg-4 col-md-6 col-6 text-center">
                <div class="Converge-div-logo">
                    <img id="VerIniciobtn" src="{{ asset('img/LogoAgosto.png') }}" alt="Logotipo Converge" href="#"
                        class="img-fluid" />
                </div>
            </div>
        </div>

        <main class="row">
            <div class="pt-4 pl-4">
                <a href="{{ route('inicio') }}" class="btn btn-outline-warning">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>

            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <br>

                <div class="table-responsive tabla-index">
                    <br>

                    <table class="table" id="user_table">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="">
                                    <td scope="row"> {{ $user->id }} </td>
                                    <td> {{ $user->name }} </td>
                                    <td> {{ $user->email }} </td>
                                    <td>
                                        @if ($user->roles->count() > 0)
                                            @foreach ($user->roles as $role)
                                                {{ $role->name }} -
                                            @endforeach
                                        @else
                                            Sin rol
                                        @endif
                                    </td>

                                    <td>
                                        <a class="btn btn-outline-success"
                                            href="{{ route('asignar.edit', $user->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- <div class="col-md-1"></div> -->
        </main>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"></script>
        <script>
            $(document).ready(function() {
                $('#user_table').DataTable({
                    responsive: true,
                    autoWidth: false,
                    language: {
                        url: 'https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json'
                    }
                });
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const themeToggleButton = document.querySelector('#bd-theme');
                const body = document.body;

                themeToggleButton.addEventListener('change', function(event) {
                    const selectedThemeValue = event.target.value;
                    switch (selectedThemeValue) {
                        case 'dark':
                            body.classList.add('dark-theme');
                            break;
                        case 'light':
                            body.classList.remove('dark-theme');
                            break;
                        default:
                            // Si el valor es 'auto', no hacemos nada ya que el tema se ajustará automáticamente
                            break;
                    }
                });

                // Aplicar el tema oscuro por defecto si el usuario ha seleccionado 'dark' previamente
                if (localStorage.getItem('theme') === 'dark') {
                    body.classList.add('dark-theme');
                }
            });

            // Función para guardar el tema seleccionado en localStorage
            function saveTheme(theme) {
                localStorage.setItem('theme', theme);
            }
        </script>
