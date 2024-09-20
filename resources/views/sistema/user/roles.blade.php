<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">

<head>
    <meta charset="utf-8" />
    <!-- Seccion de la Configuración y Metadatos -->

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Roles || Corporate Group Vértice</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="../img/Converge.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">
    @include('sistema.CGV.includes.head')
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

    <div class="container-fluid">

        <main class="row">


            <div class="col-md-1"></div>
            <div class="col-md-10">
                <a href="{{ route('inicio') }}" class="btn btn-outline-warning mt-3 ml-2">
                    <i class="fas fa-arrow-left"></i>
                </a>


                <div class="table-responsive">
                    <br>
                    <style>
                        #Roles thead th {
                            background-color: #b8860b;
                            color: white;
                        }
                    </style>

                    <table class="table table-bordered" id="Roles">
                        <thead class="text-white" style="background-color: white">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr class="">
                                    <td> {{ $role->id }} </td>
                                    <td> {{ $role->name }} </td>
                                    <td>
                                        <a class="btn btn-outline-success ml-10"
                                            href="{{ route('roles.edit', $role) }}">
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
                <div class="pt-5 pl-5">
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

                    <form method="POST" action="{{ route('create-all-roles') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-warning">Cargar roles</button>
                    </form>
                </div>

            </div>
    </div>
</body>

</html>
