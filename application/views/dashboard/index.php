<!DOCTYPE html>
<html lang="en">
<?php $this->load->helper('url'); ?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="<?php echo base_url("assets/equiplexfav.ico") ?>">

	<title>Equiplex Developers Community | Dashboard</title>
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
            <li class="active" ><a href="<?php echo base_url("index.php/users/dashboard");?>"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
            <li ><a href="<?php echo base_url("index.php/users/projects");?>"><i class="fa fa-list-alt"></i><span>Prodcuts</span></a></li>
            <li ><a href="<?php echo base_url("index.php/users/myprofile");?>"><i class="fa fa-file"></i><span>Profile</span></a></li>
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
              <li><a href="<?php echo base_url("index.php/users/myprofile");?>">Profile</a></li>
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
      <div class="col-md-8">
          <div class="block-flat">
            <div class="header">              
              <h3>New Projects</h3>
            </div>
            <div class="content">
              <div class="list-group">
                
                
             <?php
              $i=0;
              while ($i < count($projects)){
             ?>
                <a href="<?php echo base_url("index.php/products/reviewproduct")."/".$projects[$i]['product_id']?>" class="list-group-item">
                 <h5 class="list-group-item-heading">Project Name : <?php echo $projects[$i]["product_name"] ;?></h5>
                <div>Project Category : <?php echo $projects[$i]["projectcategory"] ;?></div>  </a>
                <div>Developer : <a href="<?php echo base_url("index.php/users/profile/".$projects[$i]["username"] );?>"><?php echo $projects[$i]["full_names"] ;?></a></div>
              
              <?php
             $i++;
           
            }
            ?>   

                 </div>            
            </div>
          </div>
        </div>
        
     <div class="col-md-4">
      <div class="block-flat">
          <div class="header">              
            <h3>Community Members</h3>
          </div>
          <div class="content">
          <!--search before anything else-->
          <input type="text" class="form-control search" placeholder="Search..." />
        
          <div class="dd" id="list1" style="height : 380px ; overflow : scroll ; ">
          <ol class="dd-list">
          <!--loop printing out community members in  a list -->
           <?php
              $i=0;
              while ($i < count($members)){
              ?>
              <li class="dd-item" data-id="<?php echo $i ?>">
               <div class="dd-handle">
               <a href ="<?php echo base_url("index.php/users/profile/".$members[$i]['username']);?>"><?php echo ($members[$i]['full_names']) ;?></a>
               </div>
              </li>
              <?php
             $i++;
           
            }
            ?>
           </ol>
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
