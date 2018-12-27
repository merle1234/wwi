<?php

use core\database;


class Productdetail
{

    public function productdetail()
    {
        $id = $_GET['ID'];
        $content = new \models\productdetail();
        $result = $content->get_productdetail($id);
        require_once('views/productdetail.phtml');       
    }

}
?>