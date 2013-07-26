	<?php
		if(isset($_GET['s'])){
			$section = $_GET['s'];
		} else {
			$section = NULL;
		}
		if(isset($_GET['p'])){
			$page = $_GET['p'];
		} else {
			$page = NULL;
		}
		if(isset($_GET['n'])){
			$name = $_GET['n'];
		} else {
			$name = FALSE;
		}
		if(!$section && !$page && !$name) {
			$home = TRUE;
		} else {
			$home = FALSE;
		}
	?>
	<?php include("_includes/header.php"); ?>
		<?php include("_includes/nav.php"); ?>
		
		
		<?php
			switch($section){
				case "projects":
					include("_includes/projects.php");
					break;
				case "office":
					include("_includes/office.php");
					break;
				case "project":
					include("_includes/project.php");
					break;
				default:
					include("_includes/home.php");
					break;
			}
		?>
		<script>
			$(document).ready(function() {
				$("#headercenter").animate({opacity:1}, 800);
			});
		</script>
	</body>
</html>