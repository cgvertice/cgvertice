<!-- Agrega el enlace a SweetAlert en la sección head -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Modal de Registro de Noticia -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Noticia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data" id="registroNoticiaForm">
                @csrf
                <div class="modal-body">
                    <!-- Campo Nombre de la noticia -->
                    <div class="mb-3">
                        <label for="NombreN" class="form-label">Nombre de la noticia</label>
                        <input type="text" class="form-control" name="NombreN" id="NombreN" value="{{ old('NombreN') }}" required maxlength="255" oninput="validarNombre()">
                        <small class="text-danger" id="errorNombre"></small>
                    </div>

                    <!-- Campo Imagen -->
                    <div class="mb-3">
                        <label for="Imagen" class="form-label">Imagen</label>
                        <input type="file" class="form-control" name="Imagen" id="Imagen" accept="image/*" required onchange="validarImagen()">
                        <small class="text-danger" id="errorImagen"></small>
                    </div>

                    <!-- Campo Video (opcional) -->
                    <div class="mb-3">
                        <label for="Video" class="form-label">Video (opcional)</label>
                        <input type="file" class="form-control" name="Video" id="Video" accept="video/mp4,video/mpeg,video/quicktime">
                        <small class="text-danger" id="errorVideo"></small>
                    </div>

                    <!-- Campo Descripción -->
                    <div class="mb-3">
                        <label for="DescripcionN" class="form-label">Descripción</label>
                        <textarea class="form-control" name="DescripcionN" id="DescripcionN" rows="3" required oninput="validarDescripcion()">{{ old('DescripcionN') }}</textarea>
                        <small class="text-danger" id="errorDescripcionN"></small>
                    </div>

                    <!-- Campo Autor -->
                    <div class="mb-3">
                        <label for="Autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" name="Autor" id="Autor" value="{{ old('Autor') }}" required maxlength="255" oninput="validarAutor()">
                        <small class="text-danger" id="errorAutor"></small>
                    </div>

                    <!-- Campo URL (opcional) -->
                    <div class="mb-3">
                        <label for="Url" class="form-label">URL (opcional)</label>
                        <input type="url" class="form-control" name="Url" id="Url" placeholder="https://ejemplo.com" value="{{ old('Url') }}" oninput="validarUrl()">
                        <small class="text-danger" id="errorUrl"></small>
                    </div>

                    <!-- Campo Opción -->
                    <div class="mb-3">
                        <label for="Opcion" class="form-label">Opción</label>
                        <select class="form-select" name="Opcion" id="Opcion" required onchange="validarOpcion()">
                            <option value="">Selecciona una Opción</option>
                            <option value="Noticias de Actualidad">Noticias de Actualidad</option>
                            <option value="Consultas Normativas">Consultas Normativas</option>
                            <option value="Publicaciones Recientes">Publicaciones Recientes</option>
                        </select>
                        <small class="text-danger" id="errorOpcion"></small>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-outline-warning" id="Guardar" onclick="validarFormularioNoticias()">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Validaciones -->
<script>
    function mostrarSweetAlert(icon, title, text) {
        Swal.fire({
            icon: icon,
            title: title,
            text: text
        });
    }

    function validarNombre() {
        var nombre = document.getElementById('NombreN').value;
        var nombreValido = /^[a-zA-ZñÑ\s]+$/.test(nombre); // Modificado para incluir la letra "ñ"
        document.getElementById('errorNombre').innerText = nombre ? (nombreValido ? '' : 'El nombre no válido, solo letras y espacios') : '';
        return nombreValido;
    }

    function validarImagen() {
        var imagen = document.getElementById('Imagen').value;
        var imagenValida = imagen.trim() !== '';
        document.getElementById('errorImagen').innerText = imagen ? (imagenValida ? '' : 'Seleccione una imagen válida') : '';
        return imagenValida;
    }

    function validarDescripcion() {
        var descripcion = document.getElementById('DescripcionN').value;
        var descripcionValida = descripcion.trim() !== '';
        document.getElementById('errorDescripcionN').innerText = descripcion ? (descripcionValida ? '' : 'La descripción no puede estar vacía') : '';
        return descripcionValida;
    }

    function validarAutor() {
        var autor = document.getElementById('Autor').value;
        var autorValido = /^[a-zA-ZñÑ\s]+$/.test(autor); // Solo letras y espacios
        document.getElementById('errorAutor').innerText = autor ? (autorValido ? '' : 'El autor no es válido, solo letras y espacios') : '';
        return autorValido;
    }

    function validarUrl() {
    var url = document.getElementById('Url').value;
    var urlValida = !url || /^(https?:\/\/)?([^\s$.?#].[^\s]*)$/i.test(url); // Nueva expresión regular
    document.getElementById('errorUrl').innerText = url ? (urlValida ? '' : 'La URL no es válida') : '';
    return urlValida;
}

    function validarOpcion() {
        var opcion = document.getElementById('Opcion').value;
        var opcionValida = opcion === 'Noticias de Actualidad' || opcion === 'Consultas Normativas' || opcion === 'Publicaciones Recientes';
        document.getElementById('errorOpcion').innerText = opcion ? (opcionValida ? '' : 'Seleccione una opción válida') : '';
        return opcionValida;
    }

    function validarFormularioNoticias() {
        var formularioValido = true;
        formularioValido = formularioValido && validarNombre();
        formularioValido = formularioValido && validarImagen();
        formularioValido = formularioValido && validarDescripcion();
        formularioValido = formularioValido && validarAutor();
        formularioValido = formularioValido && validarUrl();
        formularioValido = formularioValido && validarOpcion();

        if (formularioValido) {
            document.getElementById('registroNoticiaForm').submit();
        } else {
            mostrarSweetAlert('error', 'Error', 'Por favor, complete todos los campos obligatorios.');
        }
    }

    document.getElementById('NombreN').addEventListener('input', validarNombre);
    document.getElementById('Imagen').addEventListener('change', validarImagen);
    document.getElementById('DescripcionN').addEventListener('input', validarDescripcion);
    document.getElementById('Autor').addEventListener('input', validarAutor);
    document.getElementById('Url').addEventListener('input', validarUrl);
    document.getElementById('Opcion').addEventListener('change', validarOpcion);
</script>
