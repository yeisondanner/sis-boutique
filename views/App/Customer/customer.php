<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    <i class="fas fa-plus"></i> Nuevo Cliente
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Registro de Clientes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="idAlert"></div>
                <form id="formSave">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="txtName" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="txtName" name="txtName" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="txtlastName" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="txtlastName" name="txtlastName" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="txtdni" class="form-label">DNI</label>
                                <input type="text" class="form-control" id="txtdni" name="txtdni" pattern="[0-9]{8}" maxlength="8" required>
                                <div class="form-text">8 dígitos</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="txtphone" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" id="txtphone" name="txtphone" pattern="[0-9]{9}" maxlength="9" required>
                                <div class="form-text">9 dígitos</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="slctgender" class="form-label">Sexo</label>
                                <select name="slctgender" id="slctgender" class="form-select" required>
                                    <option value="" selected disabled>Seleccione una opción</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Otros">Otros</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="txtdireccion" class="form-label">Dirección</label>
                        <textarea name="txtdireccion" id="txtdireccion" class="form-control" rows="2" placeholder="Ingrese la dirección completa"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="txtemail" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="txtemail" name="txtemail" required>
                        <div class="form-text">Ejemplo: usuario@correo.com</div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mt-3">
                        <i class="fas fa-save"></i> Guardar Cliente
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times"></i> Cerrar
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tabla con DataTables -->
<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Lista de Clientes</h5>
    </div>
    <div class="card-body">
        <table id="table" class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Sexo</th>
                    <th>Correo Electrónico</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <!-- Los datos se cargarán dinámicamente -->
        </tbody>
    </table>
</div>