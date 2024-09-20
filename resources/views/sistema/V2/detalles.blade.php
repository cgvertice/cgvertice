<!-- Modal de Registro de Elementos para detalleProducto -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Elementos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('detalleproductos.store') }}" method="post" enctype="multipart/form-data" id="registroElementosForm">
                @csrf
                <input type="hidden" name="id_producto" value="{{ $producto->idProducto }}">
                <div class="modal-body">
                    <div id="elementosContainer">
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="w-30">
                                <label for="Elementos" class="form-label">Elementos</label>
                                <input type="text" class="form-control" name="elementos[]" aria-describedby="helpElementos" required maxlength="50">
                                <small class="text-danger" id="errorElementos"></small>
                            </div>
                            &nbsp;
                            <div class="w-30">
                                <label for="Unidades" class="form-label">Unidades</label>
                                <input type="text" class="form-control" name="unidades[]" aria-describedby="helpUnidades" required maxlength="30">
                                <small class="text-danger" id="errorUnidades"></small>
                            </div>
                            &nbsp;
                            <div class="w-30">
                                <label for="Cantidad" class="form-label">Cantidad</label>
                                <input type="number" class="form-control" name="cantidades[]" aria-describedby="helpCantidad" required>
                                <small class="text-danger" id="errorCantidad"></small>
                            </div>
                            <button type="button" class="btn btn-outline-danger" onclick="eliminarFila(this)">Eliminar</button>
                        </div>

                        <hr>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success" onclick="agregarCampos()">Agregar Elemento</button>
                    <button type="button" class="btn btn-outline-primary" id="Guardar" onclick="validarFormularioElementos()">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function mostrarSweetAlert(icon, title, text) {
        Swal.fire({
            icon: icon,
            title: title,
            text: text
        });
    }

    function agregarCampos() {
        var elementosContainer = document.getElementById('elementosContainer');
        var nuevoElemento = elementosContainer.children[0].cloneNode(true);

        // Limpiar valores y mensajes de error en el nuevo conjunto de campos
        nuevoElemento.querySelector('input[name="elementos[]"]').value = '';
        nuevoElemento.querySelector('input[name="unidades[]"]').value = '';
        nuevoElemento.querySelector('input[name="cantidades[]"]').value = '';
        nuevoElemento.querySelector('#errorElementos').innerText = '';
        nuevoElemento.querySelector('#errorUnidades').innerText = '';
        nuevoElemento.querySelector('#errorCantidad').innerText = '';

        // Agregar el nuevo conjunto de campos al contenedor
        elementosContainer.appendChild(nuevoElemento);
    }

    function eliminarFila(button) {
        var elementosContainer = document.getElementById('elementosContainer');

        // Obtén la fila que contiene el botón presionado
        var filaAEliminar = button.parentNode;

        // Encuentra el contenedor principal iterando hasta llegar al elemento con id 'elementosContainer'
        while (filaAEliminar && filaAEliminar.parentNode !== elementosContainer) {
            filaAEliminar = filaAEliminar.parentNode;
        }

        // Verifica si se encontró la fila en el contenedor principal
        if (filaAEliminar && filaAEliminar.parentNode === elementosContainer) {
            // No permitas eliminar todas las filas, debe haber al menos una
            if (elementosContainer.children.length > 2) {
                // Elimina la fila
                elementosContainer.removeChild(filaAEliminar);
            } else {
                // Muestra un SweetAlert en lugar de la alerta estándar
                Swal.fire({
                    icon: 'warning',
                    title: '¡Cuidado!',
                    text: 'No puedes eliminar la última fila. Debe haber al menos dos filas visibles.',
                });
            }
        } else {
            console.error("Error al intentar eliminar la fila. No se encontró en el contenedor principal.");
        }
    }





    function validarFormularioElementos() {
        // Limpiar mensajes de error previos
        document.querySelectorAll('.text-danger').forEach(function(errorElement) {
            errorElement.innerText = '';
        });

        // Perform your custom validations here
        var elementos = document.getElementsByName("elementos[]");
        var unidades = document.getElementsByName("unidades[]");
        var cantidades = document.getElementsByName("cantidades[]");

        // Example validation: Check if any element is empty
        for (var i = 0; i < elementos.length; i++) {
            if (elementos[i].value.trim() === "") {
                document.getElementById("errorElementos").innerText = 'El elemento no puede estar vacío';
                return;
            }
            // Add more custom validations for other fields as needed...
        }
        // Add validations for unidades and cantidades

        // If all validations pass, submit the form
        document.getElementById("registroElementosForm").submit();
    }
</script>