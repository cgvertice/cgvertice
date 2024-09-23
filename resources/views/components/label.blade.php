@props(['value'])

<label {{ $attributes->merge(['class' => 'form-label font-weight-bold text-muted']) }}>
    {{ $value ?? $slot }}
</label>

