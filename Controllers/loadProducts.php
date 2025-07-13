<?php
//cargamos la clase products
require_once "../Models/products.php";
//creamos una instancia de la clase products
$products = new products();
///llamamos al metodo select_product
$request = $products->select_product();
//convertimos el resultado a json
echo json_encode($request, JSON_UNESCAPED_UNICODE);
