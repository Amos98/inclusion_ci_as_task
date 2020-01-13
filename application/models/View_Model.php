<?php

class Insert_Model extends CI_Model{

    function display(){
        $query = "Select * from test";
        $this->db->query($query);
    }
    
}
?>