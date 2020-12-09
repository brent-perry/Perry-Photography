<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$page = 'home';

if (!empty($_GET['page']))
$page = $_GET['page'];

$body_class = 'gallerybody';

if ($page === 'home')
$body_class = 'mainbody';

?>
<!DOCTYPE html>
<html>
<head>
	<?php require "includes/head.php"; ?>
</head>

<body>
	<div class="nav-container">
		<?php require "includes/header_nav.php"; ?>
	</div>
	<div class="main">
		
</body>
</html>
