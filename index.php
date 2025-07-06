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
        require_once "./Views/template/start.php";
        require_once "./Views/App/Dashboard/Dashboard.php";
        require_once "./Views/template/end.php";
        break;
    case "Products":
        $data["id"] = 3;
        $data["title"] = "Gestion de productos";
        $data["description"] = "este modulo te permite gestionar los productos";
        $data["container"] = "products";
        $data["view"] = "products";
        $data["css"] = "products";
        $data["js"] = "products";
        require_once "./Views/template/start.php";
        require_once "./Views/App/Products/Products.php";
        require_once "./Views/template/end.php";
        break;
        case "customer":
            $data["id"] = 4;
            $data["title"] = "Gestion de clientes";
            $data["description"] = "este modulo te permite gestionar los clientes";
            $data["container"] = "customer";
            $data["view"] = "customer";
            $data["css"] = "customer";
            $data["js"] = "customer";
            require_once "./Views/template/start.php";
            require_once "./Views/App/Customer/Customer.php";
            require_once "./Views/template/end.php";
            break;
    case "sales":
        $data["id"] = 5;
        $data["title"] = "Gestion de ventas";
        $data["description"] = "este modulo te permite gestionar las ventas";
        $data["container"] = "sales";
        $data["view"] = "sales";
        $data["css"] = "sales";
        $data["js"] = "sales";
        require_once "./Views/template/start.php";
        require_once "./Views/App/sales/sales.php";
        require_once "./Views/template/end.php";
        break;

    default:
        require_once "./Views/App/404/404.php";
        break;
}
