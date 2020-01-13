<?php

class Insert_controller extends CI_Controller{

    function __Construct(){
        //default constructor
        parent::__Construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function create(){
        $this->load->view('Insert_View');

        if($this->input->post('insert')){
            $fname=$this->input->post('fname');
            $lname=$this->input->post('lname');
            $age=$this->input->post('age');
            $dob=$this->input->post('dob');

            $this->load->model('Insert_model');
            $this->Insert_model->insertdata($fname,$lname,$age,$dob);

            echo "Data inserted Successfully";

        }
    }
}

?>