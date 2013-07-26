		<article class="wrapper" id="home_logo">
<!-- 			<h1>PLATT BYARD DOVELL WHITE <span>ARCHITECTS</span></h1> -->
				<h1><img src="_images/fullname.svg" width="1000" height="40" /></h1>
		</article>

		<div class="bgimg">
		
			
			<div class="img5"></div>
			<div class="img1"></div>
			<div class="img9"></div>
			<div class="img2"></div>
			<div class="img3"></div>
			<div class="img4"></div>
			
			<div class="img6"></div>
			<div class="img7"></div>
			<div class="img8"></div>
		</div>
				
		<script>
			$(document).ready(function() {
			
				var body = $("body");
				
				body.animate({opacity:1}, 500, function(){
					
				});
			// add dome after purple
			
				$('.img1').anystretch("_images/chanel_nj.jpg");
				$('.img2').anystretch("_images/cedar.jpg");
				$('.img3').anystretch("_images/learning.jpg");
				$('.img4').anystretch("_images/house.jpg");
				$('.img5').anystretch("_images/n42.jpg");
				$('.img6').anystretch("_images/701.jpg");
				$('.img7').anystretch("_images/armory.jpg");
				$('.img8').anystretch("_images/cedarentry.jpg");
				$('.img9').anystretch("_images/appellate.jpg");
				
				$('.bgimg').cycle({
					timeout: 4000,
					speed: 1000,
					fx: "fade",
					slideResize: false
				});
				
				var logo = $("#home_logo h1");
				
				function repos_logo(){
					height = Math.round($(window).height()/2)-30;
					logo.css("top",height+"px");
				}
				
				$(window).resize(function(){
					repos_logo();
				});
				
				repos_logo();
			});
		</script>