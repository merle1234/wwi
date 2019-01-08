<?php
namespace models;
use core\database;

class Registratie {

public function StoreData($email,$password)
    {       
        $connection = new database();       
        $query = $connection->insert("INSERT INTO account(Password, EmailAddress)
        VALUES ('$password' , ' $email' )");
       
       var_dump($query);
    }

}
?>