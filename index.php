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
        require_once "./Views/Template/start.php";
        require_once "./Views/App/Dashboard/dashboard.php";
        require_once "./Views/Template/end.php";
        break;
    case 'products':
        $data["id"] = 3;
        $data["title"] = "Gestion de productos";
        $data["description"] = "Este modulo te permite gestionar los productos";
        $data["container"] = "Products";
        $data["view"] = "products";
        $data["css"] = "products";
        $data["js"] = "products";
        require_once "./Views/Template/start.php";
        require_once "./Views/App/Products/products.php";
        require_once "./Views/Template/end.php";
        break;
    case 'customers':
        $data["id"] = 4;
        $data["title"] = "Gestion de Clientes";
        $data["description"] = "Este modulo te permite gestionar los Clientes";
        $data["container"] = "Customers";
        $data["view"] = "customers";
        $data["css"] = "customers";
        $data["js"] = "customers";
        require_once "./Views/Template/start.php";
        require_once "./Views/App/Customers/customers.php";
        require_once "./Views/Template/end.php";
        break;
    default:
        require_once "./Views/App/404/404.php";
        break;
}
