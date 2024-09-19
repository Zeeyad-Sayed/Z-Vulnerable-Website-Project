<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF_8">
	<title>Vulnerable XSS page</title>
</head>
<body>
	<h1>XSS Vulnerability Example</h1>
	<from method="GET" action="xss.php>
		<lable for="name">Enter you name:</lable>
		<input type="text" id="name" name="name">
		<input type="submit" value="Submit">
	</form>

	<?php
	if (isset($_GET['name'])) {
		$name = $_GET['name'];
		echo "<p>Hello, " . $name ."</p>";
	}
	?>
</body>
</html>
