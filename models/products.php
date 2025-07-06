<?php
require_once "./mysql.php";
class Products extends Mysql
{
    //encapsulamos las propiedades de manera privada
    private int $id;
    private string $name;
    private string $description;
    private string $size;
    private string $color;
    private string $buyprice;
    private string $saleprice;
    private string $stock;
    private string $brand;
    private string $photo;
    private string $status;
    //creamos el metodo constructor
    public function __construct()
    {
        //creamos el constructor
        parent::__construct();
    }

    /**
        * creamos un metodo que inserta un producto en la base de datos
        *el cual va aceptar como entrar los datos del producto
        * @param string $name,
        * @param string $description,
        * @param string $size,
        * @param string $color,
        * @param string $buyprice,
        * @param string $saleprice,
        * @param string $stock,
        * @param string $brand,
        * @param string $photo
        * @return array
     */
    public function insert_Product(
        string $name,
        string $description,
        string $size,
        string $color,
        string $buyprice,
        string $saleprice,
        string $stock,
        string $brand,
        string $photo

    ){
        //recogemos los valores en las propiedades
        $this->name = $name;
        $this->description = $description;
        $this->size = $size;
        $this->color = $color;
        $this->buyprice = $buyprice;
        $this->saleprice = $saleprice;
        $this->stock = $stock;
        $this->brand = $brand;
        $this->photo = $photo;
        //creamos la consola
        $sql ="INSERT INTO tb_products"(
            (p_name,
            P_description,
            p_size,
            P_color,
            P_buyprice,
            P_saleprice,
            P_stock,
            P_brand,
            P_photo)
             VALUES 
             (?,?,?,?,?,?,?,?,?)";
             );
        //creamos un arrvalues que va almacenar los valores de los campos
        $arrValues = array(
           //llamamos el metodo insert de la clase Mysql
            $request = $this=>insert($sql,$arrValues);
                return $request;

            )
    };
}
   