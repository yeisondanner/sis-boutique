<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    <i class="fa fa-plus"></i> Nuevo
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Registro de venta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container mt-5">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Formulario de Ventas</h4>
                        </div>
                        <div class="card-body">
                            <form id="formVenta">
                                <!-- Cliente -->
                                <div class="form-group">
                                    <label for="cliente">Cliente</label>
                                    <select class="form-control" id="cliente" name="cliente" required>
                                        
                                    </select>
                                </div>

                                <!-- Producto -->
                                <div class="form-group">
                                    <label for="producto">Producto</label>
                                    <select class="form-control" id="producto" required>
                                        <option value="">Seleccione un producto</option>
                                        <option value="p1">Laptop Lenovo</option>
                                        <option value="p2">Mouse Logitech</option>
                                        <option value="p3">Monitor Samsung</option>
                                    </select>
                                </div>

                                <!-- Datos del producto -->
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="nombreProducto">Nombre</label>
                                        <input type="text" class="form-control" id="nombreProducto" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="precio">Precio</label>
                                        <input type="text" class="form-control" id="precio" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="stock">Stock Disponible</label>
                                        <input type="text" class="form-control" id="stock" readonly>
                                    </div>
                                </div>

                                <!-- Cantidad -->
                                <div class="form-group">
                                    <label for="cantidad">Cantidad a vender</label>
                                    <input type="number" class="form-control" id="cantidad" min="1" required>
                                </div>

                                <!-- Total a pagar -->
                                <div class="form-group">
                                    <label for="total">Total a pagar</label>
                                    <input type="text" class="form-control" id="total" readonly>
                                </div>

                                <!-- Monto entregado -->
                                <div class="form-group">
                                    <label for="montoEntregado">Monto entregado por el cliente</label>
                                    <input type="number" class="form-control" id="montoEntregado" min="0" required>
                                </div>

                                <!-- Vuelto -->
                                <div class="form-group">
                                    <label for="vuelto">Vuelto</label>
                                    <input type="text" class="form-control" id="vuelto" readonly>
                                </div>

                                <!-- Botón -->
                                <button type="submit" class="btn btn-success btn-block">Vender</button>
                            </form>

                        </div>
                    </div>
                </div>

                <!-- Scripts -->
                <script>
                    // Productos simulados
                    const productos = {
                        p1: {
                            nombre: "Laptop Lenovo",
                            precio: 2800,
                            stock: 10
                        },
                        p2: {
                            nombre: "Mouse Logitech",
                            precio: 150,
                            stock: 25
                        },
                        p3: {
                            nombre: "Monitor Samsung",
                            precio: 1200,
                            stock: 8
                        }
                    };

                    // Evento al cambiar de producto
                    document.getElementById("producto").addEventListener("change", function() {
                        const selected = this.value;
                        if (productos[selected]) {
                            document.getElementById("nombreProducto").value = productos[selected].nombre;
                            document.getElementById("precio").value = productos[selected].precio;
                            document.getElementById("stock").value = productos[selected].stock;
                            calcularTotal();
                        } else {
                            document.getElementById("nombreProducto").value = "";
                            document.getElementById("precio").value = "";
                            document.getElementById("stock").value = "";
                            document.getElementById("total").value = "";
                            document.getElementById("vuelto").value = "";
                        }
                    });

                    // Eventos para calcular total y vuelto en tiempo real
                    document.getElementById("cantidad").addEventListener("input", calcularTotal);
                    document.getElementById("montoEntregado").addEventListener("input", calcularVuelto);

                    function calcularTotal() {
                        const precio = parseFloat(document.getElementById("precio").value);
                        const cantidad = parseInt(document.getElementById("cantidad").value);
                        if (!isNaN(precio) && !isNaN(cantidad)) {
                            const total = precio * cantidad;
                            document.getElementById("total").value = total.toFixed(2);
                            calcularVuelto();
                        } else {
                            document.getElementById("total").value = "";
                        }
                    }

                    function calcularVuelto() {
                        const total = parseFloat(document.getElementById("total").value);
                        const entregado = parseFloat(document.getElementById("montoEntregado").value);
                        if (!isNaN(total) && !isNaN(entregado)) {
                            const vuelto = entregado - total;
                            document.getElementById("vuelto").value = vuelto.toFixed(2);
                        } else {
                            document.getElementById("vuelto").value = "";
                        }
                    }

                    // Validación de venta
                    document.getElementById("formVenta").addEventListener("submit", function(e) {
                        e.preventDefault();

                        const cantidad = parseInt(document.getElementById("cantidad").value);
                        const stock = parseInt(document.getElementById("stock").value);
                        const total = parseFloat(document.getElementById("total").value);
                        const entregado = parseFloat(document.getElementById("montoEntregado").value);

                        if (cantidad > stock) {
                            alert("No hay suficiente stock disponible.");
                            return;
                        }

                        if (entregado < total) {
                            alert("El monto entregado no cubre el total a pagar.");
                            return;
                        }

                        alert("Venta realizada con éxito.");

                        // Reiniciar formulario
                        this.reset();
                        document.getElementById("nombreProducto").value = "";
                        document.getElementById("precio").value = "";
                        document.getElementById("stock").value = "";
                        document.getElementById("total").value = "";
                        document.getElementById("vuelto").value = "";
                    });
                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--Cargamos la tabla con datables-->
<div class="container mt-5">
    <table id="table" class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Talla</th>
                <th>Color</th>
                <th>Precio compra</th>
                <th>Precio Venta</th>
                <th>Stock</th>
                <th>Marca</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>