<?php
require_once "../Models/mysql.php";
class customer extends Mysql
{
    //creamos el constructor
    public function __construct()
    {
        //obtenemos los metodos de la clase Mysql
        parent::__construct();
    }
    /**
     * Seleccion a tos los clientes
     * @return array
     */
    public function select_customer()
    {
        //preparamos la consulta
        $sql = "SELECT*FROM tb_customer;";
        //ejecutamos la consulta
        $request = $this->select_all($sql);
        //devolvemos el resultado
        return $request;
    }
}
