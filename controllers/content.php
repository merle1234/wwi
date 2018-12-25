<?php

use core\database;
include ('./models/content.php');


class content
{
    public function Home()
    {
        $content = new \models\content();
       // $content->getAll();
        require_once('views/home.phtml');       
    }
    public function Producte()
    {
        $content = array("title" => "puur");
        require_once('views/product.phtml');   
    }

    public function Producten()
    {
        $content = new \models\content();
       // $content->getAll();
        require_once('views/products.phtml');       
    }

    public function Login()
    {
        $content = new \models\content();
       // $content->getAll();
        require_once('views/login.phtml');       
    }
}


?>