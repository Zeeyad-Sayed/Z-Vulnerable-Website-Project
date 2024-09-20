<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SSRF Vulnerability</title>
</head>
<body>
	<h1>SSRF Vulnerability Example</h1>

	<form method="POST" action="ssrf.php">
		<label for="url">Enter a URL to fetch:</label>
		<input type="text" id="url" name="url" placeholder="http://example.com">
		<button type="submit">Fetch</button>
	</form>

	<?php
	if (isset($_POST['url'])) {
		$url = $_POST['url'];

		// Vulnerable to SSRF (intentionally)
		echo "<h3>Response from $url:</h3>";
		$response = file_get_contents($url);
		echo "<pre>" . htmlspecialchars($response) . "</pre>";
	}
	?>

</body>
</html>
