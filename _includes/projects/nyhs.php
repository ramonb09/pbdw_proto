		<section class="project_page" id="cedarlake">
			<div class="slideshow">
				<div class="slideshow_imgs">
					<div style="background-image:url(_images/nyhs.jpg);"></div>
					<div style="background-image:url(_images/nyhs_interior.jpg);"></div>
<!-- 					<img src="_images/nyhs_interior.jpg" alt="nyhs"> -->
<!-- 					<img src="_images/nyhs.jpg" alt="nyhs"> -->
				</div>				
			</div>
			
			<div id="breadcrumbs" class="wrapper">
				<h4><?php echo $page ?></h4>
				<div class="slideshow_nav">
					<ul></ul>
				</div>
			</div>
			<br class="clear" />
			
			<div class="project_info wrapper">
				<aside class="project_title">
					<h2>New-York Historical Society</h2>
				</aside>

				<article class="project_description">
					<p>Founded 200 years ago, the New-York Historical Society was conceived as a private club for antiquarians. That culture was embedded in the design of the building on Central Park West, a structure that impeded previous efforts to make the institution more welcoming and more accessible to the general public.</p>

					<p>As architects to the Society since 2005, Platt Byard Dovell White Architects completed a $60 million campaign of interior and exterior renovations to alter the appearance and accessibility of principal spaces throughout the museum. </p>
					
					<p>On the basis of a Master Plan developed early in the process, we reconfigured the following areas: Entrances and Façade: The building was made more visible, more inviting and more accessible by reconfiguring the entrances on Central Park West and 77th Street and adding doors, ramps, and generous front steps as well as enlarged windows, new signage, and colorful exterior lighting. Exterior changes to the designated landmark required approval of the New York Landmarks Preservation Commission</p>
					
					<p>Galleries: The ground floor, formerly a warren of cloakroom and gallery spaces, was transformed into a single gallery that puts the most popular elements of the collection next to the front door. We upgraded other galleries with new wall and ceiling finishes, new lighting, and climate control.</p>
					
					<p>Auditorium: Halfway through construction the Society asked PBDW to renovate the building’s neoclassical auditorium into a space that would support a variety of media productions and live performances. We added a balcony, increasing capacity by 100 to a total capacity of 418, with excellent sight lines from every seat. New finishes, new lighting and an 80’ wide screen make the auditorium the setting for a dazzling introductory video and the centerpiece of a robust slate of public programs.</p>
					
				</article>
				<aside class="project_details">
					<h5>Client</h5>
					<p>New-York Historical Society</p>
					<h5>Location</h5>
					<p>170 Central Park West, New York</p>
					<h5>Team</h5>
					<ol>
						<li>Vocent Oportere</li>
						<li>Pertinax Aliquando</li>
						<li>Veritus Recusabo</li>
						<li>Nobis Debitis</li>
						<li>Utinam Albucius</li>
					</ol>
					<h5>Date Completed</h5>
					<p>2010</p>
					<h5>DOWNLOAD PROJECT PDF</h5>
				</aside>
			</div>
		</section>

		<script>
		
			var slideshow = $(".slideshow");
			
			function slideshow_height(){
				height = ($(this).height()/6)*5;
				console.log(height);
				slideshow.css("height", height+"px");
			}
			
			function slideshow_width(){
				width = $(this).width();
				$("#slideshow_imgs > div").css("width", width+"px");
			}
			
			$(window).resize(function() {
				slideshow_height();
				slideshow_width();
			});
			
			slideshow_height();
			
			$('.slideshow_imgs').cycle({ 
			    fx:     'scrollLeft', 
			    speed:  'slow', 
			    timeout: 0, 
			    pager:  '.slideshow_nav ul',
			    pagerAnchorBuilder: function(idx, slide) { 
			        return '<li></li>'; 
			    },
			    next:   '.nav_next', 
			    prev:   '.nav_prev',
			    slideResize: false
			});
		
			$(".slideshow_imgs, .project_info, #headercenter").animate({opacity:1}, 800);
		
		</script>