<?php
require_once "../Models/sales.php";
$objSales = new sales();
$dataSales = $objSales->select_sales();
$cont = 1;
foreach ($dataSales  as $key => $value) {
    $dataSales[$key]['fullnamecustomers'] = $value["c_name"]."".$value["c_lastName"];
    $dataSales[$key]['cont'] = $cont;
    $dataSales[$key]['actions'] = '';
    $cont++;
}
echo json_encode($dataSales, JSON_UNESCAPED_UNICODE);