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
				
					<?php include("../_includes/logo.php") ?>
					
					<nav>
						<div class="on_img">
							<ul class="mainnav"> 
								<a>Office <i class="icon-angle-down"></i></a>
								<li><a href="../profile/index.html">Profile</a></li>
								<li><a href="../../work/index.html">Work</a></li>
								<li><a>News</a></li>
								<li><a>Contact</a></li>
							</ul>
						</div>
						<div id="work_cats" class="on_img">
							<ul class="subnav">
<!-- 								<li><a href="../profile/index.html" data-cat="all">Profile</a></li> -->
<!-- 								<li><a href="../team/index.html" class="current" data-cat="commercial">Team <i class="icon-angle-down"></i></a></li> -->
<!-- 								<li><a data-cat="culture">Awards</a></li> -->
<!-- 								<li><a data-cat="education">Publications</a></li> -->
							</ul>
						</div>
					</nav>
				</div>
			</header>
		</div>
		<section class="work_page" id="cedarlake">
			<div class="slideshow">
				<div class="slideshow_imgs">
					<div style="background-image:url('../../_images/team/office/james.jpg');"></div>
				</div>				
				<div class="slideshow_nav wrapper">
					<ul></ul>
				</div>
			</div>

			<br class="clear" />
			<div class="work_info wrapper">
				<aside class="work_title">
					<h2>James Seager</h2>
					<p>AIA, LEED AP</p>
					<p>Partner</p>
				</aside>

				<article class="work_description">
					<p>James has been involved with a wide range of projects from large-scale office towers to modest institutional buildings. He was the project manager for the Lower School Building at the Spence School, and the condominium apartment building at 110th Street and Broadway and is currently working on the Park Avenue Armory. Mr. Seger received a Bachelor of Architecture from Mississippi State University.</p>
					
				</article>
				
				<aside class="work_details">
					<h5>Projects</h5>
					<ul>
						<li>Park Avenue Armory</li>
						<li>Learning Spring School</li>
						<li>Knox Building Restoration</li>
						<li>260 West 44th Street</li>
					</ul>
				</aside>
			</div>
		</section>

		<script>
		
		var slideshow = $(".slideshow")
		
		function slideshow_height(){
			height = ($(this).height()/3)*2;

			slideshow.css("height", height+"px");
		}
		
		$(window).resize(function() {
			slideshow_height();
		});
		
		slideshow_height();

		$(window).load(function(){
			$(".slideshow_imgs, .work_info, #headercenter").animate({opacity:1}, 800);
		});

		</script>
	</body>
	
</html>