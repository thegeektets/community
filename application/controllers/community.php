<?php
  class community extends CI_Controller{

    public function __construct()
    {
    parent::__construct();
    $this->load->model('users_model');
    }


  	function index(){
   $data['title'] =("Developers Community");
   $data['members'] = $this->users_model->get_members();
		$this->load->view('includes/header');
   	$this->load->view('community',$data);
	//	$this->load->view('includes/footer');
  		
  	}
  	
  }
?>