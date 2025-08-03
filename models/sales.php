<?php
require_once "../Models/mysql.php";
class sales extends Mysql
{
    //creamos el metodo constructor
    public function __construct()
    {
        //Obtenemos los metodos de la clase mysql
        parent::__construct();
    }
    //metodo que obtiene las ventas realizadas
    public function select_sales()
    {
        $sql= "SELECT
	tbc.c_name,
	tbp.C_lastName,
	tbp.C_dni,
	tbp.p_name
	tbp.p_size
	tbp.p_salePrice
	tbp.p_stock
	tbp.p_brand
	tbdcp.dcp_quantity
	tbdcp.dcp_unitprice
	tbdcp.dcp_amount
FROM 
	tb_customers AS tbc
	INNER JOIN tb_notesale AS tbns ON tbns.customer_id = tbc.idcustomers
	INNER JOIN tb_detailcustomerproduct AS tbdcp ON tbdcp.notesale_id = tbns.idnotesale
	INNER JOIN tb_product AS tbp ON tbn.idProduct = tbdcp.product_id
ORDER BY 
	tbns.ns_saleDate DESC;"
    }
}
    