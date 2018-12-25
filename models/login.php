<?php
namespace models;
use core\database;
class login

include_once(“model/login.php”);
class Model {
public function getlogin()
{
if(isset($_REQUEST[‘username’]) && isset($_REQUEST[‘password’])){
if($_REQUEST[‘username’]=='root' && $_REQUEST[‘password’]=='root'){
return ‘login’;
}
                        else{
return ‘invalid user’;
}
}
}
}

?>

