<!DOCTYPE html>
<html lang="en">

<?php $this->load->helper('url') ?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="<?php echo base_url("assets/equiplexfav.ico") ?>">

	<title>Equiplex Developers Community | Login</title>
	<link href='<?php echo base_url('assets/dashboard/fonts.googleapis.com/csse05c.css?family=Open+Sans:400,300,600,400italic,700,800')?>' rel='stylesheet' type='text/css'>
	<link href='<?php echo base_url('assets/dashboard/fonts.googleapis.com/css8b0d.css?family=Raleway:300,200,100')?>' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('assets/dashboard/js/bootstrap/dist/css/bootstrap.css')?>" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/fonts/font-awesome-4/css/font-awesome.min.css')?>">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="<?php echo base_url('assets/dashboard/js/html5shiv.js')?>"></script>
	  <script src="<?php echo base_url('assets/dashboard/js/respond.min.js')?>"></script>
	<![endif]-->

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url('assets/dashboard/css/style.css')?>" rel="stylesheet" />	

</head>

<body class="texture">

<div id="cl-wrapper" class="login-container">

	<div class="middle-login">
		<div class="block-flat">
			<div class="header">							
				<h3 class="text-center">Equiplex Developers Community </h3>
			</div>
			<div>
						   <form id = "loginform" class="form-horizontal" <?php echo form_open('users/index'); ?>
						   <div id = "message"></div>
                   	<div class="content">
						<h4 class="title">Login Access</h4>
						<h3><?php echo $success ?></h3>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" placeholder="Username" id="username"  name = "user" class="form-control"
										value="<?php echo set_value('user'); ?>">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" placeholder="Password" id="password" name = "pass" value="<?php echo set_value('pass'); ?>" class="form-control">
									</div>
								</div>
							</div>
							
					</div>
					<div class="foot">
					    <button class="btn btn-primary" data-dismiss="modal" type="submit">Log me in</button>
					
						<button class="btn btn-default" data-dismiss="modal" type="button" onclick="register ()">Register</button>

						<button class="btn btn-primary" data-dismiss="modal" type="button" onclick="passwordmail()">Forgot Password</button>
					
					</div>
				</form>
			</div>
		</div>
		<div class="text-center out-links"><a href="<?php echo base_url() ?>">&copy; 2014 Equiplex Developers Community | Equiplex Business Solutions</a></div>
	</div> 
	
</div>


<script src="js/jquery.html"></script>
	<script src="<?php echo base_url("assets/dashboard/js/jquery.js")?>"></script>
	<script src="<?php echo base_url("assets/dashboard/js/jquery.cookie/jquery.cookie.js")?>"></script>
	<script type="text/javascript">
    $(function(){
      $("#cl-wrapper").css({opacity:1,'margin-left':0});
    });

  </script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript">
	function register(){
 	 window.location =('<?php echo base_url('index.php/users/register')?>') ;
	}
	
	function passwordmail(){
		  $.ajax({
    type: 'post',
    url:'<?php echo base_url("/index.php/users/passwordmail")?>',
    data:$('#loginform').serialize(),
    success:
      function(data){
        if (data == '1'){
           $('#message').attr("class" ,"alert alert-success alert-white-alt rounded");
           $('#message').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#message').append("<div class='icon'><i class='fa fa-check'></i></div>");
           $('#message').append("Your password has been sent to your email address"); 
          
        }
        else{
          
           $('#message').attr("class" ,"alert alert-danger alert-white-alt rounded");
           $('#message').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#message').append("<div class='icon'><i class='fa fa-warning'></i></div>");
           $('#message').append("No user exists by that username"); 
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
<script src="<?php echo base_url('assets/dashboard/js/behaviour/voice-commands.html')?>"></script>
<script src="<?php echo base_url('assets/dashboard/js/bootstrap/dist/js/bootstrap.min.html')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/dashboard/js/jquery.flot/jquery.flot.html')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/dashboard/js/jquery.flot/jquery.flot.pie.html')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/dashboard/js/jquery.flot/jquery.flot.resize.html')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/dashboard/js/jquery.flot/jquery.flot.labels.html')?>"></script>
<script src="<?php echo base_url("assets/dashboard/js/jquery.cookie/jquery.cookie.js")?>"></script>
<script src="<?php echo base_url("assets/dashboard/js/jquery.pushmenu/js/jPushMenu.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/jquery.nanoscroller/jquery.nanoscroller.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/jquery.sparkline/jquery.sparkline.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/jquery.ui/jquery-ui.js")?>" ></script>
<script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/jquery.gritter/js/jquery.gritter.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/behaviour/core.js")?>"></script>

</body>

</html>
