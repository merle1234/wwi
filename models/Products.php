<?php
namespace models;
use core\database;
class Products
{
    public function get_products(){
        $conn=new  database();
        
       
        $sql = "SELECT stockitemname FROM stockitems Limit 10";
        $result = $conn->query($sql);
       
        return $result;
    }
}