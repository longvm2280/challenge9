<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<a href="index.php">Home</a>
	<a href="index.php?file=upload">Upload</a>
	<a href="index.php?file=about">About</a>

	<?php
	$file = $_GET['file'] . '.php';
	include 'Page/' . $file;
	?>

</body>
</html>