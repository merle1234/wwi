<?php

use core\database;
include ('./models/content.php');


class content
{
    public function Home()
    {
        
        
        $content = new \models\content();
        $queryresult = $content->getData();
       
        
        require_once('views/home.phtml');       
    }

    public function Login()
    {
        $content = new \models\content();
       // $content->getAll();
        require_once('views/login.phtml');       
    }
}


?>