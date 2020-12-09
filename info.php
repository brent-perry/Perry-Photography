<?php
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
	<?php require "includes/head.php"; ?>
</head>

<body class="infobody">
	<header>
		<?php require "includes/header_nav.php"; ?>
		<div class="nav">
			<a href="index.php"><h1 class="infotitle">INFO</h1></a>
		</div>
	</header>
	<div class="info-master-content">
		<div class="info_about_content">
			<h2>ABOUT</h2>
				<p>My name is Brent Perry. I am a web developer currently taking the web design course at Pacific Design Academy. I currently have made two full websites and one text base dugeon crawl game using PHP.</p>
				<p>I also am a photography enthusiast and take pictures of anything and everything that catches my eye.</p>
		</div>
		<div class="info_contact_content">
			<h3>CONTACT</h3>
				<p> Brent Perry<br>
					Victoria, B.C<br>
					Canada<br>
					<br>
					Phone: 250-818-9113<br>
					Email: brentperry92@gmail.com<br>
					<br>
					Operating Hours:<br>
					24/7 <br>
				</p>
		</div>
	</div>
	<div>
		<?php require "includes/to_top_button.php"; ?>
	</div>
<div class="footer-container">
	<?php require "includes/footer.php"; ?>
	</div>
</body>


</html>
