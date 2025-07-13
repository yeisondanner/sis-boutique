<?php
require_once "../Models/products.php";
$objProduct = new products();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $request = $objProduct->delete_product($id);
    if ($request) {
        //Devolvemos un mensaje de error en formato json
        $data = array(
            'status' => true,
            'message' => 'Producto eliminado correctamente',
            'title' => 'Eliminacion correcta',
        );
        //convertimos el array a formato json y lo devolvemos
        echo json_encode($data);
        //detenemos la ejecucion del script
        die();
    } else {
        //Devolvemos un mensaje de error en formato json
        $data = array(
            'status' => false,
            'message' => 'No se pudo eliminar el producto',
            'title' => 'Error al eliminar',
        );
        //convertimos el array a formato json y lo devolvemos
        echo json_encode($data);
        //detenemos la ejecucion del script
        die();
    }
}
