<?php
namespace models;
use core\database;
class database
{

    public function getOne()
    {
       $conn=new  database();

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT naam FROM bier";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "naam" . $row["naam"];
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }
}