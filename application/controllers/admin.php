<?php
    class admin extends CI_Controller{
    private $username;

    public function __construct()
    {
    parent::__construct();
    $this->load->model('users_model');
    }

//loads the admin dash with the necessary data 

  function index(){
   $this->load->library('session');
    if($this->session->userdata('admin') == "TRUE") {
      
      $this->load->view('admin/profile');
 
    }
    else{
      $data['success']=("") ;
  	  $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('user', 'Username ', 'required'); 
      $this->form_validation->set_rules('pass', 'Password  ', 'required'); 
                      

    if ($this->form_validation->run() == FALSE){
 
       $this->load->view('includes/header');
       $this->load->view('admin/login');
    }
    else {
       $passw = "Eq@Admin13";
       if(($this->input->post("pass") == $passw) && ($this->input->post("user") == "Griffin")){
          $this->load->library('session');
          $newdata = array(
                'username'  => $this->input->post("user"),
                'admin' => TRUE
               );

        $this->session->set_userdata($newdata);
        $users = $this->session->all_userdata();
        $this->admindash();
        }

    else{
       $data['success']= ("Login Failed !") ;
       $this->load->view('includes/header');
       $this->load->view('admin/login');
   
      }
        
      }
    }		
  }
  //loads the edit_projects page with the necessary data and tools

  function logout(){
        $this->load->library('session');
        $newdata = array(
        'admin' => FALSE);

        $this->session->set_userdata($newdata);
        $data['success']=("") ;
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user', 'Username ', 'required'); 
        $this->form_validation->set_rules('pass', 'Password  ', 'required'); 
    
    if ($this->form_validation->run() == FALSE){
    $this->load->view('includes/header');
    $this->load->view('admin/login',$data);
    }else {
      $passw = $this->users_model->logindetails();
      if($this->input->post("pass") == $passw){
        $this->load->library('session');
        $newdata = array(
                   'username'  => $this->input->post("user"),
                   'logged_in' => TRUE );

       $this->session->set_userdata($newdata);
       $users = $this->session->all_userdata();
       $this->dashboard();
      }

      else{
     $data['success']= ("Login Failed !") ;
     $this->load->view('includes/header');
     $this->load->view('admin/login' ,$data);
   
      }
        
    }
      
     
      }

  
//dashboard :
  function admindash(){
          $this->load->library('session');
    
      if($this->session->userdata('logged_in') == "TRUE") {
        $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
        $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
     //   $data['projects'] =$this->users_model->get_projects($this->session->userdata('username'));
  
        $this->load->view('admin/profile' , $data);
        }
        else{
          $this->index();
        }
      }

  //allows you to edit the details of a user
 function mail(){
    $this->load->helper(array('form', 'url'));

    $this->load->library('session');
  if($this->session->userdata('admin')){
     $this->load->helper(array('form', 'url'));

     $this->load->library('form_validation');

            $this->form_validation->set_rules('subject','subject', 'required'); 
            $this->form_validation->set_rules('mail', 'message', 'required'); 
           
                       

    if ($this->form_validation->run() == FALSE){
    $this->load->library('session');
    $data['success'] =("");
    $this->load->view('includes/header');
    $this->load->view('admin/mail' ,$data);
    }
    else {
     $this->load->library('email');
    
     $this->email->from('support@equiplexdevelopers.com', 'Griffin M.');
     $list = $this->users_model->get_emails();
     $this->email->to($members);
     
     //$this->email->cc('another@another-example.com');
     //$this->email->bcc('them@their-example.com');
      $subject = $this->input->post("subject");
      $message = $this->input->post("mail");

      $this->email->subject($subject);
      $this->email->message($message);

      if($this->email->send()){

         $data['success'] =("mail sent successfully");
         $this->load->view('includes/header');
         $this->load->view('admin/mail' ,$data);
      }
      else{
     $error = $this->email->print_debugger();
     $data['success'] =("message not sent ".$error);
     $this->load->view('includes/header');
     $this->load->view('admin/mail' ,$data);
      }
      



    }
  }
  else{
     $data['success']= ("Login required!") ;
     $this->load->view('includes/header');
     $this->load->view('admin/login' ,$data);
   
  }
    
}







}