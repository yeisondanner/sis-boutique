<?php
require_once "../Helpers/helpers.php";
class Conexion extends  Helpers
{

    public function conexion()
    {
        $servidor = DB_HOST;
        $usuario = DB_USER;
        $password = DB_PASSWORD;
        $bd = DB_NAME;
        $puerto = DB_PORT;
        $charset = DB_CHARSET;
        $dns = "mysql:host=$servidor;port=$puerto;dbname=$bd;charset=$charset";
        try {
            $conexion = new PDO($dns, $usuario, $password);
            return $conexion;
        } catch (PDOException $e) {
        }
    }
}
