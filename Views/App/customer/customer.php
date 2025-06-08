<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Producto Nuevo
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro de clientes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Apellidos</span>
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    
                </div>
                
                <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">DNI</span>
  <input type="text" class="form-control" placeholder="DNI" aria-label="DNI" aria-describedby="basic-addon2"
         pattern="\d{8}" maxlength="8" minlength="8" required title="El DNI debe tener exactamente 8 dígitos">
</div>
         <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">phone</span>
  <input type="text" class="form-control" placeholder="987654321" aria-label="phone" aria-describedby="basic-addon2"
         pattern="9\d{8}" maxlength="9" minlength="9" required title="El número debe tener exactamente 9 dígitos y comenzar con 9">
</div>
                

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Direccion</span>
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                     </div>
                      <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Gener</span>
                    <select class="form-select" id="sizeSelect" aria-label="Seleccione una talla">
                        <option value="" selected disabled>Seleccione...</option>
                        <option value="S">F</option>
                        <option value="M">M </option>
                        <option value="L">otro</option>
                        
                    </select>
                    </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Stok</span>
                    <input type="number" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">correo</span>
                    <input type="text" class="form-control" placeholder="evolushon@gmail.com" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    
                </div>
                

                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                    <button type="button" class="btn btn-primary">ingreso</button>
                </div>
            </div>
        </div>
    </div>