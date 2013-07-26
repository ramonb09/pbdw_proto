		<br class="clear" />
		
		<?php
		
		if($section == "office") {
			switch($page){
				case "profile":
					include("profile.php");
					break;
				case "team":
					include("team.php");
					break;
				case "awards":
					include("awards.php");
					break;
				case "publications":
					include("publications.php");
					break;
				default:
					include("profile.php");
					break;
			}
		}

		?>
		
		<script>
			

			$(window).load(function(){

				var wrapper = $("#team_grid");
				var items = $(".team_item");
				var body = $("body");

				function team_enter(){
					$(".team_item")
						.each(function(i){
							$(this).delay(i*50).animate({opacity:1}, 400 );
						});
				}

				$("#headercenter").animate({opacity:1}, 500);
				
				body.animate({opacity:1}, 500, function(){
					team_enter()
				});

				
				wrapper.masonry({
					columnWidth: 248+8
				});

			});
			
			team_enter();
			
			
			
		</script>