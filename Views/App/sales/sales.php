<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Venta | Nuevo Registro</title>
<style>
body {
    font-family: Arial, sans-serif;
    background: #f2f2f2;
}
.container {
    width: 90%;
    margin: auto;
    background: #fff;
    padding: 20px;
    border-radius: 6px;
}
h2 {
    background: #3498db;
    color: white;
    padding: 10px;
}
label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
}
input[type="text"], input[type="number"], select {
    width: 100%;
    padding: 6px;
    margin-top: 5px;
}
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}
.table th, .table td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: center;
}
.table th {
    background: #eee;
}
.btn {
    background: #2ecc71;
    color: white;
    padding: 8px 16px;
    border: none;
    margin-top: 15px;
    cursor: pointer;
}
.btn-buscar {
    background: #f1c40f;
}
.total {
    font-size: 20px;
    color: #2980b9;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="container">
    <h2>Venta | Nuevo Registro</h2>
    
    <!-- Sección Producto -->
    <form method="post" action="procesar_venta.php">
        <label>Products *</label>
        <select name="products" required>
            <option value="">Seleccionar producto</option>
            <option value="Producto A">Producto A</option>
            <option value="Producto B">Producto B</option>
            <option value="Producto C">Producto C</option>
        </select>
        
        <label>Precio *</label>
        <input type="number" name="precio" step="0.01" required>
        
        
        <label>Cantidad *</label>
        <input type="number" name="cantidad" value="1" required>
        
        <label>Stock *</label>
        <input type="number" name="stock" value="10" readonly>
        
        <button class="btn" type="button">Agregar</button>
        
        <!-- Detalle de la venta -->
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>S. Total</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Producto A</td>
                    <td>S/ 20.00</td>
                    <td>1</td>
                    <td>S/ 20.00</td>
                    <td><button>Eliminar</button></td>
                </tr>
                <tr>
                    <td colspan="5" class="total">TOTAL</td>
                    <td colspan="2" class="total">S/ 20.00</td>
                </tr>
            </tbody>
        </table>
        
        <!-- Datos del cliente -->
        <h3>Datos del cliente</h3>
        <label>RUC/DNI *</label>
        <input type="text" name="ruc_dni" required>
        <button class="btn btn-buscar" type="button">Buscar</button>
        
        <label>Tipo de Comprobante *</label>
        <select name="comprobante" required>
            <option value="Recibo">Recibo</option>
            <option value="Boleta">Boleta</option>
            <option value="Factura">Factura</option>
        </select>
        
        <label>Forma de Pago *</label>
        <select name="pago" required>
            <option value="Efectivo">Efectivo</option>
        </select>
        
        <label>Con cuánto paga *</label>
        <input type="number" name="paga_con" step="0.01" required>
        
        <label>Vuelto *</label>
        <input type="number" name="vuelto" step="0.01" readonly>
        
        <button class="btn" type="submit">Registrar Venta</button>
    </form>
</div>
</body>
</html>