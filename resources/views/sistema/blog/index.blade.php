<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">

<head>
    <meta charset="utf-8" />
    <!-- Seccion de la Configuración y Metadatos -->
    <script src={{ asset('../js/color-modes.js') }}></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Converge || Corporate Group Vértice</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="../img/Converge.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/cdn.jsdelivr.net_npm_bootstrap@5.3.2_dist_css_bootstrap.min.css" />
    <link rel="stylesheet" href="../css/cdnjs.cloudflare.com_ajax_libs_lightslider_1.1.6_css_lightslider.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    @include('sistema.CGV.includes.NewNavbar')
    <br>
    <br>

    @include('sistema.CGV.includes.boton')
    @include('sistema.CGV.includes.regresarArriba')

    <main class="container">

        <section class="section-converge-video">
            <div class="container">
                <div class="row">
                    <!-- Columna para la descripción -->
                    <div class="col-lg-6 text-center d-flex align-items-center" style="border: 2px solid #b8860b; padding: 20px; border-radius: 10px;">
                        <div>
                            <h1 class="display-4" style="color:#b8860b">¡Bienvenidos a Converge!</h1>
                            <p>
                                Nos alegra que te unas a nuestra comunidad de información. En Converge, estamos comprometidos a
                                ofrecerte las noticias más actuales, relevantes y confiables del panorama global. Ya sea política,
                                economía, tecnología, entretenimiento o deportes, nuestro objetivo es mantenerte bien informado y al
                                tanto de los acontecimientos más importantes del momento.
                            </p>
                            <p>
                                Aquí, no solo reportamos noticias, también fomentamos el diálogo y la reflexión. Queremos ser tu
                                fuente de información confiable y tu espacio para el intercambio de ideas.
                            </p>
                            <p>
                                Gracias por confiar en nosotros para mantenerte informado. ¡Vamos a converger en la verdad y el
                                conocimiento!
                            </p>
                        </div>
                    </div>
        
                    <!-- Columna para el GIF animado -->
                    <div class="col-lg-6 d-flex justify-content-center align-items-center" style="border: 2px solid #b8860b; padding: 20px; border-radius: 10px;">
                        <div class="ratio ratio-1x1 w-40">
                            <iframe src="{{ asset('/img/logoanimado.gif') }}" title="GIF animado" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen style="border: none; width: 100%; height: 100%;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Div del Bienvenidos y la imagen -->
        {{-- ESTE ES EL CÓDIGO ANTIGUO DE LA PRESENTACIÓN DE CONVERGE --}}
        {{-- <div class="p-4 rounded bg-body-secondary" style="display: flex; flex-direction:column; ">
            <div class="col-lg-12 text-center">
                <img src={{ asset('../img/Converge.png') }} alt="Logotipo Converge" class="img-fluid" style="height: 350px" />
            </div>
            <div class="col-lg-12 text-center">
                <h1 class="display-4" style="color:#b8860b">¡Bienvenidos a Converge!</h1>
                <p class="my-3">
                    Nos alegra que te unas a nuestra comunidad de información. En Converge, estamos comprometidos a
                    ofrecerte las noticias más actuales, relevantes y confiables del panorama global. Ya sea política,
                    economía, tecnología, entretenimiento o deportes, nuestro objetivo es mantenerte bien informado y al
                    tanto de los acontecimientos más importantes del momento.

                    Aquí, no solo reportamos noticias, también fomentamos el diálogo y la reflexión. Queremos ser tu
                    fuente de información confiable y tu espacio para el intercambio de ideas.

                    Gracias por confiar en nosotros para mantenerte informado. ¡Vamos a converger en la verdad y el
                    conocimiento!.
                    
                </p>
            </div>
        </div> --}}
        <br>
        <div class="container py-1">
            <hr>
        </div>
        <!-- Card-slider Recomendados -->
        <h3 class="display-4">Tendencia</h3>

        <!-- Botón para crear noticia -->
        @can('Crear Noticias')
            <div class="container text-center">
                <button type="button" class="btn btn btn-outline-warning m-4" data-bs-toggle="modal"
                    data-bs-target="#create">
                    Crear Noticia
                </button>
            </div>
        @endcan
        <div class="ContainerBlogSecond">
            <div class="row justify-content-center">
                @foreach ($Blog as $blogg)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        {{-- cardBlog (Buscar así tal cual en el archivo de css) --}}
                        <div class="cardBlog">
                            <div class="CardNoticias">
                                <strong class="CategoriaNoticias">{{ $blogg->opcion }}</strong>
                            </div>
                            <div class="imgcontainer">
                                <img src="{{ asset($blogg->foto) }}" class="img-fluid rounded">
                            </div>
                            <p class="NombreNoticias">{{ $blogg->nombre_noticia }}</p>
                            <div class="CardBlogBtn">
                                <button type="button" class="btn btn-warning mt-3" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{ $blogg->id }}">
                                    Más información
                                </button>
                                <div class="btndropdown">
                                    @if (Auth::check() && (Auth::user()->can('Editar Noticias') || Auth::user()->can('Eliminar Noticias')))
                                        <button class="btn btn-warning" type="button"
                                            id="dropdownMenuButton{{ $blogg->id }}" data-bs-toggle="dropdown">
                                            Editar<i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu"
                                            aria-labelledby="dropdownMenuButton{{ $blogg->id }}">
                                            @can('Editar Noticias')
                                                <li>
                                                    <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#edit{{ $blogg->id }}">Editar</button>
                                                </li>
                                            @endcan
                                            @can('Eliminar Noticias')
                                                <li>
                                                    <button type="button" class="dropdown-item"
                                                        data-noticia-id="{{ $blogg->id }}"
                                                        onclick="eliminarNoticia('{{ $blogg->id }}')">Eliminar</button>
                                                </li>
                                            @endcan
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal{{ $blogg->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $blogg->nombre_noticia }}
                                    </h1>
                                    <button type="button" class="btn-close"
                                        data-bs-dismiss="modal"aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <hr>
                                        @if ($blogg->video)
                                            <video id="video{{ $blogg->id }}" width="100%" controls>
                                                <source src="{{ asset($blogg->video) }}" type="video/mp4" alt="Video alternativo">
                                                Tu navegador no soporta el elemento de video.
                                            </video>
                                        @else
                                        <img src="{{ asset($blogg->foto) }}" alt="Imagen actual" style="max-width: 100%;">
                                        @endif
                                    </div>
                                    <hr>
                                    <p> Descripcion: <br> {{ $blogg->descripcion_noticia }}</p>
                                    <p><strong>Autor:</strong> {{ $blogg->author }}</p>
                                    @if($blogg->url)
                                        <p><strong>Enlace:</strong> <a href="{{ $blogg->url }}" target="_blank">Visitar página</a></p>
                                    @endif
                                    <p>Fecha de publicación: {{ \Carbon\Carbon::parse($blogg->created_at)->format('d/m/Y') }}</p>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <script>
                        // Función para manejar errores de carga de video
                        document.addEventListener('DOMContentLoaded', function() {
                            var video = document.getElementById('video{{ $blogg->id }}');
                            if (video) {
                                video.addEventListener('error', function() {
                                    var errorMessage = document.createElement('p');
                                    errorMessage.textContent = 'El video no se puede cargar.';
                                    video.parentNode.insertBefore(errorMessage, video.nextSibling);
                                });
                            }
                        });
                    </script>

                    @include('sistema.blog.editar')
                @endforeach
            </div>
        </div>

        @include('sistema.blog.create')
    </main>

    <main class="container-just">
        <!-- Sección del Contenedor del footer -->
        <div class="container-fluid flex-grow-1">
            <div class="row py-5">
                <div class="col-lg-12 text-center">
                    <h1 class="display-3" style="color:#b8860b">Explora más</h1>
                    <p class="lead mb-0">Descubre contenido fascinante en nuestro <a href="#"
                            id="btnNosotros">blog.</a></p>
                    <script>
                        document.getElementById('btnNosotros').addEventListener('click', function() {
                            window.location.href = "{{ route('nosotros') }}";
                        });
                    </script>
                    <p class="lead py-3">Diseñado con cariño para ti. ¡Disfruta de la lectura!</p>
                </div>
            </div>
        </div>

        @include('sistema.CGV.includes.footer')
        @include('sistema.CGV.includes.botonWhatsapp')

    </main>


    <script>
        function eliminarNoticia(idNoticia) {
            Swal.fire({
                title: '¿Confirmar eliminación?',
                text: 'Estás a punto de eliminar la noticia.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Define la URL de la solicitud DELETE utilizando la ruta con nombre
                    const url = `{{ route('blogs.destroy', ':id') }}`.replace(':id', idNoticia);

                    // Realiza una solicitud DELETE usando Fetch API
                    fetch(url, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                    }).then(response => {
                        if (response.ok) {
                            // Redirige a la ruta /V2 después de eliminar
                            window.location.href = '/Blog';
                        } else {
                            // Muestra un mensaje de error si la eliminación no fue exitosa
                            Swal.fire({
                                icon: 'success',
                                title: 'Eliminación correcta',
                                text: 'La noticia se eliminó correctamente.'
                            });
                            window.location.reload();
                        }
                    }).catch(error => {
                        console.error(error);
                        // Muestra un mensaje de error si hay un problema con la solicitud
                        Swal.fire({
                            icon: 'error',
                            title: 'Error al eliminar la noticia',
                            text: 'Hubo un problema al intentar eliminar la noticia.'
                        });
                    });
                }
            });
        }
    </script>
</body>

</html>
