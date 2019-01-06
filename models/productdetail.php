<?php

namespace models;

use core\database;

class Productdetail
{
    public function get_productdetail($id){
        $conn=new  database();
       
        $productId = $conn->escape_parameter($id);
 
        $sql = "SELECT si.videourl, si.stockitemid, si.stockitemname, si.unitprice, si.Photo, si.Photo2, si.Photo3, s.QuantityOnHand, si.marketingcomments FROM stockitems si join stockitemholdings s on s.stockitemid = si.stockitemid where si.stockitemid = '$productId'";
        $result = $conn->query($sql);
       
        //Eerste positie uit de array.
        return $result[0];

        
        

    }


    public function stockquantity(){
        
    }
    
}



?>