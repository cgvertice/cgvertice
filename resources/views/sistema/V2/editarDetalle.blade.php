<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Modal de Edición de Detalles -->
<div class="modal fade" id="editarDetalle{{ $detalle->idDetalle }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Detalle</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('detalleproductos.update', $detalle->idDetalle) }}" method="post" enctype="multipart/form-data" id="registroClienteForm{{$detalle->idDetalle}}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div id="elementosContainer">
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="w-30">
                                <label for="Elemento" class="form-label">Elementos</label>
                                <input type="text" class="form-control" name="Elemento" id="Elemento" aria-describedby="helpId" value="{{$detalle->elementos}}" required oninput="validarElemento()">
                                <small class="text-danger" id="errorElementos"></small>
                            </div>
                            &nbsp;
                            <div class="w-30">
                                <label for="Unidad" class="form-label">Unidades</label>
                                <input type="text" class="form-control" name="Unidad" id="Unidad" aria-describedby="helpId" value="{{ $detalle->unidades }}" required maxlength="255" oninput="validarUnidad()">
                                <small class="text-danger" id="errorUnidades"></small>
                            </div>
                            &nbsp;
                            <div class="w-30">
                                <label for="Cantidad" class="form-label">Cantidad</label>
                                <input type="number" class="form-control" name="Cantidad" id="Cantidad" aria-describedby="helpId" value="{{ $detalle->cantidad }}" required maxlength="255" oninput="validarCantidad()">
                                <small class="text-danger" id="errorCantidad"></small>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-outline-secondary" onclick="validarFormularioDetalles('{{$detalle->idDetalle}}')">Guardar</button>
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

    function validarElemento() {
        var elemento = document.getElementById('Elemento').value;
        var elementoValido = elemento.trim() !== '';
        document.getElementById('errorElementos').innerText = elemento ? (elementoValido ? '' : 'Ingrese un elemento válido') : 'Campo obligatorio';
        return elementoValido;
    }

    function validarUnidad() {
        var unidad = document.getElementById('Unidad').value;
        var unidadValida = unidad.trim() !== '';
        document.getElementById('errorUnidades').innerText = unidad ? (unidadValida ? '' : 'Ingrese una unidad válida') : 'Campo obligatorio';
        return unidadValida;
    }

    function validarCantidad() {
        var cantidad = document.getElementById('Cantidad').value;
        var cantidadValida = cantidad.trim() !== '';
        document.getElementById('errorCantidad').innerText = cantidad ? (cantidadValida ? '' : 'Ingrese una cantidad válida') : 'Campo obligatorio';
        return cantidadValida;
    }

    // ... Otras funciones de validación

    document.getElementById('Elemento').addEventListener('input', validarElemento);
    document.getElementById('Unidad').addEventListener('input', validarUnidad);
    document.getElementById('Cantidad').addEventListener('input', validarCantidad);
    // ... Otros eventos de input para las demás validaciones

    function validarFormularioDetalles(idDetalle) {
        var formularioValido = true;

        formularioValido = formularioValido && validarElemento();
        formularioValido = formularioValido && validarUnidad();
        formularioValido = formularioValido && validarCantidad();
        // ... Otras validaciones

        if (formularioValido) {
            var form = document.getElementById('registroClienteForm' + idDetalle);
            form.submit();
        } else {
            mostrarSweetAlert('error', 'Error', 'Por favor, complete todos los campos obligatorios.');
        }
    }
</script>
