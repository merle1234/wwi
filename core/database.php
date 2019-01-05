<?php
namespace core;
class database
{
    private $conn;
    public function __construct()
    {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wideworldimporters";

        $this->conn = new \mysqli($hostname, $username, $password, $dbname);


        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

}

    public function query($query)
    {
        $result = mysqli_query($this->conn,$query);
        $content = array();
                
          while($row = $result->fetch_assoc()) {
             
              $content[]=$row;
          };
         
        return $content;
    }
    public function Insert($query)
    {
        if (mysqli_query($this->conn,$query)) {
            echo "Bedankt! Uw account is succevol aangemaakt.";
        } else {
            echo "Deze E-mail is reeds in gebruik.";
        }
        return true;
    }
    public function escape_parameter($param) {
        return mysqli_real_escape_string($this->conn, $param);
    }
}