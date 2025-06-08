<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    NUEVO PRODUCTO
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
            <div class="modal-header" style="background-color: rgba(255, 255, 255, 0.1); border-bottom: 1px solid rgba(255, 255, 255, 0.2);">
                <h5 class="modal-title text-white" id="exampleModalLabel">Datos Personales</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="nombre-addon">Nombre</span>
                    <input type="text" class="form-control" placeholder="Ingrese su Nombre" aria-label="Ingrese su Nombre" aria-describedby="nombre-addon">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="descripcion-addon">Descripción</span>
                    <textarea class="form-control" placeholder="Ingrese la descripción" aria-label="Descripción" aria-describedby="descripcion-addon"></textarea>
                </div>

                <div class="row mb-3">
                    <div class="col me-2">
                        <div class="input-group">
                            <span class="input-group-text" id="tamaño-addon">Tamaño</span>
                            <input type="text" class="form-control" placeholder="Ingrese su Tamaño" aria-label="Ingrese su Tamaño" aria-describedby="tamaño-addon">
                        </div>
                    </div>
                    <div class="col ms-2">
                        <div class="input-group">
                            <span class="input-group-text" id="color-addon">Color</span>
                            <input type="text" class="form-control" placeholder="Ingrese su Color" aria-label="Ingrese su Color" aria-describedby="color-addon">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col me-2">
                        <div class="input-group">
                            <span class="input-group-text" id="precio-addon">Precio</span>
                            <input type="text" class="form-control" placeholder="Ingrese su Precio" aria-label="Ingrese su Precio" aria-describedby="precio-addon">
                        </div>
                    </div>
                    <div class="col ms-2">
                        <div class="input-group">
                            <span class="input-group-text" id="ventas-addon">S/ de Venta</span>
                            <input type="text" class="form-control" placeholder="Precio de Venta" aria-label="Precio de Venta" aria-describedby="ventas-addon">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col me-2">
                        <div class="input-group">
                            <span class="input-group-text" id="stock-addon">Limitado</span>
                            <input type="text" class="form-control" placeholder="Pdt. Limitado" aria-label="Pdt. Limitado" aria-describedby="stock-addon">
                        </div>
                    </div>
                    <div class="col ms-2">
                        <div class="input-group">
                            <span class="input-group-text" id="marca-addon">Marca</span>
                            <input type="text" class="form-control" placeholder="Marca" aria-label="Marca" aria-describedby="marca-addon">
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer" style="background-color: rgba(255, 255, 255, 0.1); border-top: 1px solid rgba(255, 255, 255, 0.2);">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-warning">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>