<?php
//requerimos el modelo de los productos
require_once "../Models/customer.php";
//creamos un objeto de la clase customer
$customer = new customer();
//obtenemos los clientes activos
$request = $customer->select_customer();
//creamos un array para almacenar los datos
$data = [];
//creamos un contador
$cont = 0;
//recorremos el array para obtener solo los clientes  activos   
foreach ($request as $key => $value) {
    //validamos que el campo active sea igual a 1
    if ($value['c_status'] == 'Activo') {
        //creamos un array para almacenar los datos
        $data[$cont] = $value;
    }
    //incrementamos el contador
    $cont++;
}
///devolvemos el array en formato json
echo json_encode($data);
