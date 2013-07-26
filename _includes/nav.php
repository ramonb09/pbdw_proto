		<div id="headercenter" <?php if($home == true) {echo "class=\"on_img\"";} else if($section != "projects" && !$name || $section != "office" && !$name) {echo "class=\"on_solid\"";} else {echo "class=\"on_img\"";} ?>>
			<header id="masthead">
				<div class="wrapper">
					<?php
						$solid = NULL;
						if ($section == "projects" || $section == "office") {
							echo "<h1 class=\"name_on_white\"><a href=\"?\">PBDW</a></h1>";
							$solid = TRUE;
						} else {
							echo "<h1 class=\"name_on_img\"><a href=\"?\">PBDW</a></h1>";
							$solid = FALSE;
						}
					?>
					<nav <?php if ($solid == TRUE) { echo "class=\"on_white\""; } else { echo "class=\"on_img\"";} ?>>
					
						<div id="projects_nav" <?php if($section == "projects" && $solid == TRUE) { echo " class=\"current_section_solid\""; } else if($home = TRUE) { /* nothing */ } else { echo " class=\"current_section_img\""; } ?>>
							<ul class="mainnav">
								<li><a href="?s=projects&p=all">Projects</a></li>
							</ul>
							<ul data-page="projects" class="subnav<?php if ($section == "projects" && !$name) { echo " stay"; } ?>">
								<li><a data-link="all" <?php if ($page == "all") { echo "class=\"current\""; } ?>>All</a></li>
								<li><a data-link="cultural" <?php if ($page == "cultural") { echo "class=\"current\""; } ?>>Cultural</a></li>
								<li><a data-link="educational" <?php if ($page == "educational") { echo "class=\"current\""; } ?>>Educational</a></li>
								<li><a data-link="commercial" <?php if ($page == "commercial") { echo "class=\"current\""; } ?>>Commercial</a></li>
								<li><a data-link="residential" <?php if ($page == "residential") { echo "class=\"current\""; } ?>>Residential</a></li>
								<li><a data-link="preservation" <?php if ($page == "preservation") { echo "class=\"current\""; } ?>>Preservation</a></li>
							</ul>
						</div>
						
						<div id="office_nav" <?php if($section == "office" && $solid == TRUE) { echo " class=\"current_section_solid\""; } else if($home = TRUE) { /* nothing */ } else { echo " class=\"current_section_img\""; } ?>>
							<ul class="mainnav">
								<li><a href="?s=office&p=news">Office</a></li>
							</ul>
							<ul data-page="office" class="subnav <?php if ($section == "office" && !$name) { echo " stay"; } ?>">
								<li><a data-link="news" <?php if ($page == "news") { echo "class=\"current\""; } ?>>News</a></li>
								<li><a data-link="profile" <?php if ($page == "profile") { echo "class=\"current\""; } ?>>Profile</a></li>
								<li><a data-link="team" <?php if ($page == "team") { echo "class=\"current\""; } ?>>Team</a></li>
								<li><a data-link="awards" <?php if ($page == "awards") { echo "class=\"current\""; } ?>>Awards</a></li>
								<li><a data-link="publications" <?php if ($page == "publications") { echo "class=\"current\""; } ?>>Publications</a></li>
								
							</ul>
						</div>
						
						<div id="contact_nav" <?php if($solid == TRUE) { echo " class=\"top_solid\""; } else { echo " class=\"top_img\""; } ?>>
							<ul class="mainnav">
								<li><a>Contact</a></li>
							</ul>
							<ul id="contact_info">
								<li>20 West 22nd Street</li>
								<li>New York, NY 10010</li>
								<li>212 691-2440</li>
							</ul>
						</div>
						
					</nav>
				</div>
				
				<div class="wrapper" id="breadcrumbs">
					<h4><?php if($section && $page) {echo $section . " /"; ?> <span><?php echo $page; } ?></span></h4>
					
<!-- 					<div class="rule"></div> -->
				</div>
				
			</header>
		</div>
		<script>
		
		$(document).ready(function() {
			var body = $("body");
			
			$("a").click(function(){
				section = $(this).parents("ul").attr("data-page");
				
				page = $(this).attr("data-link");
				body.animate({opacity: 0}, 300, function(){
					window.location = "?s="+section+"&p="+page
				});
				
			});
			
		});

			
		</script>