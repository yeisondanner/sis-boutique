<?php
//validamos que exista el metodo POST caso contrario devolvemos un mensaje de error
if (!isset($_POST)) {
    //Devolvemos un mensaje de error en formato json
    $data = array(
        'status' => false,
        'message' => 'No se encontro el metodo POST',
        'title' => 'Ocurrio un error inesperado',
    );
    //convertimos el array a formato json y lo devolvemos
    echo json_encode($data);
    //detenemos la ejecucion del script
    die();
}
//requerimos el modelo de los productos
require_once "./Models/products.php";
//obtenemos los inputs que se envian desde el formulario de productos, almacenados en variables
$name = $_POST['txtName'];
$description = $_POST['txtDescription'];
$size = $_POST['slctSize'];
$color = $_POST['txtColor'];
$priceBuy = $_POST['txtPriceBuy'];
$priceSale = $_POST['txtPriceSale'];
$stock = $_POST['txtStock'];
$brand = $_POST['txtBrand'];
$photo = $_FILES["txtPhoto"];
//validamos que los campos no esten vacios
if (
    empty($name) ||
    empty($description) ||
    empty($size) ||
    empty($color) ||
    empty($priceBuy) ||
    empty($priceSale) ||
    empty($stock) ||
    empty($brand)
) {
    //Devolvemos un mensaje de error en formato json
    $data = array(
        'status' => false,
        'message' => 'Todos los campos son obligatorios',
        'title' => 'Ocurrio un error inesperado',
    );
    //convertimos el array a formato json y lo devolvemos
    echo json_encode($data);
    //detenemos la ejecucion del script
    die();
}
//valido que stock sea un numero mayor a cero
if (!is_numeric($stock) || $stock <= 0) {
    //Devolvemos un mensaje de error en formato json
    $data = array(
        'status' => false,
        'message' => 'El stock debe ser un numero mayor a cero',
        'title' => 'Ocurrio un error inesperado',
    );
    //convertimos el array a formato json y lo devolvemos
    echo json_encode($data);
    //detenemos la ejecucion del script
    die();
}
//valido que los precios sean numeros mayores a cero
if (!is_numeric($priceBuy) || $priceBuy <= 0) {
    //Devolvemos un mensaje de error en formato json
    $data = array(
        'status' => false,
        'message' => 'El precio de compra debe ser un numero mayor a cero',
        'title' => 'Ocurrio un error inesperado'
    );
    //convertimos el array a formato json y lo devolvemos
    echo json_encode($data);
    //detenemos la ejecucion del script
    die();
}
if (!is_numeric($priceSale) || $priceSale <= 0) {
    //Devolvemos un mensaje de error en formato json
    $data = array(
        'status' => false,
        'message' => 'El precio de venta debe ser un numero mayor a cero',
        'title' => 'Ocurrio un error inesperado'
    );
    //convertimos el array a formato json y lo devolvemos
    echo json_encode($data);
    //detenemos la ejecucion del script
    die();
}
//registro el producto a traves del modelo
//creo un objeto de la clase products
$products = new products();
//llamo al modelo insert_product y le paso los parametros
$result = $products->insert_product(
    $name,
    $description,
    $size,
    $color,
    $priceBuy,
    $priceSale,
    $stock,
    $brand,
    $photo
);
//valido que el resultado sea true
if ($result) {
    //Devolvemos un mensaje de exito en formato json
    $data = array(
        'status' => true,
        'message' => 'Producto registrado correctamente',
        'title' => 'Registro exitoso',
    );
    //convertimos el array a formato json y lo devolvemos
    echo json_encode($data);
} else {
    //Devolvemos un mensaje de error en formato json
    $data = array(
        'status' => false,
        'message' => 'No se pudo registrar el producto',
        'title' => 'Ocurrio un error inesperado',
    );
    //convertimos el array a formato json y lo devolvemos
    echo json_encode($data);
}
//elimino la variable de la memoria y el objeto de la memoria
unset($products);
