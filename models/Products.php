<?php
namespace models;
use core\database;
class Products
{

    private $pagesize = 10;

    public function get_products($page, $search){
        $conn=new  database();

        $from = $this->pagesize * $page;
        $search_sql = "";

        if (strlen($search) > 0) {
            $search_sql = "WHERE stockitemname LIKE '%" . $conn->escape_parameter($search) . "%'";
        }
       
        $sql = "SELECT stockitemid, stockitemname,unitprice,Photo FROM stockitems $search_sql ORDER BY stockitemname ASC LIMIT $from, $this->pagesize";
        $result = $conn->query ($sql);

        return $result;
    }

    public function get_total_pages($search) {
        $conn=new  database();
       
        $search_sql = "";

        if (strlen($search) > 0) {
            $search_sql = "WHERE stockitemname LIKE '%" . $conn->escape_parameter($search) . "%'";
        }

        $sql = "SELECT count(*) total FROM stockitems $search_sql";
        
        $result = $conn->query($sql);
       
        return ceil($result[0]['total'] / $this->pagesize);
    }
}