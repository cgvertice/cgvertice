<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">

<head>
    <meta charset="utf-8" />
    <!-- Seccion de la Configuración y Metadatos -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Permisos || Corporate Group Vértice</title>

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

    <div class="pl-4">
        <a href="{{ route('users.index', ['id' => $user->id]) }}" class="btn btn-outline-warning">
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

            <br>

            <div class="userRol">
                <div class="card">
                    <div class="cardhead">
                        {{ $user->name }}
                    </div>
                    <div class="card-body">
                        <h3>Lista de Roles</h3>
                        {!! Form::model($user, ['route' => ['asignar.update', $user->id], 'method' => 'put']) !!}
                        @foreach ($roles as $role)
                            <div>
                                <label>
                                    {!! Form::checkbox('roles[]', $role->id, $user->hasAnyRole($role->name) ?: false, ['class' => 'mr-1']) !!}
                                    {{ $role->name }}
                                </label>
                            </div>
                        @endforeach
                        {!! Form::submit('Asignar Roles', ['class' => 'btn btn-warning ml-4 mt-4 ']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </main>
    <div class="row flex-lg-nowrap flex-wrap justify-content-center align-items-center pt-4">
        <!-- Botón regresar -->
        <div class="col-lg-1 col-md-1 col-1 text-center">
            <div class="Converge-div-logoCasa">
                <a href="{{ route('inicio') }}" class="btn btn-outline-warning">
                    <i class="fas fa-home"></i>
                </a>
            </div>
        </div>
        <script>
            document.getElementById('VerIniciobtn').addEventListener('click', function() {
                window.location.href = "{{ route('inicio') }}";
            });
        </script>
    </div>
    @include('sistema.CGV.includes.boton')
    <br>
    <br>
    @include('sistema.CGV.includes.footer')

</body>

</html>
