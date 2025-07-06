<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    <i class="fa fa-plus"></i> Nuevo
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Registro de producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formSave">
                    <div class="form-group">
                        <label for="txtName">Nombre</label>
                        <input type="text" class="form-control" id="txtName" name="txtName" required>
                    </div>
                    <div class="form-group">
                        <label for="txtDescription">Descripción</label>
                        <textarea name="txtDescription" id="txtDescription" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="slctSize">Talla</label>
                                <select name="slctSize" id="slctSize" class="form-control" required>
                                    <option value="" selected disabled>Seleccione un elemento</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="txtColor">Color</label>
                                <input type="color" class="form-control" id="txtColor" name="txtColor" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="txtPriceBuy">Precio compra</label>
                                <input type="number" step="0.01" class="form-control" id="txtPriceBuy" name="txtPriceBuy" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="txtPriceSale">Precio Venta</label>
                                <input type="number" step="0.01" class="form-control" id="txtPriceSale" name="txtPriceSale" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="txtStock">Stock</label>
                                <input type="number" step="0.01" class="form-control" id="txtStock" name="txtStock" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="txtBrand">Marca</label>
                                <input type="text" class="form-control" id="txtBrand" name="txtBrand" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="txtPhoto">Foto</label>
                                <input type="file" class="form-control" id="txtPhoto" name="txtPhoto" required>
                            </div>
                        </div>
                    </div>
                    <!--Aqui va el boto registrar con el icono de save -->
                    <button type="submit" class="btn btn-primary w-100 mt-4"><i class="fa fa-save"></i> Guardar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--Cargamos la tabla con datables-->
<div class="container mt-5">
    <table id="example" class="table table-striped">
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