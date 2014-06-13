<!DOCTYPE html>
<html lang="en">
<?php $this->load->helper('url'); 
error_reporting(0);
$p=0;
//creating new arrays
while($p < sizeof($projects)){


$projectname[$p] = $projects[$p]['product_name'] ;
$projectcat[$p] = $projects[$p]['projectcategory'] ;
$projectdesc[$p] = $projects[$p]['product_desc'] ;
$website[$p] =  $projects[$p]['website'] ;
$p++;
}

?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="<?php echo base_url("assets/equiplexfav.ico") ?>">

	<title>Equiplex Developers Community | Projects</title>
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
            <li  class="active"><a href="<?php echo base_url("index.php/users/projects");?>"><i class="fa fa-list-alt"></i><span>Prodcuts</span></a></li>
            <li><a href="<?php echo base_url("index.php/users/myprofile");?>"><i class="fa fa-file"></i><span>Profile</span></a></li>
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
        
       <div class="tab-container tab-left">
            
          <div id = "new" class="tab-pane">
          <div class="tab-content">
                <div class="tab-container tab-right">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#newproject">Project Details</a></li>
            <li><a data-toggle="tab" href="#newtools">Tools</a></li>
            <li><a data-toggle="tab" href="#newsnapshots">Snapshots</a></li>
          </ul>
          <div class="tab-content">
            <div id="newproject" class="tab-pane active cont">
               <div id ="newprojectmessage"></div>
              <form class="form-horizontal" role="form" onsubmit="return addproject()" id = "addproject">
              <table class="no-border no-strip information">
                <tbody class="no-border-x no-border-y">
                    <tr>
                    <td style="width:20%;" class="category"><strong>NEW PROJECT DETAILS</strong></td>
                    <td>
                      <table class="no-border no-strip skills">
                        <tbody class="no-border-x no-border-y">
                          <tr><td style="width:20%;"><b>Project Name</b></td><td>
                          <input type="text"  name = "name" value ="" class="form-control" id = "newname"></td></tr>
                          <tr><td style="width:20%;"><b>Project Category</b></td><td>
                          <input type="text"  name = "category" value ="" class="form-control"></td></tr>
                          <tr><td style="width:20%;"><b>Project Description</b></td><td>
                          <textarea name = "desc" class="form-control"></textarea> </td></tr>
                          <tr><td style="width:20%;"><b>Project Website</b></td><td>
                          <input type="text"  name = "website" value ="" class="form-control"></td></tr>
                          </tbody>
                      </table>
                    </td>
                  </tr>
                 
                  
                </tbody>
              </table>
                      <button class="btn btn-default btn-flat btn-primary bg" type="submit"><span>Save Changes</span></button>
                </form>
            </div>
             <div id="newtools" class="tab-pane">

                  <h3 class="widget-title">Tools</h3>
             <div id = "newtoolsmessage">
               
             </div>
              <div class="row friends-list">
                <div class="col-sm-6 col-md-6">
                    <form class="form-horizontal" role="form" onsubmit="return addtool()" id ='addtools'>
                    <div class="input-group">
                    <select type="text" class="form-control" id = "projectname" name = "project">
                      
                    </select> 
                    </div>
                    <div class="input-group">
                    <input type="text" class="form-control" name = "tool" id = "newtool">
                    <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Add Tool</button>
                    </span>
                    </div>                   
                    </form>
                    
                  
                </div>

                <div class="col-sm-6 col-md-6" id="addedtools">
                  
                   
                </div>
              </div>
            </div>


             <div id="newsnapshots" class="tab-pane">
             <div id= 'avatarmessage'></div>
              <form role="form" class="form-horizontal" onsubmit="return newprojectpics()" enctype ='multipart/form-data' id="newprojectpics">
              <div id="newsnapmessage"></div>
                        <div class="form-group">
                <label class="col-sm-3 control-label">New Snapshot</label>
                <div class="col-sm-6">
                <div class="input-group">
                  <select type="text" class="form-control" id = "snapnew" name = "project">
                      
                    </select>
                  </div>
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div>
                      <span class="btn btn-primary btn-file"><span class="fileinput-new">Select Project</span><span class="fileinput-exists"> Snapshot1</span><input type="file" name="productpic"></span>
                    </div>
                  </div>
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div>
                      <span class="btn btn-primary btn-file"><span class="fileinput-new">Select Project</span><span class="fileinput-exists"> Snapshot2</span>
                      <input type="file" name="productpic1"></span>
                    </div>
                  </div>
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div>
                      <span class="btn btn-primary btn-file"><span class="fileinput-new">Select Project</span><span class="fileinput-exists"> Snapshot3</span>
                      <input type="file" name="productpic2"></span>
                    </div>
                  </div>
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div>
                      <span class="btn btn-primary btn-file"><span class="fileinput-new">Select Project</span><span class="fileinput-exists"> Snapshot4</span>
                      <input type="file" name="productpic3"></span>
                    </div>
                  </div>
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div>
                      <span class="btn btn-primary btn-file"><span class="fileinput-new">Select Project</span><span class="fileinput-exists"> Snapshot5</span>
                      <input type="file" name="productpic4"></span>
                    </div>
                  </div>
                        <button class="btn btn-default btn-flat btn-primary bg" type ="submit"><span>Save Changes</span></button>
               
                </div>
              </div>
                  </div>
                </div>
              </div>
              </form>
                </div>
            </div>
            </div>
            </div>
            </div>
            

            
    <div id = "edit" class="tab-pane">
          <div class="tab-content">
                <div class="tab-container tab-right">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#editproject">Project Details</a></li>
            <li><a data-toggle="tab" href="#edittools">Tools</a></li>
            <li><a data-toggle="tab" href="#editsnapshots">Snapshots</a></li>
          </ul>
          <div class="tab-content">
            <div id="editproject" class="tab-pane active cont">
              <div id = "changeprojectmessage"></div>
              <form onsubmit="return editproject()" id = "changeproject" name = "changeproject">
              <table class="no-border no-strip information">
                <tbody class="no-border-x no-border-y">
                    <tr>
                    <td style="width:20%;" class="category"><strong>EDIT PROJECT DETAILS</strong></td>
                    <td>
                      <table class="no-border no-strip skills">
                         <tbody class="no-border-x no-border-y">
                          <tr><td style="width:20%;"><b>Select Project</b></td><td>
                          <select type="text"  name = "selectproject" value ="" class="form-control"
                             onclick="populateform()">
                                                      <?php for($i=0;$i<sizeof($projects);$i++){
                                                        $var=$projects[$i]['product_name'];
                                                      ?>
                                                      <option value ='<?php echo $var?>' editable ='true'> <?php echo $var ;?></option>
                                                     <?php }?>
                                                      
                          </select></td></tr>
                          
                          <tr><td style="width:20%;"><b>Project Name</b></td><td>
                          <input type="text"  name = "name" value ="" class="form-control"></td></tr>
                          <tr><td style="width:20%;"><b>Project Category</b></td><td>
                          <input type="text"  name = "category" value ="" class="form-control"></td></tr>
                          <tr><td style="width:20%;"><b>Project Description</b></td><td>
                          <textarea name = "desc" class="form-control"></textarea> </td></tr>
                          <tr><td style="width:20%;"><b>Project Website</b></td><td>
                          <input type="text"  name = "website" value ="" class="form-control"></td></tr>
                          </tbody>
                       </table>
                    </td>
                  </tr>
                 
                  
                </tbody>
              </table>
                      <button class="btn btn-default btn-flat btn-primary bg" type="submit"><span>Save Changes</span></button>
                  </form>
            </div>
             <div id="edittools" class="tab-pane">
               <table class="no-border no-strip information">
                <tbody class="no-border-x no-border-y">
                    <tr>
                    <td style="width:20%;" class="category"><strong>EDIT PROJECT TOOLS</strong></td>
                    <td>
                <div class="row friends-list">
                <div class="col-sm-6 col-md-6">
                    <div id = "edittoolsmessage"></div>
                    <form onsubmit = "return extratool()" id = "edittool" name = "edittool">
                    <div class="input-group">
                    <select type="text" class="form-control" name = "project" id = "project">
                                    <?php for($i=0;$i<sizeof($projects);$i++){
                                                        $var=$projects[$i]['product_name'];
                                                      ?>
                                                      <option value ='<?php echo $var?>' editable ='true'> <?php echo $var ;?></option>
                                                     <?php }?>
                            
                    </select> 
                    </div>
                    <div class="input-group">
                    <input type="text" class="form-control" name = "tool" id = "tool">
                    <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Add Tool</button>
                    </span>
                    </div>                   
                    </form>
                    
                  
                </div>

                <div class="col-sm-6 col-md-6" id="tools">
                  
                   
                </div>
              </div>                    </td>
                  </tr>
                 
                  
                </tbody>
              </table>
              </form>
            </div> 
            <div id="editsnapshots" class="tab-pane">
              <form onsubmit="return editsnapshot()" name = "editsnaps"  id  = "editsnaps"  >
              <div id = "editsnapsmessage"></div>
              <table class="no-border no-strip information">
                <tbody class="no-border-x no-border-y">
                    <tr>
                    <td style="width:20%;" class="category"><strong>EDIT PROJECT SNAPSHOTS</strong></td>
                    <td>
                      <table class="no-border no-strip skills">
                        <tbody class="no-border-x no-border-y">
                              <form role="form" class="form-horizontal">
                         <div class="form-group">
                <label class="col-sm-3 control-label">Edit Snapshot</label>
                <div class="col-sm-6">
                <div class="input-group">
                   <select type="text" class="form-control" id = "snapnew" name = "project">
                                           <?php for($i=0;$i<sizeof($projects);$i++){
                                                        $var=$projects[$i]['product_name'];
                                                      ?>
                                                      <option value ='<?php echo $var?>' editable ='true'> <?php echo $var ;?></option>
                                                     <?php }?>
                            
                    </select>
                  </div>
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div>
                      <span class="btn btn-primary btn-file"><span class="fileinput-new">Change Project</span><span class="fileinput-exists"> Snapshot1</span><input type="file" name="productpic"></span>
                    </div>
                  </div>
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div>
                      <span class="btn btn-primary btn-file"><span class="fileinput-new">Change Project</span><span class="fileinput-exists"> Snapshot2</span>
                      <input type="file" name="productpic1"></span>
                    </div>
                  </div>
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div>
                      <span class="btn btn-primary btn-file"><span class="fileinput-new">Change Project</span><span class="fileinput-exists"> Snapshot3</span>
                      <input type="file" name="productpic2"></span>
                    </div>
                  </div>
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div>
                      <span class="btn btn-primary btn-file"><span class="fileinput-new">Change Project</span><span class="fileinput-exists"> Snapshot4</span>
                      <input type="file" name="productpic3"></span>
                    </div>
                  </div>
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div>
                      <span class="btn btn-primary btn-file"><span class="fileinput-new">Change Project</span><span class="fileinput-exists"> Snapshot5</span>
                      <input type="file" name="productpic4"></span>
                    </div>
                  </div>
                        <button class="btn btn-default btn-flat btn-primary bg" type ="submit"><span>Save Changes</span></button>
               
                </div>
              </div>
                  </div>
               
                </div>
              </div>
                         
                         </tbody>
                      </table>
                    </td>
                  </tr>
                 
                  
                </tbody>
              </table>
                      <button class="btn btn-default btn-flat btn-primary bg" type="submit"><span>Save Changes</span></button>
              </form>
            </div>
            </div>
            </div>

            
          </div>
           <div class="tab-content">
            <div id="editproject" class="tab-pane active cont">
              <form onsubmit="return deleteproject()" id = "deleteform" name = "deleteform">
              <div id = "deletemessage"></div>
              <table class="no-border no-strip information">
                <tbody class="no-border-x no-border-y">
                    <tr>
                    <td style="width:20%;" class="category"><strong>DELETE PROJECT</strong></td>
                    <td>
                      <table class="no-border no-strip skills">
                   <table class="no-border no-strip skills">
                        <tbody class="no-border-x no-border-y">
                          <tr><td style="width:20%;"><b>Select Project</b></td><td>
                          <select type="text"  name = "project" value ="" class="form-control">
                                         <?php for($i=0;$i<sizeof($projects);$i++){
                                                        $var=$projects[$i]['product_name'];
                                                      ?>
                                                      <option value ='<?php echo $var?>' editable ='true'> <?php echo $var ;?></option>
                                                     <?php }?>
                            
                          </select></td></tr>
                            
                         
                         </tbody>
                      </table>
                    </td>
                  </tr>
                 
                  
                </tbody>
              </table>
                      <button class="btn btn-default btn-flat btn-danger bg" type="submit"><span>Delete Project</span></button>
              </form>
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

  function addproject(){
    $.ajax({
    type: 'post',
    url:'<?php echo base_url("/index.php/users/addproject")?>',
    data:$('#addproject').serialize(),
    success:
      function(data){
        if (data == '1'){
           $('#newprojectmessage').attr("class" ,"alert alert-success alert-white-alt rounded");
           $('#newprojectmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#newprojectmessage').append("<div class='icon'><i class='fa fa-check'></i></div>");
           $('#newprojectmessage').append("<strong>Success!</strong> new project added!"); 
           $('#projectname').append("<option value ='"+$("#newname").val()+"'>"+$("#newname").val()+"</option>");
           $('#snapnew').append("<option value ='"+$("#newname").val()+"'>"+$("#newname").val()+"</option>");

          
        }
        else{
          
           $('#newprojectmessage').attr("class" ,"alert alert-danger alert-white-alt rounded");
           $('#newprojectmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#newprojectmessage').append("<div class='icon'><i class='fa fa-warning'></i></div>");
           $('#newprojectmessage').append("<strong>Error!</strong> failed to add new project"); 
        }
      },
    fail:
      function(data){
        console.log(data);
      }

  });
  
  return false;

  }
function editproject(){
    $.ajax({
    type: 'post',
    url:'<?php echo base_url("/index.php/users/editproject")?>',
    data:$('#changeproject').serialize(),
    success:
      function(data){
        if (data == '1'){
           $('#changeprojectmessage').attr("class" ,"alert alert-success alert-white-alt rounded");
           $('#changeprojectmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#changeprojectmessage').append("<div class='icon'><i class='fa fa-check'></i></div>");
           $('#changeprojectmessage').append("<strong>Success!</strong> project details edited !"); 
          
          
        }
        else{
          
           $('#changeprojectmessage').attr("class" ,"alert alert-danger alert-white-alt rounded");
           $('#changeprojectmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#changeprojectmessage').append("<div class='icon'><i class='fa fa-warning'></i></div>");
           $('#changeprojectmessage').append("<strong>Error!</strong> failed to edit project details"); 
        }
      },
    fail:
      function(data){
        console.log(data);
      }

  });
  
  return false;

  }
   function addtool(){
    $.ajax({
    type: 'post',
    url:'<?php echo base_url("/index.php/users/addtool")?>',
    data:$('#addtools').serialize(),
    success:
      function(data){
        if (data == '1'){
           $('#newtoolsmessage').attr("class" ,"alert alert-success alert-white-alt rounded");
           $('#newtoolsmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#newtoolsmessage').append("<div class='icon'><i class='fa fa-check'></i></div>");
           $('#newtoolsmessage').append("<strong>Success!</strong> new tool added!"); 
           $('#addedtools').append("<h4>"+$("#newtool").val()+"</h4>"); 
          
        }
        else{
          
           $('#newtoolsmessage').attr("class" ,"alert alert-danger alert-white-alt rounded");
           $('#newtoolsmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#newtoolsmessage').append("<div class='icon'><i class='fa fa-warning'></i></div>");
           $('#newtoolsmessage').append("<strong>Error!</strong> failed to add new tool"); 
        }
      },
    fail:
      function(data){
        console.log(data);
      }

  });
  
  return false;

  }
    function extratool(){
    $.ajax({
    type: 'post',
    url:'<?php echo base_url("/index.php/users/addtool")?>',
    data:$('#edittool').serialize(),
    success:
      function(data){
        if (data == '1'){
           $('#edittoolsmessage').attr("class" ,"alert alert-success alert-white-alt rounded");
           $('#edittoolsmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#edittoolsmessage').append("<div class='icon'><i class='fa fa-check'></i></div>");
           $('#edittoolsmessage').append("<strong>Success!</strong> new tool added!"); 
          
        }
        else{
          
           $('#edittoolsmessage').attr("class" ,"alert alert-danger alert-white-alt rounded");
           $('#edittoolsmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#edittoolsmessage').append("<div class='icon'><i class='fa fa-warning'></i></div>");
           $('#edittoolsmessage').append("<strong>Error!</strong> failed to add new tool"); 
        }
      },
    fail:
      function(data){
        console.log(data);
      }

  });
  
  return false;

  }
      function deleteproject(){
    $.ajax({
    type: 'post',
    url:'<?php echo base_url("/index.php/users/deleteproject")?>',
    data:$('#deleteform').serialize(),
    success:
      function(data){
        if (data == '1'){
           $('#deletemessage').attr("class" ,"alert alert-success alert-white-alt rounded");
           $('#deletemessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#deletemessage').append("<div class='icon'><i class='fa fa-check'></i></div>");
           $('#deletemessage').append("<strong>Success!</strong> project deleted !"); 
          
        }
        else{
          
           $('#deletemessage').attr("class" ,"alert alert-danger alert-white-alt rounded");
           $('#deletemessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#deletemessage').append("<div class='icon'><i class='fa fa-warning'></i></div>");
           $('#deletemessages').append("<strong>Error!</strong> project deletion failed"); 
        }
      },
    fail:
      function(data){
        console.log(data);
      }

  });
  
  return false;

  }
  function newprojectpics (){
      
  var form = document.getElementById('newprojectpics');
  var myfd = new FormData(form);

    $.ajax({
    
    type: 'post',
    url:'<?php echo base_url("/index.php/users/uploadprojectpics")?>',
    data:myfd,
    processData: false,
    contentType:false,
    
    success:
      function(data){
        if (data == '1'){
           $('#newsnapmessage').attr("class" ,"alert alert-success alert-white-alt rounded");
           $('#newsnapmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#newsnapmessage').append("<div class='icon'><i class='fa fa-check'></i></div>");
           $('#newsnapmessage').append("<strong>Success!</strong> snapshot added"); 
           
        }
        else{
          
           $('#newsnapmessage').attr("class" ,"alert alert-danger alert-white-alt rounded");
           $('#newsnapmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#newsnapmessage').append("<div class='icon'><i class='fa fa-warning'></i></div>");
           $('#newsnapmessage').append("<strong>Error!</strong> snapshot upload failed"); 
        }
      },
    fail:
      function(data){
        console.log(data);
      }

  });
  
  return false;



  }
  function editsnapshot (){
      
  var form = document.getElementById('editsnaps');
  var myfd = new FormData(form);

    $.ajax({
    
    type: 'post',
    url:'<?php echo base_url("/index.php/users/uploadprojectpics")?>',
    data:myfd,
    processData: false,
    contentType:false,
    
    success:
      function(data){
        if (data == '1'){
           $('#editsnapsmessage').attr("class" ,"alert alert-success alert-white-alt rounded");
           $('#editnapsmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#editsnapsmessage').append("<div class='icon'><i class='fa fa-check'></i></div>");
           $('#editsnapsmessage').append("<strong>Success!</strong> snapshots edited"); 
           
        }
        else{
          
           $('#editsnapsmessage').attr("class" ,"alert alert-danger alert-white-alt rounded");
           $('#editsnapsmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#editsnapsmessage').append("<div class='icon'><i class='fa fa-warning'></i></div>");
           $('#editsnapsmessage').append("<strong>Error!</strong> snapshot upload failed"); 
        }
      },
    fail:
      function(data){
        console.log(data);
      }

  });
  
  return false;



  }

  function populateform(){
 var s=document.changeproject.selectproject.selectedIndex;
            var selected=document.changeproject.selectproject.options[s].value;
            var names=<?php echo json_encode($projectname);?>;
            var category=<?php echo json_encode($projectcat);?>;
            var description=<?php echo json_encode($projectdesc);?>;
            var website=<?php echo json_encode($website);?>;
                          
 for(var i=0;i<names.length;i++){
      if(selected==names[i].replace(/[\[\]']+/g,'').replace(/['"]/g,'')){
        document.changeproject.name.value=names[i].replace(/[\[\]']+/g,'').replace(/['"]/g,'');
        document.changeproject.category.value=category[i].replace(/[\[\]']+/g,'').replace(/['"]/g,'');
        document.changeproject.desc.value=description[i].replace(/[\[\]']+/g,'').replace(/['"]/g,'');
        document.changeproject.website.value=website[i].replace(/[\[\]']+/g,'').replace(/['"]/g,'');
         }
        
    }
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
