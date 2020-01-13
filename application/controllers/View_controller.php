<?php 
   class View_controller extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
         
      } 
  
      public function index() { 
         $query = $this->db->get("test"); 
         $data['records'] = $query->result(); 
			
         $this->load->helper('url'); 
         $this->load->view('Record_view',$data); 
      } 
   }
   ?>