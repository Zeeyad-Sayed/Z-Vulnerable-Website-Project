<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>XSS Vulnerable page</title>
</head>
<body>
	<h1>XSS Vulnerability Example</h1>

	<form method="POST" action="xss.php">
		<label for="name">Enter you name:</label>
		<input type="text" id="name" name="name">
		<button type="submit">Submit</button>
	</form>

	<?php
	// Error reporting (optional, for debugging)
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	// Processing the form data
	if (isset($_POST['name'])) {
		$name = $_POST['name'];

		// Vulnerable to XSS (intentionally)
		echo "<p>Hello, " . $name . "</p>";
	}
	?>

</body>
</html>
