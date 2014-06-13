<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<?php $this->load->helper('url')?>

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Equiplex Developers Community</title>
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
	<link rel="stylesheet" href="<?php echo base_url("assets/css/colorbox.css") ?>"/>
	
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
	<!-- Home
	================================================== -->	

	<div id="home">
		<div class="container"> 
		<div class="sixteen columns">
		<div class="logo-big">
			<div class="logo">
				<img src="<?php echo base_url("assets/images/community.png") ?>" height="80px" width="100px">
			</div>
			<div class="title">
				Equiplex Developers Community
			</div>
			<span>
				 Share With The Rest Of Us				
			</span>
		</div>
		</div>
		</div>
		
		<div class="container" style="top : 10%">
			<h1>WE ARE </h1>
			<div class="container">
			<div class="sixteen columns">
				<h1><span class="slide-text" style ="color:#0074D9;"></span></h1>
			</div>
			

		</div>
		</div>
	 
				
		<div class="home-menu1">
			<a href="<?php echo base_url("index.php/about")?>">
				<div class="home-menu-but1">
					<div class="home-menu-text1">About Us</div>
				</div>
				<div class="hi-icon-wrap1 hi-icon-effect-1">
					<div class="hi-icon1 hi-icon-bolt">About Us</div>
				</div>
			</a>
		</div>
		<div class="home-menu2">
			<a  href="<?php echo base_url("index.php/users")?>">
				<div class="home-menu-but2">
					<div class="home-menu-text2">Users</div>
				</div>
				<div class="hi-icon-wrap2 hi-icon-effect-2">
					<div class="hi-icon2 hi-icon-pen">Users</div>
				</div>
			</a>
		</div>
		<div class="home-menu3">
			<a href="<?php echo base_url("index.php/products")?>">
				<div class="home-menu-but3">
					<div class="home-menu-text3">Products</div>
				</div>
				<div class="hi-icon-wrap3 hi-icon-effect-3">
					<div class="hi-icon3 hi-icon-cog">Products</div>
				</div>
			</a>
		</div>
		<div class="home-menu4">
			<a href="<?php echo base_url("index.php/support")?>">
				<div class="home-menu-but4">
					<div class="home-menu-text4">Support</div>
				</div>
				<div class="hi-icon-wrap4 hi-icon-effect-4">
					<div class="hi-icon4 hi-icon-glo">Support</div>
				</div>
			</a>
		</div>
	



	</div>




	</div>
		

	<div class="md-overlay"></div>		
    
   


	
	

	
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