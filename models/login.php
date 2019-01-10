<?php
namespace models;
use core\database;

class login {

public function getlogin($mail, $password)
{
// here goes some hardcoded values to simulate the database
if(isset($mail) && isset($password)){
    $connection = new database();
    $query = "SELECT UserId, Password FROM account WHERE Emailaddress = '$mail'";
    $status = $connection->login($query);
    
    $checkpass = password_verify($password, $status[0]['Password']);
if($checkpass == true){
    $_SESSION['UserId'] = $status[0]['UserId'];
return 'login';
}
                        else{
echo "het email of wachtwoord klopt niet";
}
}
}

}

?>