<?php
class Products_model extends CI_model {
    //Get all database products
    public function get_products(){
        $this->db->query('SELECT * from stockitems');
        $query = $this->db->get();
        return $query->result();
    }
}