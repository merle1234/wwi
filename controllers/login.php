<?php

use core\database;


class login
{
    public function Login()
    {
        $content = new \models\login();
        require_once('views/login.phtml');       
    }
    
}

if($_POST){
    echo"succesvol ingeloggd";
}

?>