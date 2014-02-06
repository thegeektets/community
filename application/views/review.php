<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->

<?php $this->load->helper('url');  error_reporting(0); ?>
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title style = "text-transform: uppercase;"><?php echo $title.":".$portfolio[0]["product_name"] ?>|Equiplex Developers Community</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/base.css")?>"/>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/skeleton.css")?>"/>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/layout.css")?>"/>
	
    <!--[if lte IE 8]>
        <script src="js/html5.js"></script>
    <![endif]-->		
		
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo base_url("assets/equiplexfav.ico")?>">
	
</head>
<body>


	<!-- Primary Page Layout
	================================================== -->
	
	<div class="singleproject-top">	
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
                        <li>
                            <a href="<?php echo base_url("index.php/support");?>">Support</a>
                        </li>
                    </ul>
	</nav>		
		<div class="container"  style="margin-top : 50px;">
			<div class="ten columns">
				<img src="<?php echo $portfolio[0]["product_pic"]?>" alt=""/>
			</div>
			<div class="six columns">
			<h4 style="text-transform:uppercase; color :white;"><strong><?php echo $portfolio[0]["product_name"] ;?></strong></h4>	

				<p><strong>Date:</strong> <?php echo $portfolio[0]["date_time"] ;?> </p>
				<p><strong>Category:</strong>  <?php echo $portfolio[0]["category"] ;?> </p>
				<div class="btn-wrap">
					<p>
						<button>Live Preview</button>
					</p>
				</div>
			
			</div>
			<div class="sixteen columns"> 
						<h5 style ="color:white">Other projects by this developer</h5>
						<div class = "others">
						<ul>
			
						<?php
 						$i=0;
 						While($i < count($others)){
						?>
				<li>
				<a href="<?php echo base_url("/index.php/products/reviewproduct/".$others[$i]['product_id'])?>">
 						<img src="<?php echo $others[$i]['product_pic'] ?>">
 					<!--caption>
 						<?php echo $others[$i]['product_name'] ?>
 						</caption>
 					-->

 						    					</a>

				</li>
						<?php
 						$i++;

						}
 						?>
 						</ul>
 						</div>
			</div>

		</div>	
	</div>	
	
	<div id="singleproject">
		<div class="container">
			<div class="twelve columns">
				<div id="slider">	
					<ul class="bxslider">
							<?php
 $i=0;
 While($i < count($portfolio)){
?>
		<li><img src="<?php echo $portfolio[$i]["product_pic"]?>"/></li>
<?php
 $i++;

}
 ?>
 
							</ul>
				</div>
			</div>
			<div class="four columns">
				  <h6>Developer Details</h6>
            <hr/>
					<img alt="200*180" data-src="holder.js/200x180" style="width: 200px; height: 180px;" 
					src="<?php echo $developer[0]["avatar"] ;?>">
				<table>
				<tr><td>Username:</td><td><a href="<?php echo base_url("/index.php/users/profile/".$developer[0]["username"])?>"><?php echo $developer[0]["username"] ;?></td></tr>
				<tr><td>Fullname:</td><td><?php echo $developer[0]["full_names"] ;?></td></tr>
				<tr><td>Country:</td><td><?php echo $developer[0]["country"] ;?></td></tr>
                <tr><td>Company:</td><td><?php echo $developer[0]["company"] ;?></td></tr>


					</table>

		<div class="social-dev">
			<ul class="list-social">
				<li class="icon-soc"><a href="<?php echo $developer[0]["twitter"] ;?>">&#xf099;</a></li>
				<li class="icon-soc"><a href="<?php echo $developer[0]["facebook"] ;?>">&#xf09a;</a></li>
				<li class="icon-soc"><a href="<?php echo $developer[0]["google"] ;?>">&#xf09b;</a></li>
				<li class="icon-soc"><a href="<?php echo $developer[0]["google"] ;?>">&#xf0d5;</a></li>
				
			</ul>	
		</div>


			
			</div>
			<div class="singleproject1-body">	
				<div class="sixteen columns">
					<h4><strong>Project</strong> <span style = "color:#0074D9;">Description</span></h4>
					<p><?php echo $portfolio[0]["product_desc"] ;?></p>
				</div>
			</div>
		</div>	
	</div>		
	






	

	<!-- JAVASCRIPT
    ================================================== -->
  
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/modernizr.custom.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.nicescroll.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.bxslider.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/singleproject1.js")?>"></script>


<!-- End Document
================================================== -->
</body>

</html>	