<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Nuevo customer
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro Costomer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon2">LastName</span>
                    <input type="text" class="form-control" placeholder="name" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>

                <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">DNI</span>
  <input type="text" class="form-control" placeholder="DNI" aria-label="DNI" aria-describedby="basic-addon2"
         pattern="\d{8}" maxlength="8" minlength="8" required title="El DNI debe tener exactamente 8 dígitos">
</div>
     <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">phone</span>
  <input type="text" class="form-control" placeholder="967876453" aria-label="phone" aria-describedby="basic-addon2"
         pattern="9\d{8}" maxlength="9" minlength="9" required title="El DNI debe tener exactamente 9 dígitos">
</div>

                
                <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon2">direcction</span>
                    <input type="text" class="form-control" placeholder="giron bolivia" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon2">gender</span>
                    <select name="form-select" id="sizeselect">
                        <option value="0">Seleccionar</option>
                        <option value="1">F</option>
                        <option value="2">M</option>
                        
                    </select>
                </div>

                <div class="input-group">
                    <span class="input-group-text">email</span>
                    <textarea class="form-control"  placeholder="evolushon@gmail.com" aria-label="With textarea"></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">inicio</button>
                <button type="button" class="btn btn-primary">salir</button>
            </div>
        </div>
    </div>
</div>