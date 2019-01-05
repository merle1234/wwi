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
            echo "New record created successfully";
        } else {
            echo "Dit email bestaat al";
        }
        return true;
    }
    public function escape_parameter($param) {
        return mysqli_real_escape_string($this->conn, $param);
    }
}