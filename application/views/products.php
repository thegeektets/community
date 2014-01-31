<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->

<head>

	<?php $this->load->helper('url') ;?>


	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Equiplex Developers Community : Products</title>
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

	<div id='works'>
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
                        <li class="current">
                            <a href="<?php echo base_url("index.php/products");?>">Products</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("index.php/support");?>">Support</a>
                        </li>
                    </ul>
	</nav>	
		<div class="container">
			<div class="sixteen columns">
				<h1>Products from the community members, <span class="slide-text1"></span></h1>
			</div>
		</div>
		<div class="container">
			<div class="sixteen columns text-works">
				<p>Nullam consectetur est quis mauris accumsan eleifend sit amet non neq. Vivamus vitae purus eros, nec ullamcorper risus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur est quis mauris accumsan eleifend sit amet non neq. Vivamus vitae purus eros, nec ullamcorper risus.</p>
			</div>
		</div>	
		<div class="fil">	
			<div class="container">
				<div class="sixteen columns">
					<div id="portfolio-filter">
						<ul id="filter">
							<li><a href="#" class="current color5" data-filter="*" title="Show all items">Show all</a></li>
							<li><a href="#" class="color1" data-filter=".photography" title="Show all items under Photography">Mobile Apps</a></li>
							<li><a href="#" class="color2" data-filter=".illustration" title="Show all items under Illustration">Desktop Apps</a></li>
							<li><a href="#" class="color3" data-filter=".motion-graphics" title="Show all items under Motion Graphics">Web Apps</a></li>
							<li><a href="#" class="color4" data-filter=".web-design" title="Show all items under Web Design">UI Designs</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<div class="container">
			<div class="sixteen columns">
	
		<div class="portfolio-isotope">
		<div id="container1" class="clearfix">
			
			 <?php
 $i=0;
 While($i < count($portfolio)){
 // var_dump($portfoliopics);
  ?>

  <div class="box photography web-design">
 	<a href="products/reviewproduct/<?php echo $portfolio[$i]["product_id"]?>" >
		<img src="<?php echo $portfolio[$i]["product_pic"] ;?>" alt=""/>
          <div class="mask"></div>
			<h4><?php echo $portfolio[$i]["product_name"] ;?></h4>
			<p>Developer :<a href="<?php echo base_url("index.php/users/profile/".$portfolio[$i]["username"] );?>"><?php echo $portfolio[$i]["full_names"] ;?></a><br/>
            </p>
	</a>
	</div>

                   
  <?php
$i++;
  }
?>                       
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
	