<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="images/icon.png">

	<title>Equiplex Developers Community | Register </title>
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

<div id="cl-wrapper" class="sign-up-container">

	<div class="middle-sign-up">
	<div class="block-flat">
			<div class="header">							
				<h3 class="text-center">Equiplex Developers Community Register </h3>
			</div>
			<div>
				   <form class="form-horizontal" <?php echo form_open('users/register'); ?>
           		<div class="content">
			      <hr/>
              
            				<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" name="username" parsley-trigger="change" parsley-error-container="#nick-error" required placeholder="Username" class="form-control">
									</div>
                                    <?php echo form_error('username'); ?>
                                    
                                </div>
						    </div>
						    <div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" name="name" parsley-trigger="change" parsley-error-container="#name-error" required placeholder="Fullname" class="form-control">
									</div>
                 					<?php echo form_error('name');  ?>

								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<select name = "gender"  required placeholder="Gender" class="form-control">
										  <option> </option>
										  <option>Male</option>
										  <option>Female</option>
									</select>

									</div>
                                     <?php     echo form_error('gender');  ?>
                                         
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
										<input type="email" name="email" parsley-trigger="change" parsley-error-container="#email-error" required placeholder="E-mail" class="form-control">
									</div>
                                    <?php     echo form_error('email');  ?>
                                         
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-6 col-xs-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input id="pass1" type="password" parsley-error-container="#password-error" placeholder="Password"  name = "password" required class="form-control">
									</div>
                  					 <?php     echo form_error('password');  ?>
                                         
								</div>
								<div class="col-sm-6 col-xs-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input parsley-equalto="#pass1" type="password" parsley-error-container="#confirmation-error"required placeholder="Password" class="form-control">
									</div>
                 					 <?php     echo form_error('password');  ?>
                                         
								</div>
							</div>
             <p class="spacer">By creating an account, you agree with the  Equiplex Developers Community <a href="#">Terms and Conditions</a>.</p>
                    <div class="foot">
						<button class="btn btn-default" data-dismiss="modal" type="button" onclick="login ()">Login</button>
						<button class="btn btn-primary" data-dismiss="modal" type="submit">Register</button>
					</div>					
					</div>
			  </form>
			</div>
		</div>
		<div class="text-center out-links"><a href="<?php  echo base_url() ;?>">&copy; 2014 Equiplex Developers Community | Equiplex Business Solutions</a></div>
	</div> 
	
</div>

  <script type="text/javascript">
	function login(){
 	 window.location =('<?php echo base_url('index.php/users')?>') ;
	}
	
</script>
  <script src="js/jquery.html"></script>
  <script src="js/jquery.parsley/parsley.js" type="text/javascript"></script>
	<script type="text/javascript">
    $(function(){
      $("#cl-wrapper").css({opacity:1,'margin-left':0});
    });
  </script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('assets/dashboard/js/behaviour/voice-commands.html')?>"></script>
<script src="<?php echo base_url('assets/dashboard/js/bootstrap/dist/js/bootstrap.min.html')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/dashboard/js/jquery.flot/jquery.flot.html')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/dashboard/js/jquery.flot/jquery.flot.pie.html')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/dashboard/js/jquery.flot/jquery.flot.resize.html')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/dashboard/js/jquery.flot/jquery.flot.labels.html')?>"></script>
</body>

</html>
