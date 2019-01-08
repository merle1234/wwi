<?php
namespace models;
use core\database;

class login {

public function getlogin($mail, $password)
{
// here goes some hardcoded values to simulate the database
if(isset($mail) && isset($password)){
    $query = "SELECT $username, $password FROM users"
if($mail=='admin' && $password=='admin'){
return 'login';
}
                        else{
return 'invalid user';
}
}
}

}

?>