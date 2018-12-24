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
    public function Producten()
    {
        $content = array("title" => "puur");
        require_once('views/products.phtml');   
    }
}

?>