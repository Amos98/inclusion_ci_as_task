<?php

class Insert_model extends CI_Model{

    function insertdata($fname,$lname,$age,$dob){
        $query = "Insert into test(fname, lname, age, dob, created_at) values('$fname','$lname','$age','$dob',NOW())";
        $this->db->query($query);
    }
    
}
?>