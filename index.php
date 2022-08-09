<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "khc-athletics-system";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}

	$houses = array();

	$sql = "SELECT id, house_name, house_colour, house_points FROM houses";
	$result = $conn->query($sql);
	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$newHouse = array(
				"name" => $row["house_name"],
				"colour" => $row["house_colour"],
				"points" => $row["house_points"]
			);
			array_push($houses, $newHouse);
		}
	}
$conn->close();
?>


<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="css/house_points.css">
<meta charset="utf-8" />
<meta http-equiv="refresh" content="60"/>
</head>
<body>
	<div class="grid-container" style="color:white;">
		<div class="grid-item" style="background-color:<?= $houses[0]["colour"] ?>">
			<h1><?= $houses[0]["name"] ?></h1>			
			<h2><?= $houses[0]["points"]; ?></h2>
		</div>
		<div class="grid-item" style="background-color:<?= $houses[1]["colour"] ?>">
			<h1><?= $houses[1]["name"] ?></h1>			
			<h2><?= $houses[1]["points"] ?></h2>
		</div>
		<div class="grid-item" style="background-color:<?= $houses[2]["colour"] ?>">
			<h1><?= $houses[2]["name"] ?></h1>			
			<h2><?= $houses[2]["points"] ?></h2>
		</div>
		<div class="grid-item" style="background-color:<?= $houses[3]["colour"] ?>">
			<h1><?= $houses[3]["name"] ?></h1>			
			<h2><?= $houses[3]["points"] ?></h2>
		</div>
	</div>
</body>
</html>
