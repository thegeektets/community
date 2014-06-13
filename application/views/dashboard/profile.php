<!DOCTYPE html>
<html lang="en">
<?php $this->load->helper('url'); 
error_reporting(0);

?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="<?php echo base_url("assets/equiplexfav.ico") ?>">

	<title>Equiplex Developers Community | Profile</title>
	<link href='<?php echo base_url("assets/dashboard/fonts.googleapis.com/csse05c.css?family=Open+Sans:400,300,600,400italic,700,800")?>' rel='stylesheet' type='text/css'>
	<link href='<?php echo base_url("assets/dashboard/fonts.googleapis.com/css8b0d.css?family=Raleway:300,200,100' rel='stylesheet")?>' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url("assets/dashboard/js/bootstrap/dist/css/bootstrap.css")?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/dashboard/js/jquery.gritter/css/jquery.gritter.css")?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/dashboard/fonts/font-awesome-4/css/font-awesome.min.css")?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/dashboard/js/jquery.nanoscroller/nanoscroller.css")?>" />

  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/dashboard/js/jquery.codemirror/lib/codemirror.css")?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/dashboard/js/jquery.codemirror/theme/ambiance.css")?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/dashboard/js/jquery.vectormaps/jquery-jvectormap-1.2.2.css")?>"  media="screen"/>
  
	<link href="<?php echo base_url("assets/dashboard/css/style.css")?>" rel="stylesheet" />



  <!-- custom css -->	
  <style type="text/css">

  .hidden{
    display: none;
  }
  .detail{
    cursor: text;
   padding: 6px 8px;
  font-size: 12px;
  border-radius: 1px;
  -webkit-border-radius: 1px;
  box-shadow: none;
  }
  

  </style>
</head>
<body class="animated">

<div id="cl-wrapper">

  <div class="cl-sidebar">
    <div class="cl-toggle"><i class="fa fa-bars"></i></div>
    <div class="cl-navblock">
      <div class="menu-space">
        <div class="content">
          <div class="sidebar-logo">
            <div class="logo">
             </div>
          </div>
          <ul class="cl-vnavigation">
            <li  ><a href="<?php echo base_url("index.php/users/dashboard");?>"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
            <li ><a href="<?php echo base_url("index.php/users/projects");?>"><i class="fa fa-list-alt"></i><span>Prodcuts</span></a></li>
            <li class="active" ><a href="<?php echo base_url("index.php/users/myprofile");?>"><i class="fa fa-file"></i><span>Profile</span></a></li>
            <li ><a href="<?php echo base_url("index.php/users/profile/")."/".$profile[0]['username'];?>"><i class="fa fa-file"></i><span>Portfolio</span></a></li>
            
            
            </div>
      </div>
      <div class="text-right collapse-button" style="padding:7px 9px;">
        <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
      </div>
    </div>
  </div>
	<div class="container-fluid" id="pcont">
   <!-- TOP NAVBAR -->
  <div id="head-nav" class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-collapse">
        <ul class="nav navbar-nav navbar-right user-nav">
          <li class="dropdown profile_menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="" height = "100px"   width ="100px" src="<?php echo $profile[0]['avatar']?>" /><span><?php echo $profile[0]['full_names']?></span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">My Account</a></li>
              <li><a href="#">Profile</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo base_url("index.php/users/logout");?>">Sign Out</a></li>
            </ul>
          </li>
        </ul>			
          
      </div><!--/.nav-collapse animate-collapse -->
    </div> 
  </div>
  
    
	<div class="cl-mcont">		

     <div class="row">
      
      <div class="col-md-4 col-sm-6">
        <div class="fd-tile detail tile-prusia">
          <div class="content"><h1 class="text-left"></h1><p>Projects</p></div>
          <div class="icon"><i class="fa fa-comments"></i></div>
        </div>
      </div>
    
      
      <div class="col-md-4 col-sm-6">
        <div class="fd-tile detail tile-prusia">
          <div class="content"><h1 class="text-left"></h1><p>Developers</p></div>
          <div class="icon"><i class="fa fa-comments"></i></div>
        </div>
      </div>
    
      
      
      <div class="col-md-4 col-sm-6">
        <div class="fd-tile detail tile-prusia">
          <div class="content"><h1 class="text-left"></h1><p>Designers</p></div>
          <div class="icon"><i class="fa fa-comments"></i></div>
        </div>
      </div>
      
    </div>
    <div class="row">
       <div class="col-sm-12">
        <div class="block-flat profile-info">
          <div class="row">
            <div class="col-sm-2">
              <div class="avatar">
                <img src="<?php echo $profile[0]['avatar']?>" class="profile-avatar" />
              </div>
            </div>
            <div class="col-sm-7">
              <div class="personal">
                <h1 class="name"><?php echo $profile[0]['full_names']?></h1>
                <p class="description"><?php echo $profile[0]['aboutme']?><p>
              </div>
            </div>
            <div class="col-sm-3">
              <table class="no-border no-strip skills">
                <tbody class="no-border-x no-border-y">
                    <?php 
                    $i = 0 ;
                    while (count($skills) > $i) {
                       ?>
                      <tr>
                      <td><?php echo $skills[$i]['skill'] ;?></td>  </tr>
              
                       <?php
                       $i++;
                     } 

                    ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-12">
        
        <div class="tab-container">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Information</a></li>
            <li><a data-toggle="tab" href="#friends">Skills</a></li>
            <li><a data-toggle="tab" href="#settings">Avatar</a></li>
          </ul>
          <div class="tab-content">
            <div id="home" class="tab-pane active cont">
              <form onsubmit="return editprofile()" id = "editprofile">
              <div id="message">
                
              </div>
              <table class="no-border no-strip information">
                <tbody class="no-border-x no-border-y">
                    <tr>
                    <td style="width:20%;" class="category"><strong>PROFILE</strong></td>
                    <td>
                      <table class="no-border no-strip skills">
                        <tbody class="no-border-x no-border-y">
                          <tr><td style="width:20%;"><b>Username</b></td><td><span class = "detail"><?php echo $profile[0]['username'] ;
                          if($profile[0]['username'] == null){echo "username" ;} ?></span>
                          <input type="text" class="detail hidden" name = "username" value ="<?php echo $profile[0]['username'] ?>"></td></tr>
                          <tr><td style="width:20%;"><b>Fullname</b></td><td><span class = "detail"><?php echo $profile[0]['full_names'] ;
                          if($profile[0]['full_names'] == null){echo "Fullname" ;} ?></span>
                          <input type="text" class="detail hidden" name = "name" value ="<?php echo $profile[0]['full_names'] ?>"></td></tr>
                          <tr><td style="width:20%;"><b>Gender</b></td><td><span class = "detail"><?php echo $profile[0]['sex']  ;
                           if($profile[0]['sex'] == null){echo "sex" ;}?></span>
                          <input type="text" class="detail hidden" name = "gender" value ="<?php echo $profile[0]['sex'] ?>"></td></tr>
                          <tr><td style="width:20%;"><b>DOB</b></td><td><span class = "detail"><?php echo $profile[0]['DOB']  ;
                           if($profile[0]['DOB'] == null){echo "DOB" ;}?></span>
                          <input type="text" class="detail hidden" name = "DOB" value ="<?php echo $profile[0]['DOB'] ?>"></td></tr>
                         
                         </tbody>
                      </table>
                    </td>
                  </tr>
                 
                  <tr>
                    <td style="width:20%;" class="category"><strong>CONTACT</strong></td>
                    <td>
                      <table class="no-border no-strip skills">
                        <tbody class="no-border-x no-border-y">
                           <tr><td style="width:20%;"><b>Website</b></td><td><span class = "detail"><?php echo $profile[0]['website'] ;
                            if($profile[0]['website'] == null){echo "website" ;}?></span>
                          <input type="url" class="detail hidden" name = "website" value ="<?php echo $profile[0]['website'] ?>"></td></tr>
                          <tr><td style="width:20%;"><b>E-mail</b></td><td><span class = "detail"><?php echo $profile[0]['email'] ;
                            if($profile[0]['email'] == null){echo "email" ;}?></span>
                          <input type="text" class="detail hidden" name = "email" value ="<?php echo $profile[0]['email'] ?>"></td></tr>
                          <tr><td style="width:20%;"><b>Mobile</b></td><td><span class = "detail"><?php echo $profile[0]['phone_number'] ;
                            if($profile[0]['phone_number'] == null){echo "phone_number" ;}?></span>
                          <input type="text" class="detail hidden" name = "phone_number" value ="<?php echo $profile[0]['phone_number'] ?>"></td></tr>
                          <tr><td style="width:20%;"><b>Country</b></td><td><span class = "detail"><?php echo $profile[0]['country'] ;
                            if($profile[0]['country'] == null){echo "Country" ;}?></span>
                          <input type="text" class="detail hidden" name = "country" value ="<?php echo $profile[0]['country'] ?>"></td></tr>
                          <tr><td style="width:20%;"><b>City</b></td><td><span class = "detail"><?php echo $profile[0]['city'] ;
                            if($profile[0]['city'] == null){echo "city" ;}?></span>
                          <input type="text" class="detail hidden" name = "city" value ="<?php echo $profile[0]['city'] ?>"></td></tr>
                                                
                        </tbody>
                      </table>
                    </td>
                  </tr>
                    <tr>
                    <td style="width:20%;" class="category"><strong>  EDUCATION</strong></td>
                    <td>
                      <table class="no-border no-strip skills">
                        <tbody class="no-border-x no-border-y">
                          <tr><td style="width:20%;"><b>University</b></td><td><span class = "detail"><?php echo $profile[0]['university'] ;
                            if($profile[0]['university'] == null){echo "University" ;}?></span>
                          <input type="text" class="detail hidden" name = "university" value ="<?php echo $profile[0]['university'] ?>"></td></tr>
                                                
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td style="width:20%;" class="category"><strong>  WORK</strong></td>
                    <td>
                      <table class="no-border no-strip skills">
                        <tbody class="no-border-x no-border-y">
                          <tr><td style="width:20%;"><b>Company</b></td><td><span class = "detail"><?php echo $profile[0]['company'] ;
                            if($profile[0]['company'] == null){echo "company" ;}?></span>
                          <input type="text" class="detail hidden" name = "company" value ="<?php echo $profile[0]['company'] ?>"></td></tr>
                                                
                        </tbody>
                      </table>
                    </td>
                  </tr>
                                
                  <tr>
                    <td class="category"><strong>ABOUT ME</strong></td>
                    <td><span class = "detail"><?php echo $profile[0]['aboutme'] ;
                            if($profile[0]['aboutme'] == null){echo "About Me" ;}?></span>
                          <input class="detail hidden" name = "about" value ="<?php echo $profile[0]['aboutme'] ?>" /></td>
                      <td>
                      
                    </tr>
                  <tr>
                    <td class="category"><strong>SOCIAL</strong></td>
                    <td> 
                      <table class="no-border no-strip skills">
                        <tbody class="no-border-x no-border-y">
                           <tr><td style="width:20%;">
                           <button class="btn btn-default btn-flat btn-facebook bg" type="button"><i class="fa fa-facebook"></i> <span>Facebook</span></button></td><td><span class = "detail"><?php echo $profile[0]['website'] ;
                            if($profile[0]['facebook'] == null){echo "facebook link" ;}?></span>
                          <input class="detail hidden" name = "facebook" value ="<?php echo $profile[0]['facebook'] ?>" />
                          <tr><td style="width:20%;">
                          <button class="btn btn-default btn-flat btn-twitter bg" type="button"><i class="fa fa-twitter"></i> <span>Twitter</span></button>
                          </td><td><span class = "detail"><?php echo $profile[0]['twitter'] ;
                            if($profile[0]['twitter'] == null){echo "twitter url" ;}?></span>
                      <input class="detail hidden" name = "twitter" value ="<?php echo $profile[0]['twitter'] ?>" /></button>
                          <tr><td style="width:20%;">
                          <button class="btn btn-default btn-flat btn-google-plus bg" type="button"><i class="fa fa-google-plus"></i> <span>Google+</span></button>
                      </td><td><span class = "detail"><?php echo $profile[0]['google'] ;
                            if($profile[0]['google'] == null){echo "google +" ;}?></span>
                      <input class="detail hidden" name = "google" value ="<?php echo $profile[0]['google'] ?>" /></button>
                          <tr><td style="width:20%;"><b><button class="btn btn-default btn-flat btn-github bg" type="button"><i class="fa fa-github"></i> <span>Github</span></button>
                      </td><td><span class = "detail"><?php echo $profile[0]['github'] ;
                            if($profile[0]['github'] == null){echo "Github link" ;}?></span>
                          <input class="detail hidden" name = "github" value ="<?php echo $profile[0]['github'] ?>" /></button>
                                         
                        </tbody>
                      </table>
                      
                      
                     
                    </td>
                  </tr>


                </tbody>
              </table>
                      <button class="btn btn-default btn-flat btn-primary bg" type ="submit"><span>Save Changes</span></button>
                    </form>
            </div>

            
            <div id="friends" class="tab-pane cont">
              <h3 class="widget-title">Skills</h3>
              <div class="row friends-list">
                <div id = "skillmessage"></div>
                <div class="col-sm-6 col-md-6">
                    <form onsubmit="return addskill()" id="addskill">
                    <div class="input-group">
                    <input type="text" class="form-control" name = "skill" id= "newskill">
                    <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Add Skill</button>
                    </span>
                    </div>                   
                    </form>
                    
                  
                </div>
                <div class="col-sm-6 col-md-6" id="skills">
                   
                   <?php 
                    $i = 0 ;
                    while (count($skills) > $i) {
                       ?>
                     <h4><?php echo $skills[$i]['skill'] ;?></h4>
                   <?php
                       $i++;
                     } 

                    ?>
                   
                </div>
              </div>
            </div>

            <div id="settings" class="tab-pane">
              <div id= 'avatarmessage'></div>
              <form role="form" class="form-horizontal" onsubmit="return changeavatars()" enctype ='multipart/form-data' id="avatars">
              <div class="form-group">
                <label class="col-sm-3 control-label">User avatar</label>
                <div class="col-sm-6">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div>
                      <span class="btn btn-primary btn-file"><span class="fileinput-new">Select image</span>
                      <span class="fileinput-exists">Change</span><input type="file" name="useravatar"></span>
                    </div>
                  </div>
                </div>
              </div>
                     <div class="form-group">
                <label class="col-sm-3 control-label">Cover avatar</label>
                <div class="col-sm-6">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div>
                      <span class="btn btn-primary btn-file"><span class="fileinput-new">Select image</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="coveravatar"></span>
                    </div>
                  </div>
                </div>
              </div>
                      <button class="btn btn-default btn-flat btn-primary bg" type ="submit"><span>Save Changes</span></button>
                  

              </form>

              <div class="md-overlay"></div>
            </div>
          </div>
        </div>    
        
        

    </div>

</div>
</div>
	
</div> 
	
</div>
<!-- Scripts 
==================================================================================-->
  
	<script src="<?php echo base_url("assets/dashboard/js/jquery.js")?>"></script>
     <script type="text/javascript">
    
   $("span.detail").click(function() 
    {
     edit($(this));
     });
  
   
   $("input.detail").change(function(){
      change($(this));
   }).blur(function() {
    $(this).hide().siblings("span.detail").show();
    });
   
  
  
   
   
   function edit($field){
     $field.hide()
     .siblings("input" ,"textarea").attr("class" ,"detail")
     .show()
     .val($field.text())
     .attr("value" ,$("input").val())
    

     .focus();
      
    }
  function change($input){
    $input.hide();
    
    var $span = $input.siblings("span.detail");
    if ($input.val())
    {
    $span.text($input.val());
    }
    $span.show();
  }

  function editprofile(){
    $.ajax({
    type: 'post',
    url:'<?php echo base_url("/index.php/users/editprofile")?>',
    data:$('#editprofile').serialize(),
    success:
      function(data){
        if (data == '1'){
           $('#message').attr("class" ,"alert alert-success alert-white-alt rounded");
           $('#message').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#message').append("<div class='icon'><i class='fa fa-check'></i></div>");
           $('#message').append("<strong>Success!</strong> Changes has been saved successfully!"); 

          
        }
        else{
          
           $('#message').attr("class" ,"alert alert-danger alert-white-alt rounded");
           $('#message').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#message').append("<div class='icon'><i class='fa fa-warning'></i></div>");
           $('#message').append("<strong>Error!</strong> saving changes"); 
        }
      },
    fail:
      function(data){
        console.log(data);
      }

  });
  
  return false;

  }

    function changeavatars(){

  var form = document.getElementById('avatars');
  var myfd = new FormData(form);

    $.ajax({
    
    type: 'post',
    url:'<?php echo base_url("/index.php/users/changeavatars")?>',
    data:myfd,
    processData: false,
    contentType:false,
    
    success:
      function(data){
        if ( data != '0'){
           $('#avatarmessage').attr("class" ,"alert alert-success alert-white-alt rounded");
           $('#avatarmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#avatarmessage').append("<div class='icon'><i class='fa fa-check'></i></div>");
           $('#avatarmessage').append("<strong>Success!</strong> Avatar changed"); 
           
        }
        else{
          
           $('#avatarmessage').attr("class" ,"alert alert-danger alert-white-alt rounded");
           $('#avatarmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#avatarmessage').append("<div class='icon'><i class='fa fa-warning'></i></div>");
           $('#avatarmessage').append("<strong>Error!</strong> Avatar change failed"); 
        }
      },
    fail:
      function(data){
        console.log(data);
      }

  });
  
  return false;

  }
   function addskill(){
    $.ajax({
    type: 'post',
    url:'<?php echo base_url("/index.php/users/addskill")?>',
    data:$('#addskill').serialize(),
    success:
      function(data){
        if (data == '1'){
           $('#skillmessage').attr("class" ,"alert alert-success alert-white-alt rounded");
           $('#skillmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#skillmessage').append("<div class='icon'><i class='fa fa-check'></i></div>");
           $('#skillmessage').append("<strong>Success!</strong> skill added"); 
           $('#skills').append('<h4>'+$('#newskill').val()+'</h4>');
           
        }
        else{
          
           $('#skillmessage').attr("class" ,"alert alert-danger alert-white-alt rounded");
           $('#skillmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#skillmessage').append("<div class='icon'><i class='fa fa-warning'></i></div>");
           $('#skillmessage').append("<strong>Error!</strong> failed to add skill"); 
        }
      },
    fail:
      function(data){
        console.log(data);
      }

  });
  
  return false;

  }






  </script>
	<script src="<?php echo base_url("assets/dashboard/js/jquery.cookie/jquery.cookie.js")?>"></script>
  <script src="<?php echo base_url("assets/dashboard/js/jquery.pushmenu/js/jPushMenu.js")?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/jquery.nanoscroller/jquery.nanoscroller.js")?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/jquery.sparkline/jquery.sparkline.min.js")?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/jquery.ui/jquery-ui.js")?>" ></script>
	<script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/jquery.gritter/js/jquery.gritter.js")?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/behaviour/core.js")?>"></script>
    
    <style type="text/css">
   .color.blue{background:#54ADE9;}
   </style>


  <script src="<?php echo base_url("assets/dashboard/js/jquery.codemirror/lib/codemirror.js")?>"></script>
  <script src="<?php echo base_url("assets/dashboard/js/jquery.codemirror/mode/xml/xml.js")?>"></script>
  <script src="<?php echo base_url("assets/dashboard/js/jquery.codemirror/mode/css/css.js")?>"></script>
  <script src="<?php echo base_url("assets/dashboard/js/jquery.codemirror/mode/htmlmixed/htmlmixed.js")?>"></script>
  <script src="<?php echo base_url("assets/dashboard/js/jquery.codemirror/addon/edit/matchbrackets.js")?>"></script>
  <script src="<?php echo base_url("assets/dashboard/js/jquery.vectormaps/jquery-jvectormap-1.2.2.min.js")?>"></script>
  <script src="<?php echo base_url("assets/dashboard/js/jquery.vectormaps/maps/jquery-jvectormap-world-mill-en.js")?>"></script>
  <script src="<?php echo base_url("assets/dashboard/js/behaviour/dashboard.js")?>"></script>
  
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url("assets/dashboard/js/behaviour/voice-commands.js")?>"></script>
<script src="<?php echo base_url("assets/dashboard/js/bootstrap/dist/js/bootstrap.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/jquery.flot/jquery.flot.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/jquery.flot/jquery.flot.pie.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/jquery.flot/jquery.flot.resize.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/jquery.flot/jquery.flot.labels.js")?>"></script>
</body>

</html>
