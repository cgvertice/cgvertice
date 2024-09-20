<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">

<head>
    <meta charset="utf-8" />
    <!-- Seccion de la Configuración y Metadatos -->

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lista de usuarios || Corporate Group Vértice</title>

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

    <div class="container-fluid">
        
        <div class="row flex-lg-nowrap flex-wrap justify-content-center align-items-center">

            <!-- Logo de la empresa -->
            <div class="col-lg-4 col-md-4 col-6 text-center pt-5">
                <div class="Converge-div-logo">
                    <img id="VerIniciobtn" src="/img/Converge.png" alt="Logotipo Converge" href="#"
                        class="img-fluid" />
                </div>
            </div>
        </div>
        

        <div class="pl-4">
            <a href="{{ route('inicio') }}" class="btn btn-outline-warning">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>

        

        <main class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
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

                <br><br>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('create-all-permisos') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-warning">Cargar permisos</button>
                            &nbsp;

                        </form>
                        <br>

                        <div class="table-responsive">
                            <br>
                            <style>
                                #Permisos thead th {
                                    background-color: #b8860b;
                                    color: white;
                                }
                            </style>

                            <table class="table table-bordered" id="Clientes">
                                <thead class="text-white" style="background-color: #b8860b">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nombre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permisos as $permiso)
                                        <tr class="">
                                            <td> {{ $permiso->id }} </td>
                                            <td> {{ $permiso->name }} </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>
        </main>
    </div>
    @include('sistema.CGV.includes.boton')
</body>
</html>
