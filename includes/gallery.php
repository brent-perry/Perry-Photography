<?php

function gallery($photos)
	{
	?>
	<div id="slider">
		<div class="slides-container">
			<?php require "gallery/".$photos."_photos.php"; ?>
		</div>
		<div class="arrows">
			<span class="prev">&#8610;</span>
			<span class="next">&#8611;</span>
		</div>
	</div>
	<?php
	}
	?>

