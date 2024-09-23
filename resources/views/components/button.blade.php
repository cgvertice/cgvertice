<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-dark font-weight-bold text-uppercase']) }}>
    {{ $slot }}
</button>
