<div class="min-vh-100 d-flex flex-column justify-content-center align-items-center bg-light py-4">
    <div>
        <!-- Logo: Puedes reemplazar esto con una imagen o logo específico -->
        {{ $logo }}
    </div>

    <div class="w-100 mt-4 px-4 py-3 bg-white shadow-sm rounded" style="max-width: 400px;">
        {{ $slot }}
    </div>
</div>
