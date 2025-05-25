<?php
if (!isset($_GET["view"])) {
    require_once "./views/app/404/404.php";
    die();
}
//validacion que no este vacia la variable get view
if (empty($_GET["view"])) {
    $_GET["view"] = "login";
}
// almacenamos la variable el valor get view
$view = $_GET["view"];
switch ($view) {
    case "login":
        $data["id"] = 1;
        $data["title"] = "inicio de seccion";
        $data["description"] = "aqui te permite el ingreso del sistema";
        $data["container"] = "login";
        $data["view"] = "login";
        $data["css"] = "login";
        $data["js"] = "login";
        require_once  "./views/app/login/login.php";
          break;
        
        case "Dashboard":
        $data["id"] = 2;
        $data["title"] = "panel de control";
        $data["description"] = "gestion del sistema de boutique";
        $data["container"] = "Dashboard";
        $data["view"] = "Dashboard";
        $data["css"] = "dashboard";
        $data["js"] = "dashboard";
        require_once  "./views/app/Dashboard/dashboard.php";
        break;
    default:

        require_once  "./views/app/Dashboard/dashboard.php";
        break;
}
    