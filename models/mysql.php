<?php
require_once "./Helpers/helpers.php";
class Mysql extends conexion
{
    private $conexion;
    public function __construct(){
        parent::__construct();
        $this->conexion = $this->conexion();
    }
    /**
     * Metodo que insertar datos en la base de datos 
     * 
     */
    public function insertar(string $sql, array $arrValues =[])
    {
        //Preparamos la consulta  con la conexion 
        $stnt = $this->conexion->prepare($sql);
        //ejecutamos la consulta con los valores
        $stnt->execute($arrValues);
        //devolvemos el id insertado en la tabla 
        $stnt = $this->conexion->lastInsertId();
        //limpiamos la conexion 
        $this->conexion = null;
        return $stnt;
    }
    /**
     * Metodo que selecciona todos los registros de una tabla
     */
    public function select_all(string $sql, array $arrValues = [])
    {
        //Preparamos la consulta  con la conexion
        $stnt = $this->conexion->prepare($sql);
        //ejecutamos la consulta con los valores
        $stnt->execute($arrValues);
        //seleccionamos todos los registros de la tabla en un fetch asociado 
        $stnt = $stnt->fetchAll(PDO::FETCH_ASSOC);
        //limpiamos la conexion
        $this->conexion = null;
        return $stnt;
    }
    /**
     * Metodo que selecciona un solo registro de una tabla
     */
    public function select_one(string $sql, array $arrValues = [])
    {
        //preparemos la consulta con la conexion
        $stnt = $this->conexion->prepare($sql);
        //ejecutamos la consulta con los valores
        $stnt->execute($arrValues);
        //seleccionamos un solo registro de la tabla en un fetch asociado
        $stnt = $stnt->fetch(PDO::FETCH_ASSOC);
        //limpiamos la conexion
        $this->conexion = null;
        return $stnt;
    }
    /**
     * Metodo que actualiza la informacion de una tabla
     */
    public function update(string $sql, array $arrValues = [])
    {
        //preparamos la consulta con la conexion
        $stnt = $this->conexion->prepare($sql);
        //Ejecutamos la consulta con los valores 
        $stnt->execute($arrValues);
        //limpiamos la conexion
        $this->conexion = null;
        return $stnt;
    }
    /**
     * Metoodo que elimina un registro de una tabla
     */
    public function delete(string $sql, array $arrValues = [])
    {
        //preparamos la consulta con la conexion
        $stnt = $this->conexion->prepare($sql);
        //ejecutamos la consulta con los valores
        $stnt->execute($arrValues);
        //limpiamos la conexion
        $this->conexion = null;
        return $stnt;
    }
}