<div class="modal fade" id="edit{{ $blogg->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Noticia - {{ $blogg->nombre_noticia }}</h1>
            </div>
            <form action="{{ route('blogs.update', $blogg->id) }}" method="post" enctype="multipart/form-data"
                id="editarNoticiaForm{{ $blogg->id }}">
                @csrf
                @method('PUT')
                <div class="modal-body row">
                    <!-- Columna izquierda para la imagen -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="NombreE" class="form-label">Nombre de la noticia</label>
                            <input type="text" class="form-control" name="NombreE" id="NombreE"
                                aria-describedby="helpId" value="{{ $blogg->nombre_noticia }}" required maxlength="255"
                                oninput="validarNombreE()">
                            <small class="text-danger" id="errorNombre"></small>
                        </div>
                        <div class="mb-3">
                            <label for="ImagenE" class="form-label">Imagen actual</label>
                            <img src="{{ asset($blogg->foto) }}" alt="Imagen actual" style="max-width: 100%;">
                        </div>
                        <div class="mb-3">
                            <label for="ImagenE" class="form-label">Seleccionar nueva imagen</label>
                            <input type="file" class="form-control" name="ImagenE" id="ImagenE" accept="image/*">
                            <small class="text-danger" id="errorImagen"></small>
                        </div>
                        <div class="mb-3">
                            <label for="DescripcionE" class="form-label">Descripción</label>
                            <textarea class="form-control" name="DescripcionE" id="DescripcionE" rows="3" required
                                oninput="validarDescripcionE()">{{ $blogg->descripcion_noticia }}</textarea>
                            <small class="text-danger" id="errorDescripcion"></small>
                        </div>
                        <div class="mb-3">
                            <label for="OpcionE" class="form-label">Opción</label>
                            <select class="form-select" name="OpcionE" id="OpcionE" required
                                onchange="validarOpcionE()">
                                <option value="">Selecciona una Opción</option>
                                <option value="Noticias de Actualidad"
                                    {{ $blogg->opcion == 'Noticias de Actualidad' ? 'selected' : '' }}>Noticias de
                                    Actualidad</option>
                                <option value="Consultas Normativas"
                                    {{ $blogg->opcion == 'Consultas Normativas' ? 'selected' : '' }}>Consultas
                                    Normativas</option>
                                <option value="Publicaciónes Recientes"
                                    {{ $blogg->opcion == 'Publicaciónes Recientes' ? 'selected' : '' }}>Publicaciónes
                                    Recientes</option>
                            </select>
                            <small class="text-danger" id="errorOpcion"></small>
                        </div>
                    </div>
                    <!-- Columna derecha para el video -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="VideoE" class="form-label">Video actual</label>
                            @if ($blogg->video)
                                <video width="100%" controls>
                                    <source src="{{ asset($blogg->video) }}" type="video/mp4">
                                    Tu navegador no soporta el elemento de video.
                                </video>
                            @else
                                <p>No hay video disponible</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="VideoE" class="form-label">Seleccionar nuevo video</label>
                            <input type="file" class="form-control" name="VideoE" id="VideoE"
                                accept="video/mp4,video/mpeg,video/quicktime">
                            <small class="text-danger" id="errorVideo"></small>
                        </div>

                        {{-- opciones para cargar imagen y video --}}
                        <div>
                            <button type="button" id="cargar" class="btn btn-info"
                                onclick="cargarMultimedias()">Cargar</button>
                        </div>

                        <div>
                            <progress id="progressBar" value="0" max="100" style="width:100%;"></progress>
                        </div>

                        <!-- Campos invisibles para la ruta de los archivos multimedia -->
                        <input type="hidden" class="form-control" name="rutaImagen" id="rutaImagen"
                            value="{{ $blogg->foto }}">
                        <input type="hidden" class="form-control" name="rutaVideo" id="rutaVideo"
                            value="{{ $blogg->video }}">

                        <!-- Indicadores de carga -->
                        <div id="estadoCarga" class="mt-2">
                            <span id="estadoImagen" style="display:none; color: green;">Imagen: OK</span> <br>
                            <span id="estadoVideo" style="display:none; color: green;">Video: OK</span>
                        </div>

                        <div class="mb-3">
                            <label for="AutorE" class="form-label">Autor</label>
                            <input type="text" class="form-control" name="AutorE" id="AutorE"
                                aria-describedby="helpId" value="{{ $blogg->author }}" required maxlength="255"
                                oninput="validarAutorE()">
                            <small class="text-danger" id="errorAutor"></small>
                        </div>
                        <div class="mb-3">
                            <label for="UrlE" class="form-label">URL</label>
                            <input type="url" class="form-control" name="UrlE" id="UrlE"
                                aria-describedby="helpId" value="{{ $blogg->url }}" required
                                oninput="validarUrlE()">
                            <small class="text-danger" id="errorUrl"></small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                        onclick="eliminarMultimedia()">Cerrar</button>
                    <button type="button" class="btn btn-outline-warning"
                        onclick="validarFormularioEdicion('{{ $blogg->id }}')">Guardar</button>

                </div>
            </form>
        </div>
    </div>
</div>


<script>
    function validarNombreE() {
        var nombre = document.getElementById('NombreE').value.trim();
        var errorNombre = document.getElementById('errorNombre');
        if (nombre.length === 0) {
            errorNombre.textContent = 'El nombre de la noticia es obligatorio';
        } else {
            errorNombre.textContent = '';
        }
    }


    function validarDescripcionE() {
        var descripcion = document.getElementById('DescripcionE').value.trim();
        var errorDescripcion = document.getElementById('errorDescripcion');
        if (descripcion.length === 0) {
            errorDescripcion.textContent = 'La descripción es obligatoria';
        } else {
            errorDescripcion.textContent = '';
        }
    }

    function validarOpcionE() {
        var opcion = document.getElementById('OpcionE').value;
        var errorOpcion = document.getElementById('errorOpcion');
        if (opcion === '') {
            errorOpcion.textContent = 'Seleccionar una opción es obligatorio';
        } else {
            errorOpcion.textContent = '';
        }
    }



    function validarAutorE() {
        var autor = document.getElementById('AutorE').value.trim();
        var errorAutor = document.getElementById('errorAutor');
        if (autor.length === 0) {
            errorAutor.textContent = 'El nombre del autor es obligatorio';
        } else {
            errorAutor.textContent = '';
        }
    }

    function validarUrlE() {
        var url = document.getElementById('UrlE').value.trim();
        var errorUrl = document.getElementById('errorUrl');
        // Nueva expresión regular más flexible
        var regexUrl = /^(https?:\/\/)?([^\s$.?#].[^\s]*)$/i;

        // if (!regexUrl.test(url)) {
        //     errorUrl.textContent = 'Debes ingresar una URL válida';
        // } else {
        //     errorUrl.textContent = '';
        // }
    }

    function validarFormularioEdicion(id) {
        validarNombreE();
        validarDescripcionE();
        validarOpcionE();
        validarAutorE();
        validarUrlE();

        var errorNombre = document.getElementById('errorNombre').textContent;
        var errorVideo = document.getElementById('errorVideo').textContent;
        var errorDescripcion = document.getElementById('errorDescripcion').textContent;
        var errorOpcion = document.getElementById('errorOpcion').textContent;
        var errorAutor = document.getElementById('errorAutor').textContent;
        var errorUrl = document.getElementById('errorUrl').textContent;

        // Si no hay errores, enviar el formulario
        if (errorNombre === '' && errorDescripcion === '' && errorOpcion === '' && errorAutor === '' && errorUrl ===
            '') {
            document.getElementById('editarNoticiaForm' + id).submit();
        }
    }

    function mostrarSweetAlert(icon, title, text) {
        Swal.fire({
            icon: icon,
            title: title,
            text: text
        });
    }

    function cargarMultimedias() {
        var formData = new FormData();

        // Añadir la imagen al FormData
        var imagen = document.getElementById('ImagenE').files[0];
        console.log("LA IMAGEN ES" + imagen)
        if (imagen) {
            formData.append('Imagen', imagen);
        }

        // Añadir el video (si está presente)
        var video = document.getElementById('VideoE').files[0];
        console.log("EL VIDEO ES" + video)
        if (video) {
            formData.append('Video', video);
        }

        // Añadir el token CSRF para la seguridad en Laravel
        formData.append('_token', '{{ csrf_token() }}');

        // Petición AJAX para subir los archivos
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '{{ route('blogs.uploadMultimedia') }}', true);
        xhr.upload.onprogress = function(event) {
            if (event.lengthComputable) {
                var percentComplete = Math.round((event.loaded / event.total) * 100);
                document.getElementById('progressBar').value = percentComplete;
            }
        };
        xhr.onload = function() {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                // Asignar las rutas a los campos ocultos
                document.getElementById('rutaImagen').value = response.rutaImagen;
                document.getElementById('rutaVideo').value = response.rutaVideo;

                // Mostrar mensaje de éxito
                mostrarSweetAlert('success', 'Éxito', 'Los archivos han sido cargados correctamente.');

                // Actualizar el estado de la carga
                if (response.rutaImagen) {
                    document.getElementById('estadoImagen').style.display = 'inline';
                }
                if (response.rutaVideo) {
                    document.getElementById('estadoVideo').style.display = 'inline';
                }
            } else {
                // Mostrar mensaje de error
                mostrarSweetAlert('error', 'Error', 'Ocurrió un error al cargar los archivos.');
            }
        };
        xhr.onerror = function() {
            mostrarSweetAlert('error', 'Error', 'No se pudo completar la carga.');
        };

        // Enviar los archivos
        xhr.send(formData);
    }

    function eliminarMultimedia() {
        const formData = new FormData();

        let rutaImagen = document.getElementById('rutaImagen').value;
        let rutaVideo = document.getElementById('rutaVideo').value;
        let estadoImg = document.getElementById('estadoImagen');
        let estadoVideo = document.getElementById('estadoVideo');

        console.log(estadoImg.style.display);
        console.log(estadoVideo.style.display);

        // Verificar si la imagen está visible antes de eliminarla
        if (estadoImg.style.display === 'inline') {
            formData.append('rutaImagen', rutaImagen); // Asignar una clave para la imagen
        }

        // Verificar si el video está visible antes de eliminarlo
        if (estadoVideo.style.display === 'inline') {
            formData.append('rutaVideo', rutaVideo); // Asignar una clave para el video
        }

        // Añadir el token CSRF para la seguridad
        formData.append('_token', '{{ csrf_token() }}');

        // Crear la solicitud XMLHttpRequest
        var xhr = new XMLHttpRequest();

        // Configurar el método y la ruta a donde se enviará la solicitud
        xhr.open('POST', '{{ route('blogs.deleteMultimedia') }}', true);

        // Configurar el callback que se ejecutará al recibir una respuesta del servidor
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Si la respuesta es exitosa, mostrar el SweetAlert
               conosole.log('Los Archivos Multimedia se han Eliminado')
            } else {
                // Manejo de errores si la solicitud falla
                mostrarSweetAlert('error', 'Error', 'Hubo un problema al eliminar los archivos.');
            }
        };

        // Enviar la solicitud al servidor con los datos de FormData
        xhr.send(formData);
    }
</script>
