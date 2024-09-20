<head>
    <title>Corporate Group Vértice </title>
    @include('sistema.CGV.includes.head')
</head>

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

        <form class="text-center" method="POST" action="{{ route('register') }}">
            <h2 class="TituloAuth">Formulario de Registro</h2>
            @csrf

            <div>
                <x-label for="name" value="{{ __('Nombre') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Correo') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>
            <br>
            <div>
                <a class="underline text-sm text-gray-600" href="{{ route('login') }}" style="text-decoration: none">¿Ya tienes una cuenta? Inicia sesión 
                </a>
            </div>
            &nbsp;
            <div class="text-center">
                <x-button class="btn" style="background-color: #b8860b; color: black;">
                    {{ __('Registrarme') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
