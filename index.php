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
    default:
        require_once "./Views/App/404/404.php";
        break;
}
