<?php
namespace models;
use core\database;

class login {

public function getlogin($mail, $password)
{
// here goes some hardcoded values to simulate the database
if(isset($mail) && isset($password)){
    $connection = new database();
    $query = "SELECT accountId FROM account WHERE Emailaddress = '$mail' and Password = '$password'";
    $status = $connection->login($query);
if($status == true){
    
return 'login';
}
                        else{
return 'invalid user';
}
}
}

}

?>