<?php
  class Home extends CI_Controller{

  	function index(){
    $data['title'] =("Home");
	 	$this->load->view('index');
			
  	}
  	
  }
?>