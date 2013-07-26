<!doctype html>
<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
	
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<title>Platt Byard Dovell White</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="../../_css/main.css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="//use.typekit.net/zkl1frh.js"></script>
		<script type="text/javascript" src="../../_js/jquery.cycle.js"></script>
		<script type="text/javascript" src="../../_js/jquery.columnizer.min.js"></script>
		<script type="text/javascript" src="../../_js/masonry.pkgd.min.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<meta name="description" content="A grid system for responsive web design. Includes folding columns, elastic gutters, a zoomable baseline grid, and a delightful grid overlay script."/>
	</head>
	<body lang="en">
		<div id="headercenter" class="headergradient">
			<header id="masthead">
				<div class="wrapper">
					<?php $solid = false; include("../../_includes/logo.php") ?>
					<nav>
						<div class="on_img">
							<ul class="mainnav">
								<li><a href="../../work/index.php">Work</a></li>
								<li><a class="current">Office</a></li>
								<li><a>News</a></li>
								<li><a>Contact</a></li>
							</ul>
						</div>
						<div id="profile_cats" class="on_img">
							<ul class="subnav">
								<li><a class="current">Profile</a></li>
								<li><a href="../team/index.php">Team</a></li>
								<li><a>Awards</a></li>
								<li><a>Publications</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</header>
		</div>
		<section class="profile_page" id="cedarlake">
			<div class="slideshow">
				<div class="slideshow_imgs">
					<div style="background-image:url('../../_images/cedar.jpg');"></div>
				</div>
			</div>
			<br class="clear" />
			<div class="profile_info wrapper">
				<aside class="profile_title">
					<h2>Profile</h2>
				</aside>

				<article class="profile_description">
					<p>Platt Byard Dovell White Architects is a forty-person design firm led by Ray Dovell, Scott Duenow, James Seager, and Samuel White.</p>

					<p>The firm’s practice is grounded in innovative design for new buildings, a special reputation for the design of contemporary additions to historic buildings, and a long-standing reputation for the scrupulous restoration of major historic landmarks.</p>
					
				</article>
			</div>
		</section>
		<script>
		
/* 		$(".profile_description").columnize({columns:2}); */
		
		var slideshow = $(".slideshow");
		
		function slideshow_height(){
			height = ($(this).height()/3)*2;
			// height = $(this).height();
			slideshow.css("height", height+"px");
		}
		
		$(window).resize(function() {
			slideshow_height();
			
		});
		
		slideshow_height();
		
		$("#headercenter").animate({opacity:1}, 800);
	
		</script>
	</body>
	
</html>