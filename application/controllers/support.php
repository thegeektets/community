<?php
  class support extends CI_Controller{

  	function index(){
   $data['title'] =("Support");
		//$this->load->view('includes/header');
   	$this->load->view('support');
	//	$this->load->view('includes/footer');
  		
  	}
  	
  }
?>