<head>
    <title>Corporate Group Vértice</title>
</head>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="shortcut icon" href="../img/LogoAgosto.png" type="image/x-icon" />
<link rel="stylesheet" href="../css/cdn.jsdelivr.net_npm_bootstrap@5.3.2_dist_css_bootstrap.min.css" />
<link rel="stylesheet" href="../css/cdnjs.cloudflare.com_ajax_libs_lightslider_1.1.6_css_lightslider.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


<div class="col-lg-1 col-md-1 col-1 text-center mt-2">
    <div class="Converge-div-logoCasa">
        <a href="{{ route('inicio') }}" class="btn btn-outline-warning">
            <i class="fas fa-home"></i>
        </a>
    </div>
</div>

<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form class="text-center" method="POST" action="{{ route('login') }}">
            <h2 class="TituloAuth">Iniciar Sesion</h2>
            @csrf

            <div class="mb-3">
                <x-label for="email" value="{{ __('Correo') }}" />
                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mb-3">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="mb-3">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600" href="{{ url('/forgot-password') }}">
                    ¿Olvidaste tu Contraseña?
                </a>
                @endif
            </div>

            <div class="mb-3">
                <a class="underline text-sm text-gray-600" href="{{ url('/register') }}">
                    Registrarme
                </a>
            </div>

            <div class="text-center">
                <x-button class="btn" style="background-color: #b8860b; color: black;">
                    {{ __('Iniciar Sesión') }}
                </x-button>
            </div>

        </form>
    </x-authentication-card>
</x-guest-layout>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>