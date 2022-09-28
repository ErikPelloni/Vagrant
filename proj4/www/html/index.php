<!DOCTYPE html>
<html>

<head>
	<title>Prova</title>
	
	<meta charset="UTF-8">
 	<meta name="author" content="Erik Pelloni">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h1>PHP Test Connection</h1>
	<?php
		ini_set('display_errors',1);
		ini_set('display_setup_errors',1);
		error_reporting(E_ALL);
		
		$servername = "10.10.20.15";
		$username = "vagrant";
		$password = "vagrantpass";
		$dbname = "vagrant";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected to " . $servername . "<br>";
		

	?>

</body>
</html>