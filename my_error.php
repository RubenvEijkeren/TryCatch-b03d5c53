<!DOCTYPE html>
<html>
<head>
	<title>try catch</title>
</head>
<body>
	<?php
	try {
		$a = 10/0;
	} catch (Exception $e) {
		echo "<h1> Er is iets fout gegaan!</h1>";
	}
	?>
</body>
</html>