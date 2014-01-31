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

<div id="about">
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
                        <li class="current">
                            <a href="<?php echo base_url("index.php/about");?>">About Us</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("index.php/products");?>">Products</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("index.php/support");?>">Support</a>
                        </li>
                    </ul>
	</nav>	
		<div class="container">
			<div class="sixteen columns">
				<h1>  About <span>Us</h1>
			</div>
		</div>	
		<div class="about-info">
		<div class="container">
			<div class="eight columns">
				<h6>WHO ARE WE?</h6>
				<p><a href ="index.html">Equiplex Developers Community </a> is a platform built and mantained by <a href ="equiplexdevelopers.com">Equiplex Business Solutions</a>.
				The main purpose of this platform is to allow developers to promote their products and their own portfolio sites. This platform also targets to have developers discuss on various issues.
			</div>
			<div class="eight columns">
				<h6>MORE ABOUT US?</h6>
				<p> We love design and we believe that effective software products can only be meet if effective user experience and design is incorprated in the product ,we therefore provide a designer meet developer platform where developers can identify designer to work with.Testing and documentation has always been a challenge in software development, this platform seeks to eliminate these challenges by allowing developers to contribute to the testing of each others applications.
				</p>
				
				

			</div>
		</div>	
		</div>
		<div class="container">
			<div class="sixteen columns">
				<h1>  Random <span>Facts</h1>
			</div>
		</div>	
		<div class="container">
			<div class="sixteen columns">
			
				<div class ="row">
					<!-- fact number one -->

						<div class="hexagon">
				<div class="outer">
					<div class="inner one">
						<div class="textWrapper">
							<div class="text"> Developed and Mantained by <a href="equiplexdevelopers.com"> Equiplex Business Solutions</a></div>
						</div>
					</div>
				</div>
			</div>
					<!-- fact number two-->			
			<div class="hexagon even">
				<div class="outer">
					<div class="inner two">
						<div class="textWrapper">
							<div class="text"> We are a <span>team </span>of six members ,small teams come up with great products</div>
						</div>
					</div>
				</div>
			</div>
					<!-- fact number three -->
			<div class="hexagon">
				<div class="outer">
					<div class="inner three">
						<div class="textWrapper">
							<div class="text">We believe that <a href="#"> together </a> as a community we can  do more..</div>
						</div>
					</div>
				</div>
			</div>
				<!--fact number four -->
			<div class="hexagon even">
				<div class="outer">
					<div class="inner four">
						<div class="textWrapper">
							<div class="text">We love <span>open source</span> </div>
						</div>
					</div>
				</div>
			</div>
				<!--fact number five -->
			<div class="hexagon">
				<div class="outer">
					<div class="inner five">
						<div class="textWrapper">
							<div class="text">We love <span>design</span>.</div>
						</div>
					</div>
				</div>
			</div>


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