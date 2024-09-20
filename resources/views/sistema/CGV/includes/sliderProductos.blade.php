<section>
    <div class="slider-heading">
        <div class="nav nav-underline me-auto mb-0 mb-lg-0">
            <div class="nav-item">
                <a class="nav-link" href="V2/">
                    <h3 class="text-center" style="color: #b8860b;">V2 Suministros</h3>
                </a>
            </div>
        </div>
    </div>

    <div class="sliderP">
        <div class="slide-track">
            <ul class="autoWidth">
                @foreach ($V2 as $producto)
                    <li class="item-a">
                        <!-- Product-box -->
                        <div class="product-box">
                            <!-- heading -->
                            <strong>{{ $producto->nombre }}</strong>
                            <!-- imagen -->
                            <img src={{ asset('imagenesProducto/img/' . $producto->imagen) }} class="img-fluid rounded"
                                alt="Error con la carga de la imagen para el producto para la camilla de emergencia presiona F5 para solucionarlo"
                                style="width: 250px; height: 250px;">
                            <div class="buy-price">
                                <div class="container">
                                    <div class="d-grid gap-2">
                                        <!-- Botón de comprar en WhatsApp -->
                                        <a onclick="window.location.href = 'https://wa.me/573147675259?text=Deseo%20adquirir%20uno%20de%20sus%20productos.'"
                                            class="btn btn-secondary btn-sm">
                                            Comprar Ahora en WhatsApp
                                        </a>
                                        <button onclick="redirectToProduct('{{ $producto->idProducto }}')"
                                            class="btn btn-warning btn-sm">
                                            Más información
                                        </button>
                                        <!-- Botón de más información -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

<script>
    function redirectToProduct(idProducto) {
        const baseUrl = "{{ url('/V2') }}"; // Base URL definida en Laravel
        const url = `${baseUrl}/${idProducto}`;
        window.location.href = url;
    }

    function showAlert() {
        Swal.fire({
            title: '¡Alerta!',
            text: 'Esta página está en construcción.',
            icon: 'warning',
            confirmButtonText: 'Entendido'
        });
    }

    function showAlertWhatsApp() {
        Swal.fire({
            title: '¡Alerta!',
            text: 'Esta página está en construcción.',
            icon: 'warning',
            confirmButtonText: 'Entendido'
        });
    }
</script>
