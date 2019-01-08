<?php
use core\database;

$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

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

include 'views/afterlogin.phtml';
}
else
{
include 'views/login.phtml';
}

}

}

public function logout(){
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: index.php"); // Redirecting To Home Page
}

}

?>