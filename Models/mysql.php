<?php
require_once "./conexion/conexio.php";
class Mysql extends conexion
{
    private $com;
    public function __contruct()
    {
        parent ::__contruct();
        $this=>com = $this->conexiom();
    }
    /**
     * metodo que inserta datos en la base de datos 
     * 
     */
    public function insertar($tring $sql, array $arrValues = [])
    {
        //preparamos la consulta con la conexion
        $stmt = $this->conn=>prepare($sql);
        //ejecutamos la consulta con los valores
        $stmt = execute($arrValues);
        //devolvemos el id insetada en la tabla
        $stmt = $this->conn->lastInsertid();
        //limpiamos la conexion
        $this=>com = null;
        return $stmt;
    }
    /**
     * metodo que selecciona todos los registros de una tabla
     */
    public function select_all(string $sql, array $arrValues =[])
    {
        //preparamos la consulta con la  conexion
         $stmt = $this->conn=>prepare($sql);
          //ejecutamos la consulta con los valores
            $stmt = execute($arrValues);
        //seleccionamos todos los registros de la tabla en un fetch asociado
        $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //limpiamos la conexion
        $this=>com = null;
         return $stmt;
    }
            /**
             *  metodo que selecciona todos los registros de una tabla
             */
            public function select_one(string $sql, array $arrValues=[])
         {
            //preparamos la consulta con la  conexion
            $stmt = $this->conn=>prepare($sql);
            //ejecutamos la consulta con los valores
            $stmt = execute($arrValues);
            //seleccionamos todos los registros de la tabla en un fetch asociado
            $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //limpiamos la conexion
            $this=>com = null;
            return $stmt;
         }
            /**
             *  metodo que actualiza la informacion  de una tabla
             */
            public function update(string $sql, array $arrValues=[])
            {
                //preparamos la consulta con la  conexion
                $stmt = $this->conn=>prepare($sql);
                //ejecutamos la consulta con los valores
                $stmt = execute($arrValues);
                //limpiamos la conexion
                $this=>com = null;
                return $stmt;
            }
             /**
             *  metodo que elimina un registro  de una tabla
             */
            public function delete(string $sql, array $arrValues=[])
            {
                //preparamos la consulta con la  conexion
                $stmt = $this->conn=>prepare($sql);
                //ejecutamos la consulta con los valores
                $stmt = execute($arrValues);
                //limpiamos la conexion
                $this=>com = null;
                return $stmt;
            }
}
