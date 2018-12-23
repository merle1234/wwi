<?php
namespace models;
use core\database;
class Products
{
    public function get_products(){
        $conn=new  database();

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM stockitems";
        $result = $conn->query($sql);

        return $result;
    }
}