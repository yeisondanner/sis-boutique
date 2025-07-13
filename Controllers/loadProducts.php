<?php
//cargamos la clase products
require_once "../Models/products.php";
//creamos una instancia de la clase products
$products = new products();
///llamamos al metodo select_product
$request = $products->select_product();
//creamos una variable contador
$cont = 1;
//creamos un ciclo for para recorrer el array
foreach ($request as $key => $value) {
    //creamos el item actions dentro del array
    $request[$key]['actions'] = '
        <div class="btn-group">
            <button class="btn btn-warning">
                <i class="fa fa-edit"></i>
            </button>
            <button class="btn btn-danger">
                <i class="fa fa-trash"></i>
            </button>
        </div>';
    //creamos el item cont dentro del array
    $request[$key]['cont'] = $cont;
    //aumentamos el cont de 1 en 1
    $cont++;
}
//convertimos el resultado a json
echo json_encode($request, JSON_UNESCAPED_UNICODE);
