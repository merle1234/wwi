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
        $naam = $_POST['naam'];
        $adres = $_POST['adres'];
        $postcode = $_POST['postcode'];
        $tel = $_POST['telefoon'];
        $stad = $_POST['stad'];
        $content = new \models\registratie();

        $store = $content->StoreData($email,$password,$naam,$adres,$postcode,$tel,$stad);

    }
}
?>