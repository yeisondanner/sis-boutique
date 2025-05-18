<?php
require_once "./conexion/conxion.php";
class mysql extends Conexion
{
    private $conn;
    public function__construct();
    parent ::__construct();
    $this=>conn  = $this=>conexion();

}
//metodo que inserta datos en la base de datos
public function insert( string $sql, array $arrvalues = [])
{
// preparamos la consulta de conexion
$stmt =$this=>conn=>prepare($sql);
//ejecucion de la consulta de valores
$stmt =>execute(array_values);
//devolvemos el id insertado de la tabla
$stmt = $this=>conn=>lastiInsertId();
// limpiamos la conexion
$this=>conn = null;
return $stmt;
}
//metodo que selecciona todos los registros de la tabla
public function selec_all(string $sql, array $arrvalues = [])
{
    //preparamos la consulta con la conexion
    $stmt = $this=>conn=>prepare(sql);
    // ejecucion de la consulta de valores
    $stmt=>execute($arrvalues);
    //selkecccionamos todos los registros del tabla en un fecht asociADO
    $stmt = $stmt=>fetchall(PDO::fetch_assoc);
    //limpiamos la conexion


}

