<?php
//validamos que exista la variable get view
if (!isset($_GET["view"])) {
    $_GET["view"] = "login";
}
//validacion que no este vacia la variable get view
if (empty($_GET["view"])) {
    $_GET["view"] = "login";
}
//Almancenamos en la variable el valor de la variable get view
$view = $_GET["view"];
switch ($view) {
    case 'login':
        $data["id"] = 1;
        $data["title"] = "Inicio de sesion";
        $data["description"] = "Aqui te permite el ingreso al sistema";
        $data["container"] = "Login";
        $data["view"] = "login";
        $data["css"] = "login";
        $data["js"] = "login";
        require_once "./Views/App/Login/login.php";
        break;
    case 'dashboard':
        $data["id"] = 2;
        $data["title"] = "Panel de control";
        $data["description"] = "Gestion del sistema de boutique";
        $data["container"] = "Dashboard";
        $data["view"] = "dashboard";
        $data["css"] = "dashboard";
        $data["js"] = "dashboard";
        require_once "./Views/App/Dashboard/dashboard.php";
        break;
    default:
        require_once "./Views/App/404/404.php";
        break;
}
