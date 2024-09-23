<x-guest-layout>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body text-center">
                <div class="mb-4">
                    <x-authentication-card-logo />
                </div>

                <div x-data="{ recovery: false }">
                    <div class="mb-4 text-muted" x-show="! recovery">
                        {{ __('Por favor, confirma el acceso a tu cuenta ingresando el código de autenticación proporcionado por tu aplicación de autenticador.') }}
                    </div>

                    <div class="mb-4 text-muted" x-cloak x-show="recovery">
                        {{ __('Por favor, confirma el acceso a tu cuenta ingresando uno de tus códigos de recuperación de emergencia.') }}
                    </div>

                    <x-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('two-factor.login') }}">
                        @csrf

                        <div class="mt-4" x-show="! recovery">
                            <label for="code" class="form-label">{{ __('Código') }}</label>
                            <input id="code" class="form-control" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                        </div>

                        <div class="mt-4" x-cloak x-show="recovery">
                            <label for="recovery_code" class="form-label">{{ __('Código de recuperación') }}</label>
                            <input id="recovery_code" class="form-control" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <button type="button" class="btn btn-link text-muted"
                                    x-show="! recovery"
                                    x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                                {{ __('Usar un código de recuperación') }}
                            </button>

                            <button type="button" class="btn btn-link text-muted"
                                    x-cloak
                                    x-show="recovery"
                                    x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                                {{ __('Usar un código de autenticación') }}
                            </button>

                            <x-button class="btn btn-primary ms-4">
                                {{ __('Iniciar sesión') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
