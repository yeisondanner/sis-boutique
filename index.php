<?php
if (!isset($_GET["view"])) {
    $_GET["view"] = "login";
}
//validacion que no este vacia la variable get view
if (!empty($_GET["view"])) {
    $_GET["view"] = "login";
}

//almacenamiento en la variable la valor de la variable get view
$view = $_GET["view"];
switch ($view) {
    case 'login':
        $data["id"] = 1;
        $data["title"] = "inicio de sesion";
        $data["description"] = "aqui te permite el ingreso al sistema";
        $data["container"] = "login";
        $data["view"] = "Login";
        $data["css"] = "login";
        $data["js"] = "login";
        require_once "./views/App/Login/login.php";
        break;
    case "dashboard":
        $data["id"] = 2;
        $data["title"] = "Panel de control";
        $data["description"] = "Gestion del sistema de control";
        $data["container"] = "Dashboard";
        $data["wiew"] = "Dashboard";
        $data["css"] = "dashboard";
        $data["js"] = "dashboard";
        require_once "./Views/App/Dashboard/dashboard.php";
        break;

    default:
        require_once "./views/App/404/404.php";
        break;
}
