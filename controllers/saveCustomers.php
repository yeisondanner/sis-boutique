<?php
//validamos que exista el metodo post caso contrario devolvemos un mensaje de error
if(!isset($_POST)) {
    //devolvemos un mensaje de error en formato json
    $data = array(
    "status" => false,
    "message" => "No se encontro el metodo post",
    title => "ocurrio un error inesperado";
    );
    //comvertimos el array a formato json y lo devolvemos
    echo json_encode($data);
    //detenemos la ejecucion del script
    die();
}
    //requerimos el modelo de productos
    require_once "./Models/Products.php";
    //obtenemos los inputs que se envian desde el formulario de productos, almacenamos en variables
    $name = $_POST["Username"];
    $description = $_POST["description"];
    $size = $_POST["sizeselect"];
    $color = $_POST["colorselect"];
    $buyprice = $_POST["buyprice"];
    $saleprice = $_POST["saleprice"];
    $stock = $_POST["stock"];
    $brand = $_POST["brand"];
    $photo = $_POST["photo"];
    //validamos que los campos no esten vacios
    if(
        empty($name) || 
        empty($description) || 
        empty($size) || 
        empty($color) ||
        empty($buyprice) ||
        empty($saleprice) ||
        empty($stock) ||
        empty($brand) ||
    ) {
        //devolvemos un mensaje de error en formato json
        $data = array(
            "status" => "false",
            "message" => "Todos los campos son obligatorios",
            "title" => "ocurrio un error inesperado",
        );
        //convertimos el array a formato json y lo devolvemos
        echo json_encode($data);
        //detenemos la ejecucion del script
        die();

    }
        //validamos que stok sea un numero mayor a cero
    if(!is_numeric($stock) || $stock <= 0) {
        //devolvemos un mensaje de error en formato json
        $data = array(
            "status" => "false",
            "message" => "El stock debe ser un numero mayor a cero",
            "title" => "ocurrio un error inesperado",
        );
        //convertimos el array a formato json y lo devolvemos
        echo json_encode($data);
        //detenemos la ejecucion del script
        die();
    }
    //validamos que los precio sean numero mayor a cero
    if(!is_numeric($buyprice) || $buyprice <= 0) {
        //devolvemos un mensaje de error en formato json
        $data = array(
            "status" => "false",
            "message" => "El precio de compra debe ser un numero mayor a cero",
            "title" => "ocurrio un error inesperado",
        );
        //convertimos el array a formato json y lo devolvemos
        echo json_encode($data);
        //detenemos la ejecucion del script
        die();
    }
    if(!is_numeric($saleprice) || $saleprice <= 0) {
        //devolvemos un mensaje de error en formato json
        $data = array(
            "status" => "false",
            "message" => "El precio de venta debe ser un numero mayor a cero",
            "title" => "ocurrio un error inesperado",
        );
        //convertimos el array a formato json y lo devolvemos
        echo json_encode($data);
        //detenemos la ejecucion del script
        die();
    }
    //registro el producto a traves del modelo
    //creo un objeto de la clase Products
    $product = new Products();
    //llamo al metodo save del modelo y le paso los parametros
    $result = $product->insert_product(
        $name,
        $description,
        $size,
        $color,
        $buyprice,
        $saleprice,
        $stock,
        $brand,
        $photo
    );
    //validamos que el resultado sea exitoso
    if($result) {
        //devolvemos un mensaje de exito en formato json
        $data = array(
            "status" => true,
            "message" => "Producto registrado correctamente",
            "title" => "Registro Exito",
        );
        //convertimos el array a formato json y lo devolvemos
    } else {
        //devolvemos un mensaje de error en formato json
        $data = array(
            "status" => false,
            "message" => "Ocurrio un error al registrar el producto",
            "title" => "ocurrio un error inesperado",
        );
        //convertimos el array a formato json y lo devolvemos
        echo json_encode($data);
    }
        //elimino la variable de la memoria y el objeto
    unset($product);
    

