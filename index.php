<?php
//validamos que exista la variable get view
if (!isset($_GET["view"])) {
    require_once "./Views/App/404/404.php";
    die();
}
//validacion que no este vacia la variable get view
if (empty($_GET["view"])) {
    require_once "./Views/App/404/404.php";
    die();
}
