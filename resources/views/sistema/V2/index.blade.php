<head>
    <meta charset="utf-8" />
    <script src={{ asset('../js/color-modes.js') }}></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>V2 Suministros || Corporate Group Vértice</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="../img/v2.png" type="image/x-icon" />
    @include('sistema.CGV.includes.head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    @include('sistema.CGV.includes.NewNavbar')
    @include('sistema.CGV.includes.regresarArriba')

    <main class="container-just">

        <div class="p-4 rounded bg-body-secondary" style="display: flex; flex-direction:column; ">
            <div class="col-lg-12 text-center">
                <img src={{ asset('../img/v2.png') }} alt="Logotipo Converge" class="img-fluid" />
            </div>
            <div class="col-lg-12 text-center">
                <h1 class="display-4" style="color:#b8860b">¡Bienvenidos a V2!</h1>
                <p class="my-3">
                    En CG Vértice, nos enorgullece ofrecer una experiencia de compra en línea fácil y segura, con un
                    catálogo actualizado que responde a las necesidades de nuestros clientes. Nuestro compromiso es
                    proporcionar productos de calidad, respaldados por un servicio al cliente excepcional, para que
                    puedas encontrar todo lo que necesitas en un solo lugar. Ya sea que busques mejorar la seguridad en
                    tu empresa o adquirir suministros esenciales para tu hogar o negocio, CG Vértice es tu socio
                    confiable en cada paso del camino.

                    <br>
                    <br>

                    V2 suministros es una tienda virtual innovadora y versátil que ofrece una amplia gama de productos y
                    soluciones para la seguridad y salud en el trabajo, así como para otras áreas esenciales de tu vida
                    y negocio. Con una sólida especialización en implementos de seguridad y equipos de protección
                    personal, CG Vértice se dedica a proporcionar artículos de alta calidad que cumplen con los más
                    estrictos estándares de seguridad industrial y laboral.
                </p>
            </div>
        </div>

        <div class="container mt-4">
            <div class="col-xxl-12 px-4 py-3 mt-4">
                <div class="row flex-lg-row-reverse align-items-center g-4 mt-4">
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="container-just">
                            <div class="card img-fluid rounded">
                                <img src={{ asset('../img/insumos.png') }} alt="Error al Cargar la Imagen"
                                    class="img-fluid rounded mx-auto">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="container-just">
                            <h1 class="display-6 mb-3" style="color: #b8860b">¿Por qué recargar tu botiquín de primeros
                                auxilios?</h1>
                            &nbsp;
                            <ul class="card-text">
                                <li><b style="color: #b8860b">Conformidad Legal:</b> Cumple con regulaciones, evita
                                    sanciones y asegura un
                                    entorno laboral conforme.</li>
                                <li><b style="color: #b8860b">Máxima Preparación:</b> Estar siempre listo para
                                    emergencias y cumplir con
                                    normativas laborales.</li>
                                <li><b style="color: #b8860b">Rápida Respuesta:</b> Recarga regular para suministros
                                    inmediatos y respuestas
                                    rápidas ante incidentes.</li>
                                <li><b style="color: #b8860b">Protección del Personal:</b> Cuida a tu equipo con insumos
                                    de calidad para un
                                    entorno seguro.</li>
                            </ul>
                            &nbsp;
                            <p class="card-text">
                                Recuerda, nuestro asesoramiento es totalmente gratuito. ¡Estamos aquí para ayudarte!
                            </p>
                        </div>
                    </div>

                    &nbsp;
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a href="https://wa.me/573332371006?text=¿Por%20qué%20recargar%20tu%20botiquín%20de%20primeros%20auxilios?"
                            target="_blank" rel="noopener noreferrer" class="btn btn-warning btn-lg"
                            type="button">¡Asesoramiento Gratis!</a>
                    </div>
                </div>
            </div>
            <div id="scrollspyHeading2" class="py-3">
                <div class="container">
                    <hr>
                </div>
            </div>
            <form class="d-flex me-3" role="search" action="{{ route('productos.search') }}" method="GET">
                <input class="form-control me-3" type="search" name="query" placeholder="¿Qué estás buscando?"
                    aria-label="Search">
                <button class="btn btn-outline-warning me-3" type="submit">Buscar</button>
            </form>
            <div class="album mt-4">
                <div class="container">
                    <div class="container text-center mt-3">
                        <div class="container-just py-4">
                            <h1 class="display-5" style="color: #b8860b">¡ Soluciones Integrales para la Seguridad y el
                                Bienestar !</h1>
                            <p class="card-text">En nuestra sección V2suministros, ofrecemos una amplia gama de
                                productos diseñados para fortalecer la seguridad y el bienestar en empresas,
                                instituciones educativas y propiedades horizontales. Desde equipos de primeros auxilios
                                hasta herramientas especializadas para la gestión de riesgos y cumplimiento normativo,
                                nuestro objetivo es proporcionar soluciones efectivas para una gestión integral de la
                                seguridad y salud. Explora nuestra selección y encuentra todo lo que necesitas para
                                mantener un entorno seguro y conforme a las normativas vigentes.</p>
                        </div>
                    </div>
                    @can('Crear Productos')
                        <div class="container text-center">
                            <button type="button" class="btn btn-outline-warning p-2" style="--bs-bg-opacity: .5;"
                                data-bs-toggle="modal" data-bs-target="#create">
                                Registrar Producto
                            </button>
                        </div>
                    @endcan
                    <!-- Botón para abrir el modal del carrito -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#carritoModal">
    Ver Carrito
</button>

<!-- Vista de Productos (el código que ya proporcionaste) -->
<div class="row mt-4">
    @foreach ($V2 as $producto)
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm">
                <div class="container py-3">
                    <strong class="d-inline-block fs-5">{{ $producto->nombre }}</strong>
                </div>
                <div class="container-just text-center">
                    <img src="{{ asset('imagenesProducto/img/' . $producto->imagen) }}"
                         class="img-fluid rounded" alt="Producto" style="width: 250px; height: 250px;">
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('carrito.add', $producto->idProducto) }}"
                           class="btn btn-secondary btn-sm">Agregar al Carrito</a>
                        <a href="{{ route('producto.informacion', ['id' => $producto->idProducto]) }}"
                           class="btn btn-outline-warning btn-sm">Más información</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- Modal del Carrito -->
<div class="modal fade" id="carritoModal" tabindex="-1" aria-labelledby="carritoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="carritoModalLabel">Carrito de Compras</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session('cart') && count(session('cart')) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0; @endphp
                            @foreach (session('cart') as $id => $item)
                                <tr>
                                    <td>{{ $item['name'] }}</td>
                                    <td>${{ number_format($item['price'], 2) }}</td>
                                    <td>{{ $item['quantity'] }}</td>
                                    <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                                    <td>
                                        <form action="{{ route('carrito.remove', $id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @php $total += $item['price'] * $item['quantity']; @endphp
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-end">
                        <strong>Total: ${{ number_format($total, 2) }}</strong>
                    </div>

                    <div class="text-end mt-3">
                        <a href="https://wa.me/573126624671?text=Quiero%20comprar%20los%20siguientes%20productos:%0A%0A
                        @foreach (session('cart') as $item)
                            - Producto: {{ $item['name'] }}  - Cantidad: {{ $item['quantity'] }} %0A
                        @endforeach
                        %0A- Total a pagar: {{ number_format($total)}}"
                           class="btn btn-success" target="_blank" rel="noopener noreferrer">
                            Finalizar Compra
                        </a>
                    </div>
                    <div class="text-end mt-3">
                        <form action="{{ route('carrito.clear') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-warning">Vaciar Carrito</button>
                        </form>
                    </div>
                @else
                    <p>No hay productos en el carrito.</p>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>



                </div>
                @include('sistema.V2.create')
            </div>
        </div>
        <div class="container py-5">
            <div class="position-relative p-1 text-center text-muted bg-body border border-dashed rounded-5">
                <br>
                <h1 class="text-body-emphasis mb-4">✨ ¿Qué pasa si no cumples con la norma 0705? ✨</h1>
                <p class="card-text col-lg-9 mx-auto mb-4">
                    No cumplir con la norma 0705 podría resultar en sanciones por parte de la autoridad competente, como
                    multas, suspensiones o incluso cierres temporales del establecimiento. 🚫💼
                </p>
                <p class="card-text col-lg-9 mx-auto mb-4">
                    ¿Cómo puedes asegurarte de cumplir con la norma? Considera contratar a un proveedor de servicios de
                    primeros auxilios. Ellos te ayudarán a revisar tu botiquín y a implementar un plan de capacitación
                    para tus empleados. 🛡️👩‍⚕️ Actuar de manera proactiva garantiza la seguridad de tu entorno laboral
                    y evita riesgos y sanciones para tu empresa. 🌐✅
                </p>
                <div class="container mt-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a href="https://wa.me/573332371006?text=¿Por%20qué%20recargar%20tu%20botiquín%20de%20primeros%20auxilios?"
                            target="_blank" rel="noopener noreferrer" class="btn btn-warning btn-lg"
                            type="button">¡Asegura tu cumplimiento Ahora!</a>
                        <br><br>

                    </div>
                    <br>
                    <div>
                        <p>🛡️✨ Contáctanos para proteger tu negocio contra posibles sanciones. 🚀👩‍⚕️
                            #CumpleNorma0705</p>
                    </div>
                </div>
            </div>
        </div>

    </main>

    @include('sistema.CGV.includes.footer')
    @include('sistema.CGV.includes.botonWhatsapp')

    <script src={{ asset('https://code.jquery.com/jquery-3.6.4.min.js') }}></script>


    <script src={{ asset('../js/code.jquery.com_jquery-3.7.1.js') }}></script>
    <script src={{ asset('../js/cdnjs.cloudflare.com_ajax_libs_lightslider_1.1.6_js_lightslider.min.js') }}></script>
    <script src={{ asset('../js/popper.min.js') }}></script>
    <script src={{ asset('https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js') }}
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async>
    </script>
    <script src={{ asset('../js/script.js') }}></script>
    @include('sistema.CGV.includes.boton')
</body>

</html>
