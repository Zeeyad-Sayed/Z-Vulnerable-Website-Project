<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OS Command Injection</title>
</head>
<body>
	<h1>OS Command Injection Vulnerability</h1>

	<form method="POST" action="os_injection.php">
		<label for="ip">Enter IP to Ping:</label>
		<input type="text" id="ip" name="ip" placeholder="127.0.0.1">
		<button type="submit">Submit</button>
	</form>

	<?php
	if (isset($_POST['ip'])) {
		$ip = $_POST['ip'];

		// Vulnerable to OS Command Injection (intentionally)
		echo "<pre>";
		system("ping -c 4 " . $ip);
		echo "</pre>";
	}
	?>

</body>
</html>
