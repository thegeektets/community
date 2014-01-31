<?php
  class about extends CI_Controller{

  	function index(){
   $data['title'] =("About US");
		//$this->load->view('includes/header');
   	$this->load->view('about');
	//	$this->load->view('includes/footer');
  		
  	}
  	
  }
?>