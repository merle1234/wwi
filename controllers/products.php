<?php

use core\database;


class products
{
    public function Products()
    {
        $content = new \models\products();
        require_once('views/products.phtml');       
    }
    
}

?>