<header>
	<?php require "includes/header_nav.php"; ?>
	<div class="nav">
		<a href="index.php"><h1 class="gallerytitle">VANCOUVER ISLAND</h1></a>
	</div>
</header>
	<div class="container">
		<?php 
		require "includes/gallery.php"; 
		gallery("v-island");
		?>
	</div>
	<div>
		<?php require "includes/to_top_button.php"; ?>
	</div>
	<div class="footer-container">
		<?php require "includes/footer.php"; ?>
	</div>