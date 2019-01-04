<?php

namespace models;

use core\database;

class Productdetail
{
    public function get_productdetail($id){
        $conn=new  database();
       
        $productId = $conn->escape_parameter($id);
 
        $sql = "SELECT si.stockitemid, si.stockitemname, si.unitprice, si.Photo, s.suppliername, si.marketingcomments FROM stockitems si join suppliers s on s.supplierid = si.supplierid where stockitemid = '$productId'";
        $result = $conn->query($sql);
       
        //Eerste positie uit de array.
        return $result[0];
    }

    public function stockquantity(){
        
    }
    
}



?>