@if ($errors->any())
    <div {{ $attributes->merge(['class' => 'alert alert-danger']) }}>
        <div class="font-weight-bold text-danger">{{ __('¡Vaya! Algo salió mal.') }}</div>

        <ul class="mt-3 pl-4 text-sm text-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
