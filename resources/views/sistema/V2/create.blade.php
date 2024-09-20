<!-- Agrega el enlace a SweetAlert en la sección head -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Modal de Registro de Cliente -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('productos.store') }}" method="post" enctype="multipart/form-data" id="registroClienteForm">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="Nombre" id="Nombre" aria-describedby="helpId" value="{{ old('Nombre') }}" required maxlength="255" oninput="validarNombre()">
                        <small class="text-danger" id="errorNombre"></small>
                    </div>
                    <div class="mb-3">
                        <label for="Imagen" class="form-label">Imagen</label>
                        <input type="file" class="form-control" name="Imagen" id="Imagen" accept="image/*" required>
                        <small class="text-danger" id="errorImagen"></small>
                    </div>
                    <div class="mb-3">
                        <label for="Precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" name="Precio" id="Precio" aria-describedby="helpId" value="{{ old('Precio') }}" required oninput="validarPrecio()">
                        <small class="text-danger" id="errorPrecio"></small>
                    </div>
                    <div class="mb-3">
                        <label for="Descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" name="Descripcion" id="Descripcion" rows="3" required oninput="validarDescripcion()">{{ old('Descripcion') }}</textarea>
                        <small class="text-danger" id="errorDescripcion"></small>
                    </div>
                    <div class="mb-3">
                        <label for="InformacionA" class="form-label">Información Adicional</label>
                        <textarea class="form-control" name="InformacionA" id="InformacionA" rows="3" required oninput="validarInformacionA()">{{ old('InformacionA') }}</textarea>
                        <small class="text-danger" id="errorInformacionA"></small>
                    </div>
                    <div class="mb-3">
                        <label for="Opcion" class="form-label">Opción</label>
                        <select class="form-select" name="Opcion" id="Opcion" required onchange="validarOpcion()">
                            <option value="">Selecciona una Opción</option>
                            <option value="Botiquin" {{ old('Opcion') == 'Botiquin' ? 'selected' : '' }}>Botiquin</option>
                            <option value="Otro" {{ old('Opcion') == 'Otro' ? 'selected' : '' }}>Otro</option>
                        </select>
                        <small class="text-danger" id="errorOpcion"></small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <!-- Cambia el tipo de botón para activar la validación del formulario -->
                    <button type="button" class="btn btn-outline-warning" id="Guardar" onclick="validarFormularioCliente()">Guardar</button>
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

        function validarFormularioCliente() {
            var formularioValido = true;
            formularioValido = formularioValido && validarNombre();
            formularioValido = formularioValido && validarImagen();
            formularioValido = formularioValido && validarPrecio();
            formularioValido = formularioValido && validarDescripcion();
            formularioValido = formularioValido && validarInformacionA();
            formularioValido = formularioValido && validarOpcion();

            if (formularioValido) {
                var form = document.getElementById('registroClienteForm');
                form.submit();
            } else {
                mostrarSweetAlert('error', 'Error', 'Por favor, complete todos los campos obligatorios.');
            }
        }
    </script>