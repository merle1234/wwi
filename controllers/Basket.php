<?php

use core\database;


class Basket
{
    public function winkelmand()
    {
        if (isset($_SESSION['winkelmand'])) {
            $winkelmand = $_SESSION['winkelmand'];
            $productsIds = array();
            foreach($winkelmand as $products)
            {
                array_push($productsIds, $products['product']);
            }

            $content = new \models\basket();
            $result = $content->getProducts($productsIds);
        } else {
            $winkelmand = array();
        }
        
        $mergedArrays = [];
        foreach($winkelmand as $a)
        {
            
            
            foreach($result as $key => $r)
            {
               
                if($r['stockitemid'] == $a['product'])
                {
                    
                    $amount = array('amount' => $a['amount']);
                    $merged = array_merge($r, $amount);
                    array_push($mergedArrays, $merged);
                }else
                {
                    
                }
                
            }
        }
        $_SESSION['OrderLine'] = $mergedArrays;
        //var_dump( $_SESSION['OrderLine']);
        require_once('views/winkelmand.phtml');       
    }

    public function Info()
    {
        if($_SESSION['auth'] == "true")
        {
            $id = $_SESSION['UserId'];
            $content = new \models\basket();
            $result = $content->getCustomerInfo($id);
        require_once('views/info.phtml');                   
        }else
        {
            header('Location: ?controller=login&action=invoke');
        }
    }

    public function Payment()
    {
            $content = new \models\basket();
            $result = $content->Order();
            $change = array("succes","error","succes","succes");
            if($change[array_rand($change)] == "succes") 
            {
                 require_once('views/paymentsucces.phtml');                   
            }else
            {
                require_once('views/paymenterror.phtml');                   
            }
    }
    

    public function winkelmand_legen() {
        $winkelmand = null;
       
        $_SESSION['winkelmand'] = $winkelmand;
    }
}

?>