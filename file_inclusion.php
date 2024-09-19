<!DOCTYPE html>
<html lang="en">
<head
	<meta charset="UTF-8">
	<title>File Inclusion Vuln</title>
</head>
<body>
	<h1>File Inclusion Vulnerability Example</h1>
	<p>Select a paget to include:</p>
	<a href="file_inclusion.php?page=about.php">About me</a> |
	<a href="file_inclusion.php?page=contact.php">Contact me</a>


	<?php
	$file = realpath($page);

	if ($file && file_exists($file)) {
		include($file);
	} else {
		echo "File not found!";
		}
	?>
</body>
</html>
