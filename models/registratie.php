<?php
namespace models;
use core\database;

class Registratie {

public function StoreData($email,$password,$naam,$adres,$postcode,$stad,$tel)
    {
        $connection = new database();
        $nawquery = $connection->insert("INSERT INTO users(FullName, AdressLine, PostalCode, PhoneNumber, City)
        VALUES ('$naam' , '$adres' , '$postcode' , '$tel' , '$stad' )");
        $accountquery = $connection->insert("INSERT INTO account(UserId, Password, EmailAddress)
        VALUES ('$nawquery' , '$password' , '$email' )");
        if ($accountquery == "error")
        {
            return "error";
        }
        else{
            return "succes";
        }
    }

}
?>