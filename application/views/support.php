<!--support.php -->
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->

<head>

	<?php $this->load->helper('url') ;?>


	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Equiplex Developers Community : About Us</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">




 

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/base.css") ?>"/>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/skeleton.css") ?>"/>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/layout.css") ?>"/>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/colorbox.css") ?>"/
	
    <!--[if lte IE 8]>
           <script src="<?php echo base_url("assets/js/html5.js") ?>"></script>
   <![endif]-->		
		
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo base_url("assets/equiplexfav.ico") ?>">
</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

<div id="support">
	<nav id="navigation">
<div class="logo-big">
		
<div class="logo">
		<a href="<?php echo base_url("index.php/home"); ?>" >
		<img src="<?php echo base_url("assets/images/community.png") ?>" height="80px" width="100px">
	</a>
</div>
</div>
                    <ul   id="menu">
                        <li>
                            <a href="<?php echo base_url("index.php/home");?>" >Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("index.php/about");?>">About Us</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("index.php/products");?>">Products</a>
                        </li>
                        <li  class="current">
                            <a href="<?php echo base_url("index.php/support");?>">Support</a>
                        </li>
                    </ul>
	</nav>	


<div id="separator2">
		<div class="separator2-wrap">
			<div class="container">
				<div class="sixteen columns">
					<h3>We are here to help you build an amazing product .. </h2>
				</div>
			</div>
		</div>
	</div>		
	







	<div id="contact">	
		<div class="contact-info">
			<div class="container">
				
				<div class="one-half column">
					<h6>Phone:</h6>
					<p>Support: +254 702 990 800</p>
					<p>Director: +254 718 325 300</p>
				</div>
				<div class="one-half column">
					<h6>Email:</h6>
					<p>Support: <a href="mailto:support@equiplexdevelopers.com">support@equiplexdevelopers.com</a></p>
					<p>Director: <a href="mailto:sales@equiplexdevelopers.com">sales@equiplexdevelopers.com</a></p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="sixteen columns">
				<form  method="post">
				<h6>Say Hello</h6>
					<label for="name">Name: * 
						<span class="error" id="err-name">please enter name</span>
					</label>
					<input name="name" id="name" type="text" />
					<label for="email">E-Mail: * 
						<span class="error" id="err-email">please enter e-mail</span>
						<span class="error" id="err-emailvld">e-mail is not a valid format</span>
					</label>
					<input name="email" id="email" type="text" />
					<label for="message">Message:</label>
					<textarea name="message" id="message"></textarea>
					<button class="send_message" id="send">Submit</button>
					<div class="error" id="err-form">There was a problem validating the form please check!</div>
					<div class="error" id="err-timedout">The connection to the server timed out!</div>
					<div class="error" id="err-state"></div>
				</form>
				<div id="ajaxsuccess">Successfully sent!!</div>	
			</div>	
		</div>		
	</div>	


	
		<!-- Copy
	================================================== -->	 
	
	<div id="copy">
		<div class="container">
			<div class="sixteen columns">
				<p>© Equiplex Developers Community. All rights reserved. <a href = "equiplexdevelopers.com" >Equiplex Business Solutions</a>.</p>
			</div>
				
		</div>	
	</div>	
	<!-- JAVASCRIPT
    ================================================== -->
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/modernizr.custom.js") ?>"></script>
<script type="text/javascript">
$('.bar-percentage[data-percentage]').each(function () {
  var progress = $(this);
  var percentage = Math.ceil($(this).attr('data-percentage'));
  $({countNum: 0}).animate({countNum: percentage}, {
    duration: 4000,
    easing:'linear',
    step: function() {
      // What todo on every count
      var pct = Math.floor(this.countNum) + '%';
      progress.text(pct) && progress.siblings().children().css('width',pct);
    }
  });
});	
</script>  
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.nicescroll.min.js") ?>"></script>	
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.sticky.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.airport-1.1.source.js") ?>"></script>


<script type="text/javascript" src="<?php echo base_url("assets/js/classie.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/modalEffects.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/cssParser.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.masonry.min.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.isotope.min.js") ?>"></script> 
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.parallax-1.1.3.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.localscroll-1.2.7-min.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.scrollTo-1.4.2-min.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.colorbox.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/template.js") ?>"></script>  
	  
<!-- End Document
================================================== -->
</body>

</html>

