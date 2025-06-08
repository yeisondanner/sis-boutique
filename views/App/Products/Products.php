<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Nuevo producto
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon2">description</span>
                    <input type="text" class="form-control" placeholder="marca evolushon" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    
                </div>
                <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon2">size</span>
                    <select name="form-select" id="sizeselect">
                        <option value="0">Seleccionar</option>
                        <option value="1">S</option>
                        <option value="2">M</option>
                        <option value="3">L</option>
                        <option value="4">XL</option>
                        <option value="5">XXL</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">color</span>
                    <select name="form-select" id="colorselect">
                        <option value="0">Seleccionar</option>
                        <option value="1">Rojo</option>
                        <option value="2">Azul</option>
                        <option value="3">Verde</option>
                        <option value="4">Negro</option>
                        </select>   
                </div>
            
                <div class="input-group mb-3">
                    <span class="input-group-text">buyprice</span>
                    <input type="number" class="form-control" placeholder="50" aria-label="Amount (to the nearest dollar)">
                   
                </div>

                 <div class="input-group mb-3">
                    <span class="input-group-text">saleprice</span>
                    <input type="number" class="form-control" placeholder="90" aria-label="Amount (to the nearest dollar)">
                    
                </div>
                <div class="input-group mb-3">
                      <span class="input-group-text">stock</span>
                    <input type="number" class="form-control" placeholder="25" aria-label="Username">
                </div>

                <div class="input-group">
                    <span class="input-group-text">brand</span>
                    <textarea class="form-control"  placeholder="evolushon" aria-label="With textarea"></textarea>
                </div>


                <div class="input-group">
                    <span class="input-group-text">photo</span>
                    <textarea class="photo" aria-label="With textarea"></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">inicio</button>
                <button type="button" class="btn btn-primary">salir</button>
            </div>
        </div>
    </div>
</div>