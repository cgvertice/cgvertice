<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Modal de Edición de Cliente -->
<div class="modal fade" id="edit{{$producto->idProducto}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('productos.update', $producto->idProducto) }}" method="post" enctype="multipart/form-data" id="registroClienteForm{{$producto->idProducto}}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="Nombre" id="Nombre" aria-describedby="helpId" value="{{ $producto->nombre }}" required maxlength="255" oninput="validarNombre()">
                        <small class="text-danger" id="errorNombre"></small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Imagen actual</label>
                        <img src="{{ asset('imagenesProducto/img/' . $producto->imagen) }}" alt="Imagen actual" style="max-width: 100%;">
                    </div>

                    <div class="mb-3">
                        <label for="Imagen" class="form-label">Seleccionar nueva imagen</label>
                        <input type="file" class="form-control" name="Imagen" id="Imagen" accept="image/*">
                        <small class="text-danger" id="errorImagen"></small>
                    </div>
                    <div class="mb-3">
                        <label for="Precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" name="Precio" id="Precio" aria-describedby="helpId" value="{{$producto->precio}}" required oninput="validarPrecio()">
                        <small class="text-danger" id="errorPrecio"></small>
                    </div>
                    <div class="mb-3">
                        <label for="Descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" name="Descripcion" id="Descripcion" rows="3" required oninput="validarDescripcion()">{{ $producto->descripcion }}</textarea>
                        <small class="text-danger" id="errorDescripcion"></small>
                    </div>
                    <div class="mb-3">
                        <label for="InformacionA" class="form-label">Información Adicional</label>
                        <textarea class="form-control" name="InformacionA" id="InformacionA" rows="3" required oninput="validarInformacionA()">{{ $producto->informacionA }}</textarea>
                        <small class="text-danger" id="errorInformacionA"></small>
                    </div>
                    <div class="mb-3">
                        <label for="Opcion" class="form-label">Opción</label>
                        <select class="form-select" name="Opcion" id="Opcion" required onchange="validarOpcion()">
                            <option value="">Selecciona una Opción</option>
                            <option value="Botiquin" {{ old('Opcion', $producto->opcion) == 'Botiquin' ? 'selected' : '' }}>Botiquin</option>
                            <option value="Otro" {{ old('Opcion', $producto->opcion) == 'Otro' ? 'selected' : '' }}>Otro</option>
                        </select>
                        <small class="text-danger" id="errorOpcion"></small>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-outline-warning" onclick="validarFormularioCliente('{{$producto->idProducto}}')">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function mostrarSweetAlert(icon, title, text) {
        Swal.fire({
            icon: icon,
            title: title,
            text: text
        });
    }

    function validarNombre() {
        var nombre = document.getElementById('Nombre').value;
        var nombreValido = /^[a-zA-Z\s]+$/.test(nombre);
        document.getElementById('errorNombre').innerText = nombre ? (nombreValido ? '' : 'El nombre no válido, solo letras y espacios') : 'Campo obligatorio';
        return nombreValido;
    }

    function validarImagen() {
        var imagen = document.getElementById('Imagen').value;
        // Puedes agregar validaciones específicas para el tipo de archivo si lo deseas
        var imagenValida = imagen.trim() !== '';
        document.getElementById('errorImagen').innerText = imagen ? (imagenValida ? '' : 'Seleccione una imagen válida') : 'Campo obligatorio';
        return imagenValida;
    }

    function validarPrecio() {
        var precio = document.getElementById('Precio').value;
        var precioValido = /^\d+(\.\d{1,2})?$/.test(precio);
        document.getElementById('errorPrecio').innerText = precio ? (precioValido ? '' : 'El precio no válido, formato correcto: 123.45') : 'Campo obligatorio';
        return precioValido;
    }

    function validarDescripcion() {
        var descripcion = document.getElementById('Descripcion').value;
        var descripcionValida = descripcion.trim() !== '';
        document.getElementById('errorDescripcion').innerText = descripcion ? (descripcionValida ? '' : 'La descripción no puede estar vacía') : 'Campo obligatorio';
        return descripcionValida;
    }

    function validarInformacionA() {
        var informacionA = document.getElementById('InformacionA').value;
        var informacionAValida = informacionA.trim() !== '';
        document.getElementById('errorInformacionA').innerText = informacionA ? (informacionAValida ? '' : 'La información adicional no puede estar vacía') : 'Campo obligatorio';
        return informacionAValida;
    }

    function validarOpcion() {
        var opcion = document.getElementById('Opcion').value;
        var opcionValida = opcion === 'Botiquin' || opcion === 'Otro';
        document.getElementById('errorOpcion').innerText = opcion ? (opcionValida ? '' : 'Seleccione una opción válida') : 'Campo obligatorio';
        return opcionValida;
    }

    document.getElementById('Nombre').addEventListener('input', validarNombre);
    document.getElementById('Imagen').addEventListener('change', validarImagen);
    document.getElementById('Precio').addEventListener('input', validarPrecio);
    document.getElementById('Descripcion').addEventListener('input', validarDescripcion);
    document.getElementById('InformacionA').addEventListener('input', validarInformacionA);
    document.getElementById('Opcion').addEventListener('change', validarOpcion);

    function validarFormularioCliente(idProducto) {
        var formularioValido = true;

        // Validar imagen solo si se selecciona una nueva
        var inputImagen = document.getElementById('Imagen');
        if (inputImagen.files.length > 0) {
            formularioValido = formularioValido && validarImagen();
        }

        formularioValido = formularioValido && validarNombre();
        formularioValido = formularioValido && validarPrecio();
        formularioValido = formularioValido && validarDescripcion();
        formularioValido = formularioValido && validarInformacionA();
        formularioValido = formularioValido && validarOpcion();

        if (formularioValido) {
            var form = document.getElementById('registroClienteForm' + idProducto);
            form.submit();
        } else {
            mostrarSweetAlert('error', 'Error', 'Por favor, complete todos los campos obligatorios.');
        }
    }
</script>