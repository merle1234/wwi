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
        $dbname = "test";

        $this->conn = new \mysqli($hostname, $username, $password, $dbname);


        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

}

    public function query($query)
    {

        return mysqli_query($this->conn,$query);


    }


}