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

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
