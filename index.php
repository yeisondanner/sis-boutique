<?php
//validamos que exista la variable wiew
if (!isset($_GET["view"])) {
    $_GET["view"] = "login";
    
}
//validamos que la variable wiew no este vacia
if (empty($_GET["view"])) {
    $_GET["view"] = "login";
    
}
//Almacenamos en la variedad el valor de la variable get view
$view = $_GET["view"];
switch ($view) {
    case "login":
        $data["id"] = 1;
        $data["title"] = "Inicio de sesion";
        $data["description"] = "Aqui te permite el ingreso al sistema";
        $data["container"] = "Login";
        $data["wiew"] = "login";
        $data["css"] = "login";
        $data["js"] = "login";
        require_once "./Views/App/Login/login.php";
        break;
        
    default:
        require_once "./Views/App/404/404.php";
        break;

    case "Dashboard":
        $data["id"] = 2;
        $data["title"] = "Panel de control";
        $data["description"] = "Gestion del sistema de control";
        $data["container"] = "Dashboard";
        $data["wiew"] = "Dashboard";
        $data["css"] = "dashboard";
        $data["js"] = "dashboard";
        require_once "./Views/App/Dashboard/dashboard.php";
        break;
}