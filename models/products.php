<?php
require_once "../Models/mysql.php";
class products extends Mysql
{
    //encapsulamos las propiedades de manera privada
    private int $id;
    private string $name;
    private string $description;
    private string $size;
    private string $color;
    private string $priceBuy;
    private string $priceSale;
    private string $stock;
    private string $brand;
    private string $photo;
    private string $status;
    //creamos el constructor
    public function __construct()
    {
        //obtenemos los metodos de la clase Mysql
        parent::__construct();
    }
    /**
     * Creamos el metodo insert_product 
     * el cual va aceptar como entrada los datos del producto
     *@param string $name,
     *@param string $description,
     *@param string $size,
     *@param string $color,
     *@param string $priceBuy,
     *@param string $priceSale,
     *@param string $stock,
     *@param string $brand,
     *@param string $photo
     *@return array
     */
    public function insert_product(
        string $name,
        string $description,
        string $size,
        string $color,
        string $priceBuy,
        string $priceSale,
        string $stock,
        string $brand,
        string $photo
    ) {
        //recogemos los valores en las propiedades
        $this->name = $name;
        $this->description = $description;
        $this->size = $size;
        $this->color = $color;
        $this->priceBuy = $priceBuy;
        $this->priceSale = $priceSale;
        $this->stock = $stock;
        $this->brand = $brand;
        $this->photo = $photo;
        //creamos la consulta
        $sql = "INSERT INTO `tb_product` 
                                        (`p_name`, 
                                        `p_description`, 
                                        `p_size`, 
                                        `p_color`, 
                                        `p_buyPrice`, 
                                        `p_salePrice`, 
                                        `p_stock`, 
                                        `p_brand`, 
                                        `p_photo`) 
                                        VALUES 
                                        (?, ?, ?, ?, ?, ?, ?, ?, ?);";
        //creamos un arrValues que va almacenar los valores de los campos
        $arrValues = array(
            $this->name,
            $this->description,
            $this->size,
            $this->color,
            $this->priceBuy,
            $this->priceSale,
            $this->stock,
            $this->brand,
            $this->photo
        );
        //llamamos el metodo insert de la clase Mysql
        $request = $this->insert($sql, $arrValues);
        return $request;
    }
    /**
     * Creamos el metodo select_product
     * que va a devolver los datos de la tabla tb_product
     * @return array
     */
    public function select_product()
    {
        //creamos la consulta
        $sql = "SELECT * FROM `tb_product` ORDER BY `idProduct` DESC";
        //llamamos el metodo select_all de la clase Mysql
        $request = $this->select_all($sql);
        //retornamos el resultado
        return $request;
    }
    /** 
     * Metodo que te permite eliminar un producto
     * @param int $id
     * @return array
     */
    public function delete_product(int $id)
    {
        //recogemos el id
        $this->id = $id;
        //creamos la consulta
        $sql = "DELETE FROM `tb_product` WHERE  `idProduct`= ?";
        //creamos el arrValues
        $arrValues = array($this->id);
        //llamamos el metodo delete de la clase Mysql
        $request = $this->delete($sql, $arrValues);
        return $request;
    }
}
