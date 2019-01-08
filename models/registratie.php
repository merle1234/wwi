<?php
namespace models;
use core\database;

class Registratie {

public function StoreData($email,$password,$postcode,$adres,$stad,$naam,$tel)
    {
        
        $connection = new database();
        $nawquery = $connection->insert("INSERT INTO users(FullName, AdressLine, PostalCode, PhoneNumber, City)
        VALUES ('$naam' , '$adres' , '$postcode' , '$tel' , '$stad' )");
        
        $accountquery = $connection->insert("INSERT INTO account(UserId, Password, EmailAddress)
        VALUES ('$nawquery' , '$password' , ' $email' )");
       
    }

}
?>