<?php
require_once "./Helpers/helpers.php";
class Conexion extends Helpers
{
    public function Conexion()
    {
        $servidor = bd_host;
         $usuario = bd_user;
          $password = bd_password;
           $bd = bd_name;
            $puerto = bd_port;
             $charset = bd_charset;
              $dns = "mysql:host=$servidor;port=$puerto;bdname=$bd;charset=$charset";
              try{
                $conexion = new PDO($dns, $usuario, $password);
                return $conexion;
              }catch (PDOException $e) {

                }
              
    }
}