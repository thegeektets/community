<?php
    class users extends CI_Controller{
    private $username;

    public function __construct()
    {
    parent::__construct();
    $this->load->model('users_model');
    }

//loads the dashboard with the necessary data 

  function index(){
   $this->load->library('session');
    if($this->session->userdata('logged_in') == "TRUE") {
      $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
      $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
      $this->load->view('dashboard/profile' , $data);
 
    }
    else{
      $data['success']=("") ;
  	  $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('user', 'Username ', 'required'); 
      $this->form_validation->set_rules('pass', 'Password  ', 'required'); 
                      

    if ($this->form_validation->run() == FALSE){
 
       $this->load->view('includes/header');
       $this->load->view('login',$data);
    }
    else {
       $passw = $this->users_model->logindetails();

       if($this->input->post("pass") == $passw){
          $this->load->library('session');
          $newdata = array(
                'username'  => $this->input->post("user"),
                'logged_in' => TRUE
               );

        $this->session->set_userdata($newdata);
        $users = $this->session->all_userdata();
        $this->users_model->login($this->input->post("user") );
        $this->dashboard();
        }

    else{
       $data['success']= ("Login Failed !") ;
       $this->load->view('includes/header');
       $this->load->view('login' ,$data);
   
      }
        
      }
    }		
  }
  //loads the edit_projects page with the necessary data and tools

  function projects(){
   $this->load->library('session');
   $this->load->helper(array('form', 'url'));

    if($this->session->userdata('logged_in') == "TRUE") {
      $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
      $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
      $data['projects'] =$this->users_model->get_projects($this->session->userdata('username'));
      $data['success']=("") ;
    
      $this->load->view('dashboard/edit_projects' , $data);
 
    }
    else{
    
       $data['success']= ("Login Required!") ;
       $this->load->view('includes/header');
       $this->load->view('login' ,$data);
   
      }
        
      }
   

//edit projects function 

  function editproject(){
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      
      $this->form_validation->set_rules('name','name', 'required'); 
      $this->form_validation->set_rules('category','category', 'required'); 
      $this->form_validation->set_rules('desc','description', 'required'); 
      //$this->form_validation->set_rules('avatar','avatar', 'required'); 

   if ($this->form_validation->run() == FALSE){
    $this->load->library('session');
    
    $data['success'] =("project update failed");
    $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
    $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
    $data['projects'] =$this->users_model->get_projects($this->session->userdata('username'));
     
      $this->load->view('includes/header');
      $this->load->view('dashboard/edit_projects' ,$data);
    }
    else {
    $config['upload_path'] = './assets/img/projects/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '1000';
    $config['max_width']  = '1024';
    $config['max_height']  = '768';
    $config['overwrite'] = FALSE; 
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    $avatar = 'avatar' ;
    if ( ! $this->upload->do_upload($avatar))
    {
    $this->load->library('session');
    $error = $this->upload->display_errors();
    $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
    $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
    $data['projects'] =$this->users_model->get_projects($this->session->userdata('username'));

    $this->users_model->editproject();
  
    $data['success'] =("project edit success"); 
    $this->load->view('includes/header');
    $this->load->view('dashboard/edit_projects' ,$data);
     
    }
    else
    {
     $this->load->library('session');
      $this->users_model->editproject();
     $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
     $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
     $data['success'] =("project and avatar edit success"); 
     $data['projects'] =$this->users_model->get_projects($this->session->userdata('username'));

     $this->load->view('includes/header');
     $this->load->view('dashboard/edit_projects' ,$data);
     
    }

    $this->updatelog($this->session->userdata('username'),"Project Edit",$this->session->userdata('username')." edited the ".$name = $this->input->post("name")." project",null);
    
    }

  }



//logs out the user and re initializes the session varibles
  function logout(){
        $this->load->library('session');
        $this->users_model->logout($this->session->userdata('username'));
        $newdata = array(
        'logged_in' => FALSE);

        $this->session->set_userdata($newdata);
        $data['success']=("") ;
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user', 'Username ', 'required'); 
        $this->form_validation->set_rules('pass', 'Password  ', 'required'); 
    
    if ($this->form_validation->run() == FALSE){
    $this->load->view('includes/header');
    $this->load->view('login',$data);
    }else {
      $passw = $this->users_model->logindetails();
      if($this->input->post("pass") == $passw){
        $this->load->library('session');
        $newdata = array(
                   'username'  => $this->input->post("user"),
                   'logged_in' => TRUE );

       $this->session->set_userdata($newdata);
       $users = $this->session->all_userdata();
       $this->users_model->login($this->input->post("user") );
       $this->dashboard();
      }

      else{
     $data['success']= ("Login Failed !") ;
     $this->load->view('includes/header');
     $this->load->view('login' ,$data);
   
      }
        
    }
      
     
      }

      //function registers new users ..
        
    function register(){
     $this->load->helper(array('form', 'url'));

     $this->load->library('form_validation');

            $this->form_validation->set_rules('name', 'Fullname ', 'required'); 
            $this->form_validation->set_rules('username', 'Username ', 'required'); 
            $this->form_validation->set_rules('email', 'Email ', 'required|valid_email'); 
            $this->form_validation->set_rules('password', 'Password  ', 'required'); 
            $this->form_validation->set_rules('gender', 'Gender  ', 'required'); 
                       

    if ($this->form_validation->run() == FALSE){
 
    $data['title'] =("About US");
    $this->load->view('includes/header');
    $this->load->view('register');
    }
    else {
     $data['success']= ("Registration success") ;
     $this->users_model->registeruser();
     $this->load->view('includes/header');
     $this->load->view('login' ,$data);
    
    $this->updatelog($this->input->post("username"),"New User","Welcome our newest member".$this->input->post("username"),null);
    
    }
  }

  //function loads the portfolio of a user/developer
  function profile($username){
          $this->load->library('session');
    
        $data['profile'] = $this->users_model->get_user($username);
        $data['skills'] = $this->users_model->get_skills($username);
        $data['projects'] =$this->users_model->get_projects($username);
  
        $this->load->view('profile/index', $data);
 }

//dashboard :
  function dashboard(){
          $this->load->library('session');
    
      if($this->session->userdata('logged_in') == "TRUE") {
        $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
        $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
     //   $data['projects'] =$this->users_model->get_projects($this->session->userdata('username'));
  
        $this->load->view('dashboard/profile' , $data);
        }
        else{
          $this->index();
        }
      }
  //this function loads the activity pane which updates members on what is going on
      function activity(){
          $this->load->library('session');
    
      if($this->session->userdata('logged_in') == "TRUE") {
        $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
        $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
        $data['online'] = $this->users_model->online();
        $data['logs'] = $this->users_model->readlog();
        
     //   $data['projects'] =$this->users_model->get_projects($this->session->userdata('username'));
        $this->load->view('includes/header');
     
        $this->load->view('dashboard/activity' , $data);
        }
        else{
          $this->index();
        }
      }
  //this function updates the activity log of users as they perform various actions 
    //this log is later used to update other members on what is happening in the coomunity
      //view other users profiles 
      function updatelog($username,$category ,$description ,$snap){
        //updatelog on db
        $this->users_model->updatelog($username,$category ,$description ,$snap);
        



      }
  function viewprofile($username){
          $this->load->library('session');
    
      if($this->session->userdata('logged_in') == "TRUE") {
        $data['profile'] = $this->users_model->get_user($username);
        $data['skills'] = $this->users_model->get_skills($username);
     //   $data['projects'] =$this->users_model->get_projects($this->session->userdata('username'));
  
        $this->load->view('dashboard/viewprofile' , $data);
        }
        else{
          $this->index();
        }
      }

  //allows you to edit the details of a user
 function editprofile(){
     $this->load->helper(array('form', 'url'));

     $this->load->library('form_validation');

            $this->form_validation->set_rules('name','Fullname ', 'required'); 
            $this->form_validation->set_rules('username', 'username ', 'required'); 
            $this->form_validation->set_rules('email', 'Email ', 'required|valid_email'); 
            $this->form_validation->set_rules('gender', 'Gender  ', 'required'); 
            $this->form_validation->set_rules('about', 'about ', 'required'); 
            $this->form_validation->set_rules('phone_number', 'phone_number ', 'required|number'); 
            $this->form_validation->set_rules('university', 'Gender  ', 'required'); 
            $this->form_validation->set_rules('city', 'City', 'required'); 
            $this->form_validation->set_rules('DOB', 'Birthday  ', 'required'); 
                    
                       

    if ($this->form_validation->run() == FALSE){
    $this->load->library('session');
    $data['success'] =("");
    $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
    $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
    $this->load->view('includes/header');
    $this->load->view('dashboard/edit_profile' ,$data);
    }
    else {
     $this->load->library('session');
     $this->users_model->editdetails();
     $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
     $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
     $data['success'] =("profile update success");
     $this->load->view('includes/header');
     $this->load->view('dashboard/edit_profile' ,$data);
     $this->updatelog($this->input->post("username"),"Profile Edit","Check out the new edits on the portfolio site and profile of ".$this->input->post("username"),null);
   
    }
}

function addproject(){
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('name','name', 'required'); 
      $this->form_validation->set_rules('category','category', 'required'); 
      $this->form_validation->set_rules('desc','description', 'required'); 
      //$this->form_validation->set_rules('avatar','avatar', 'required'); 

   if ($this->form_validation->run() == FALSE){
     $this->load->library('session');
     $data['success'] =("project update failed");
     $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
     $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
      $this->load->view('includes/header');
      $this->load->view('dashboard/edit_profile' ,$data);
    }
    else {
    $config['upload_path'] = './assets/img/projects/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '100';
    $config['max_width']  = '1024';
    $config['max_height']  = '768';
    $config['overwrite'] = FALSE; 
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    $avatar = 'avatar' ;
    if ( ! $this->upload->do_upload($avatar))
    {
    $this->load->library('session');
    $error = $this->upload->display_errors();
    $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
    $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
    $data['success'] =("project file upload failure ".$error); 
    $this->load->view('includes/header');
    $this->load->view('dashboard/edit_profile' ,$data);
     
    }
    else
    {
     $this->load->library('session');
      $this->users_model->addproject();
     $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
     $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
     $data['success'] =("project upload success"); 
     $this->load->view('includes/header');
     $this->load->view('dashboard/edit_profile' ,$data);

    $this->updatelog($this->session->userdata("username"),"New Project",$this->session->userdata('username')." added a new project ".$this->input->post("username"),null);
   
     
    }


    
    }

  }

//change both avatars or one of them
function changeavatars(){
 $this->load->library('session');
 
 $this->load->helper(array('form', 'url'));

 $data['projects'] =$this->users_model->get_projects($this->session->userdata('username'));

 $config['upload_path'] = './assets/img/users/';
 $config['allowed_types'] = 'gif|jpg|png';
 $config['max_size'] = '1000';
 $config['max_width']  = '1024';
 $config['max_height']  = '768';
 $config['overwrite'] = FALSE; 
 $this->load->library('upload', $config);
 $this->upload->initialize($config);
 $useravatar = 'useravatar' ;
 $coveravatar = 'coveravatar' ;
      
 if ( ! $this->upload->do_upload($useravatar) &&  ! $this->upload->do_upload($coveravatar))
    {
      $error = $this->upload->display_errors();
      $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
      $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
      $data['success'] =("both avatar file uploads failed ".$error); 
      $this->load->view('includes/header');
      $this->load->view('dashboard/edit_projects' ,$data);
     
    }
elseif ( ! $this->upload->do_upload($useravatar))
    {
      $this->load->library('session');
      //$error = $this->upload->display_errors();
      $this->users_model->changecoveravatar();
   
      $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
      $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
      $data['success'] =("coveravatar update success"); 
      $this->load->view('includes/header');
      $this->load->view('dashboard/edit_projects' ,$data);

  $this->updatelog($this->session->userdata("username"),"Avatar Change",$this->session->userdata('username')." changed the profile user avatar",null);
   
     
    }
elseif ( ! $this->upload->do_upload($coveravatar))
    {
      $this->load->library('session');
      //$error = $this->upload->display_errors();
      $this->users_model->changeuseravatar();
      $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
      $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
      $data['success'] =("useravatar update success"); 
      $this->load->view('includes/header');
      $this->load->view('dashboard/edit_projects' ,$data);
  
  $this->updatelog($this->session->userdata("username"),"Cover Change",$this->session->userdata('username')." changed the profile cover avatar",null);
     
    }
  else{
      $this->load->library('session');
      $this->users_model->changeuseravatar();
      $this->users_model->changecoveravatar();
   
      $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
      $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
      $data['success'] =("avatar uploads success"); 
      $this->load->view('includes/header');
     $this->load->view('dashboard/edit_projects' ,$data);
  
  $this->updatelog($this->session->userdata("username"),"Avatars Change",$this->session->userdata('username')." changed the profile cover avatar and user avatar",null);
  
  }




}








function changecoveravatar(){
      $this->load->helper(array('form', 'url'));
     
        $config['upload_path'] = './assets/img/users/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $config['overwrite'] = FALSE; 
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $avatar = 'coveravatar' ;
    if ( ! $this->upload->do_upload($avatar))
    {
      $this->load->library('session');
      $error = $this->upload->display_errors();
      $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
      $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
      $data['success'] =("cover avatar file upload failure ".$error); 
      $this->load->view('includes/header');
      $this->load->view('dashboard/edit_profile' ,$data);
     
    }
    else
    {
     $this->load->library('session');
      $this->users_model->changecoveravatar();
      $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
      $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
      $data['success'] =("Cover photo upload success"); 
      $this->load->view('includes/header');
     $this->load->view('dashboard/edit_profile' ,$data);
  
  $this->updatelog($this->session->userdata("username"),"Cover Change",$this->session->userdata('username')." changed the profile cover avatar",null);
  
    }


    
    

  }

function changeuseravatar(){
       $this->load->helper(array('form', 'url'));
    
        $config['upload_path'] = './assets/img/users/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $config['overwrite'] = FALSE; 
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $avatar = 'useravatar' ;
    
    if ( ! $this->upload->do_upload($avatar))
    {
      $this->load->library('session');
      $error = $this->upload->display_errors();
      $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
      $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
      $data['success'] =("user avatar file upload failure ".$error); 
      $this->load->view('includes/header');
      $this->load->view('dashboard/edit_profile' ,$data);
     
    }
    else
    {
     $this->load->library('session');
      $this->users_model->changeuseravatar();
      $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
      $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
      $data['success'] =("user avatar upload success"); 
      $this->load->view('includes/header');
     $this->load->view('dashboard/edit_profile' ,$data);
  $this->updatelog($this->session->userdata("username"),"Avatar Change",$this->session->userdata('username')." changed the profile user avatar",null);
     
    }


    
    

  }
    


function addskill(){
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('skill','skill', 'required'); 
   if ($this->form_validation->run() == FALSE){
    $this->load->library('session');
    $data['success'] =("skill update failed");
    $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
    $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
    $this->load->view('includes/header');
    $this->load->view('dashboard/edit_profile' ,$data);
    }
    else {
     $this->load->library('session');
     $this->users_model->addskill();
     $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
     $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
     $data['success'] =("skill update success"); 
     $this->load->view('includes/header');
     $this->load->view('dashboard/edit_profile' ,$data);

$this->updatelog($this->session->userdata("username"),"New Skill",$this->session->userdata('username')." added ".$this->input->post('skill')." as a new skill",null);
  
    } 
function uploadprojectpic(){

    $config['upload_path'] = './projects/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '100';
    $config['max_width']  = '1024';
    $config['max_height']  = '768';

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload())
    {
      $error = array('error' => $this->upload->display_errors());

    }
    else
    {
      $data = array('upload_data' => $this->upload->data());

    }
}



}

}