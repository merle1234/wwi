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
        $password = HashPassword($_POST['password']);
        $naam = $_POST['naam'];
        $adres = $_POST['adres'];
        $postcode = $_POST['postcode'];
        $tel = $_POST['telefoon'];
        $stad = $_POST['stad'];
        $content = new \models\registratie();

        $store = $content->StoreData($email,$password,$naam,$adres,$postcode,$stad, $tel);

        if($store != null)
        {
            echo "er is iets misgegaan";
        }
        else{
            Echo "Bedankt ".$naam."  voor het aanmaken van een account";
            
        }
    }
}
?>