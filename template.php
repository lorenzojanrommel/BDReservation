<!DOCTYPE html>
<html>
<head>
	<title><?php display_title(); ?> </title>
	<?php require "partials/head.php" ?>
</head>
<body>
	<?php 
		require "partials/nav.php";
		display_content();
		require "partials/mdbjs.php";
		require "partials/footer.php";
	?>

</body>
</html>