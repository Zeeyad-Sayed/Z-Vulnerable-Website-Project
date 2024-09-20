<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF_8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>XSS Vulnerable page</title>
</head>
<body>
	<h1>XSS Vulnerability Example</h1>
	<from method="GET" action="xss.php>
		<lable for="name">Enter you name:</lable>
		<input type="text" id="name" name="name">
		<button type="submit">Submit</button>
	</form>

	<?php
	if (isset($_GET['name'])) {
		$name = $_GET['name'];
		echo "<p>Hello, " . $name ."</p>";
	}
	?>
</body>
</html>
