<?php
namespace models;
use core\database;
class content extends products
{

    public function getData()
    {

        $conn = new database();

<<<<<<< HEAD
        $query = $connection->query("SELECT * FROM artikelen");
        
        return $query;
=======
        $query = "SELECT stockitemID, stockitemname, Photo FROM stockitems ORDER BY stockitemname ASC";
        $queryresult = $conn->query($query);

        return $queryresult;
>>>>>>> 46ebc141adeac2f9664558a08993ae85d85ca18f
    }

}