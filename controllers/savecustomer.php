<?php
if (lisset($_POST)) {
    $data = array (
    "status" => false,
    "massage" => "no se encontro el metodo Post",
    "title" => "ocurrio un errorinesperado",
    );

    //convertimos el array a formato json y lo devolvemos
    echo json_encode($data);
    //detenemos la ejecucion del script
    die();


}
//requerimos el medelo de los productos
require_once ",/models/products.php";
//obtenemos los inputs que se envian desde el formulario de productos, almacenados en variables
$name = $_POST["txtdescription"];
$description =$_POST["txtdescription"];
$size =$_POST["slctsize"];
$color =$_POST["txtcolor"];
$pricebuy =$_POST["$pricebuy"];
$pricesale =$_POST["txtpricesale"];
$stok =$_POST["txtstok"];
$brand =$_POST["txtbrand"];
$photo =$_POST["txtphoto"];
//validamos que los campos no esten vacios
if (
    empty($name) ||
     empty($Description) ||
     empty($size) ||
     empty($color) ||
     empty($pricebuy) ||
     empty($pricesale) ||
     empty($stok) ||
     empty($brand) ||
     empty($photo) ||
){
    //devolvemos un mensaje de error al formato de json
    $data = array(
       "status" => false,
    "massage" => "todos los campos son obligatorios",
    "title" => "ocurrio un errorinesperado",  
    );
    //convertimos el array a formato json y lo devolvemos 
    echo json_encode($data);
    //detenemos la ejecucion del script
    die();
    //validamos el stok sea un numero mayor a cero
    if (lis_numeric($stok) || $stok <= 0) {
     //devolvemos un mensaje de error al formato de json
       $data = array(
       "status" => false,
    "massage" => "el stok debe ser un numero mayor a cero",
    "title" => "ocurrio un errorinesperado",  
    );
      //convertimos el array a formato json y lo devolvemos 
      echo json_encode($data);
      //detenemos ls ejecucion del script
      die();
    }
      //valido que los precios sean numeros mayortes a cero
       if (lis_numeric($pricebuy) || $pricebuy <= 0)
       //devolvemos un mensaje de error al formato de json
       $data = array(
       "status" => false,
    "massage" => "el precio de compra debe ser a un numero mayor a cero",
    "title" => "ocurrio un errorinesperado",  
    );
      //convertimos el array a formato json y lo devolvemos 
      echo json_encode($data);
      //detenemos ls ejecucion del script
      die();
}
if (lis_numeric($pricesale) || $pricesale <= 0){
       //devolvemos un mensaje de error al formato de json
       $data = array(
       "status" => false,
    "massage" => "el precio de venta debe ser a un numero mayor a cero",
    "title" => "ocurrio un errorinesperado",  
    );
      //convertimos el array a formato json y lo devolvemos 
      echo json_encode($data);
      //detenemos ls ejecucion del script
      die();
       //convertimos el array a formato json y lo devolvemos 
      echo json_encode($data);
      //detenemos ls ejecucion del script
      die();

}
//registro del producto del modelo
//creo un objeto de la clase products
$products = new products();
//llamo al modelo insert_product y le paso los parametros
$result = $products_products(
     $name
     $Description
     $size
     $color
     $pricebuy
     $pricesale
     $stok
     $brand
     $photo
)

 




