<?php
require_once "./Conexion/conexion.php";
class Mysql extends Conexion
{
    private $conn;
    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->conexion();
    }
    /**
     * Metodo que inserta un nuevo registro en la base de datos
     * 
     */
    public function insert(string $sql, array $arrValues = [])
    {
        //Preparamos la consulta con la conexion
        $stmt = $this->conn->prepare($sql);
        //Ejecutamos la consulta con los valores
        $stmt->execute($arrValues);
        //devolvemos el id insertado en la tabla
        $stmt = $this->conn->lastInsertId();
        //limpiamos la conexion
        $this->conn = null;
        return $stmt;
    }
    /**
     * Metodo que selecciona todos los registros de una tabla
     */
    public function select_all(string $sql, array $arrValues = [])
    {
        //Preparamos la consulta con la conexion
        $stmt = $this->conn->prepare($sql);
        //Ejecutamos la consulta con los valores
        $stmt->execute($arrValues);
        //seleccionamos todos los registros de la tabla en un fetch asociado
        $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //limpiamos la conexion
        $this->conn = null;
        return $stmt;
    }
    /**
     * Metodo que selecciona un solo registro de una tabla
     */
    public function select_one(string $sql, array $arrValues = [])
    {
        //Preparamos la consulta con la conexion
        $stmt = $this->conn->prepare($sql);
        //Ejecutamos la consulta con los valores
        $stmt->execute($arrValues);
        //seleccionamos todos los registros de la tabla en un fetch asociado
        $stmt = $stmt->fetch(PDO::FETCH_ASSOC);
        //limpiamos la conexion
        $this->conn = null;
        return $stmt;
    }
    /**
     * Metodo que actualiza la informacion de una tabla
     */
    public function update(string $sql, array $arrValues = [])
    {
        //Preparamos la consulta con la conexion
        $stmt = $this->conn->prepare($sql);
        //Ejecutamos la consulta con los valores
        $stmt->execute($arrValues);
        //limpiamos la conexion
        $this->conn = null;
        return $stmt;
    }
    /**
     * Metodo que eliminaa un registro de una tabla
     */
    public function delete(string $sql, array $arrValues = [])
    {
        //Preparamos la consulta con la conexion
        $stmt = $this->conn->prepare($sql);
        //Ejecutamos la consulta con los valores
        $stmt->execute($arrValues);
        //limpiamos la conexion
        $this->conn = null;
        return $stmt;
    }
}
