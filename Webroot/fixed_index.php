<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<a href="fixed_index.php">Home</a>
	<a href="fixed_index.php?file=upload">Upload</a>
	<a href="fixed_index.php?file=about">About</a>

	<?php
	$white_list = array('upload', 'about');
	$file_name = $_GET['file'];
	$include_ok = 0;
	for ($i=0;$i < count($white_list);$i++) {
		if (strcmp($file_name, $white_list[$i]) == 0) {
			$include_ok = 1;
		}
	}
	if ($include_ok == 1) {
		$file = $file_name . '.php';
		include 'Page/' . $file;
	}
	?>

</body>
</html>