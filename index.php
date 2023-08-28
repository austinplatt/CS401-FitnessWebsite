<!DOCTYPE html>
<html>
<head>
	<title>PlatinumPlatt Fitness</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="images/favicon.ico">
</head>

<body>

	<div class="header">
			<?php include 'header.php'; ?>
	</div>

	<div class="navigation">
		<?php include('nav.php'); ?>
	</div>

	
	<div class="mainBody">
		
		
			<h2 class="section-title">PlatinumPlatt Fitness</h2>


			<?php
			if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
				echo "Welcome, " . $_SESSION['email'] . "!";
			}
			?>

			<p class="section-description">This website is designed to help you achieve your fitness goals. We offer a variety of workout programs, meal plans, and fitness tips to help you get in the best shape of your life.</p>

			

			<button id="getStartedBtn" class="button">GET STARTED</button>

			<script>
			document.getElementById("getStartedBtn").addEventListener("click", function() {
				<?php
				
				if (isset($_SESSION['authenticated'])) {
					echo 'window.location.href = "workouts.php";';
				} else {
					echo 'window.location.href = "signin.php";';
				}
				?>
			});
			</script>

		
	</div>
	

	<div class="footer">
                <?php include("footer.php"); ?>
	</div>

</body>

</html>
