<?php

use core\database;

class Registratie{

    public function registratie()
    {
        require_once('views/registratie.phtml');
    }

    public function StoreData()
    {
        $email = $_POST['Email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        
        $content = new \models\registratie();

        $store - $content->StoreData($email);

    }
}
?>