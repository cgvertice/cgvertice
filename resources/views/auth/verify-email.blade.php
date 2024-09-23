<x-guest-layout>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body text-center">
                <div class="mb-4">
                    <x-authentication-card-logo />
                </div>

                <div class="mb-4 text-muted">
                    {{ __('Antes de continuar, ¿podrías verificar tu dirección de correo electrónico haciendo clic en el enlace que acabamos de enviarte? Si no recibiste el correo, con gusto te enviaremos otro.') }}
                </div>

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 text-success">
                        {{ __('Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionaste en la configuración de tu perfil.') }}
                    </div>
                @endif

                <div class="mt-4 d-flex justify-content-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            {{ __('Reenviar correo electrónico de verificación') }}
                        </button>
                    </form>

                    <div>
                        <a href="{{ route('profile.show') }}" class="btn btn-link text-muted">
                            {{ __('Editar perfil') }}
                        </a>

                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-link text-muted ms-2">
                                {{ __('Cerrar sesión') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
