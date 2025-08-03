<?php
require_once "../Models/mysql.php";
class customer extends Mysql
{
    //creamos el metodo constructor
    public function __construct()
    {
        //Obtenemos los metodos de la clase mysql
        parent::__construct();
    }
    /**
     * Selecciona todos los clientes
     * @return array
     */
    public function select_customer() 
    {
        //preparamos la consulta 
        $sql = "SELECT * FROM tb_customer";
        //ejecutamos la consulta
        $request = $this->select_all($sql);
        //decolvemos la consulta 
        return $request;
    }   
} 
