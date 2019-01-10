<?php

namespace models;

use core\database;

class Basket
{
    public function getProducts($ids){
        $conn=new  database();
       
        
        $sql = "SELECT stockitemid, stockitemname, unitprice, Photo, Photo2, Photo3 FROM stockitems WHERE `StockItemID` IN (".implode(',',$ids).")";
        $result = $conn->query($sql);
       
        return $result;
    }

    public function getCustomerInfo($id)
    {
        $conn=new  database();      
        $id = $id[0]['UserId'];
        $sql = "SELECT * FROM users WHERE `userId` = $id";
        $result = $conn->query($sql);
       
        return $result;
    }
public function Order()
{
    $conn=new  database();      

    $currentDate = date("Y/m/d");
    $id = $_SESSION['UserId'][0]['UserId'];
   
    $orderId= rand();
    

    $sql = $conn->insert("INSERT INTO Orders(OrderID, CustomerID, OrderDate , SalespersonPersonID, ContactPersonID, LastEditedBy)
    VALUES ('$orderId','$id[0]','$currentDate', '2', '2', '2')");
    //var_dump($_SESSION['OrderId']);
        foreach($_SESSION['OrderLine'] as $product)
        {
            $orderLineId= rand();
            $productId = $product['stockitemid'];
            $amount = $product['amount'];
            
            $sql = $conn->insert("INSERT INTO orderlines(OrderlineID, OrderId, StockItemID, Quantity, PackageTypeID, LastEditedBy)
            VALUES ('$orderLineId', '$orderId', '$productId', '$amount', '2', '2')");
        }
} 
}



?>