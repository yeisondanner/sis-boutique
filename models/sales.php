<?php
require_once "../Models/mysql.php";
class sales extends mysql
{
    //creamos el constructor
    public function __construct()
    {
        parent::__construct();
    }
    //metodo que obtiene las ventas realizdas
    public function select_sales()
    {
        //creamos la consulta
        $sql = "SELECT
            tbc.c_name,
            tbc.c_lastName,
            tbc.c_dni,
            tbp.p_name,
            tbp.p_size,
            tbp.p_salePrice,
            tbp.p_stock,
            tbp.p_brand,
            tbdcp.dcp_quantity,
            tbdcp.dcp_unitprice,
            tbdcp.dcp_amount,
            tbns.idnotesale
        FROM 
            tb_customer AS tbc
            INNER JOIN tb_notesale AS tbns ON tbns.customer_id = tbc.idCustomer
            INNER JOIN tb_detailcustomerproduct AS tbdcp ON tbdcp.notesale_id = tbns.idnotesale
            INNER JOIN tb_product AS tbp ON tbp.idProduct = tbdcp.product_id
        ORDER BY 
            tbns.ns_saleDate DESC;";
        //llamamos el metodo select_all de la clase Mysql
        $request = $this->select_all($sql);
        //retornamos el resultado
        return $request;
    }
}
