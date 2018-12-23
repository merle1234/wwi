<?php

use core\database;


class products
{
    public function Products()
    {
        //Get Database Products
        //$products = $data['products'] = $this->Products_model->get_products();


        $content = new \models\products();
        $result = $content->get_products();
        require_once('views/products.phtml');       
    }
    
}

?>