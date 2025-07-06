<?php
require_once ",/mysql.php";
class products extends mysql
{
    private int $id;
    private string $name;
    private string $description;
    private string $size;
    private string $color;
    private string $buyprice;
    private string $saleprice;
    private string $stok;
    private string $brand;
    private string $photo;
    private string $status;
    //creamos el constructor
    public function --construct()
    {
        //obtenemos los metedos de la clase mysql
        parent::__construt();

    }
    //creamos el metodo insert product
    //el cual va aceptar como entrada de los datos
    @param sting $name,
    @param sting $description,
    @param sting $size,
    @param sting $color,
    @param sting $pricebuy,
    @param sting $saleprice,
    @param sting $stok,
    @param sting $brand,
    @param sting $photo,
    @return array

    public function insert_product(
        string $name,
         string $description,
          string $size,
           string $color,
            string $pricebuy,
             string $saleprice,
              string $stok,
               string $brand,
                string $photo,
    ){
        //recogemos las valores en las propiedades
        $this->name $name;
        $this->description $description;
        $this->size $size;
        $this->color $color;
        $this->pricebuy $pricebuy;
        $this->saleprice $saleprice;
        $this->stok $stok;
        $this->brand $brand;
        $this->photo $photo;
        //creamos la consulta
        $sql = INSERT INTO `tb_product`;
        
                                        (`p_name`,
                                        `p_description`,
                                        `p_size`, `p_color`,
                                        `p_buyPrice`,
                                        `p_salePrice`,
                                        `p_stock`,
                                        `p_brand`,
                                        `p_photo`)
                                        VALUES
                                        (?, ?, ?, ?, ?, ?, ?, ?, ?);
        //creamos en arrrvalues que va alamacenar los valores de los campos
        $arrvalues = array();
        //llamamos el metodo insert de la clase mysql
        $requets = $thihs=>insert($sql, $arravalues);
        return $request;
    }

    
    
}