<?php
namespace models;
use core\database;

class Registratie {

public function StoreData($email,$password)
    {
        var_dump($email);
        var_dump($password);
        $query = $connection->query("INSERT INTO account(Password, EmailAddress)
        VALUES ($password, $email);");
    }

}
?>