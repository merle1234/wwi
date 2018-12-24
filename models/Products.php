<?php
namespace models;
use core\database;
class Products
{
    public function get_products(){
        $conn=new  database();
        
       
        $sql = "SELECT stockitemid, stockitemname,unitprice FROM stockitems where IsChillerStock = 1 ORDER BY stockitemname ASC";
        $result = $conn->query($sql);
       
        return $result;
    }
}