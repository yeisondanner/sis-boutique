<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Producto Nuevo
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro de producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Description</span>
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    
                </div>
                 <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Size</span>
  <select class="form-select" id="sizeSelect" aria-label="Seleccione una talla">
    <option value="" selected disabled>Seleccione...</option>
    <option value="S">S - Pequeña</option>
    <option value="M">M - Mediana</option>
    <option value="L">L - Grande</option>
    <option value="XL">XL - Extra Grande</option>
  </select>
</div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">color</span>
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Buyprice</span>
                    <input type="number" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Saleprice</span>
                    <input type="number" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Stok</span>
                    <input type="number" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Brand</span>
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Photo</span>
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    
                </div>

                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                    <button type="button" class="btn btn-primary">ingreso</button>
                </div>
            </div>
        </div>
    </div>