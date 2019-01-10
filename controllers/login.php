<?php
use core\database;

class Login {

public function submit()
{
    $test = $_POST['submit'];
    var_dump($test);
    
}
public function invoke()
{
    if(isset($_POST['Email']) && isset($_POST['Password']))
    {
        $mail = $_POST['Email'];
        $password = $_POST['Password'];
    }
    else{
        $mail = null;
        $password = null;
    };
$content = new \models\login();
$reslt = $content->getlogin($mail, $password);     // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
//var_dump($reslt);
if($reslt == 'login')
{
$_SESSION["auth"] = 'true';
    //header("Refresh:0");
include 'views/afterlogin.phtml';
}
else
{
include 'views/login.phtml';
}

}

function logoff (){
    $_SESSION["auth"] = 'false';
    //header('Location: ?controller=content&action=home');
}

}






?>