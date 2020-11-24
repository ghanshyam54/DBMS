<?php
	include("dbconn.php");
?>


<!doctype html>
<html>
<style>
	body {
		font-size: 20px;
	}
	h1 {
		font-family: 'Cinzel',serif;
	}
</style>
<head>
	<link rel="stylesheet" href="../style.css">
<title>Room Status Information</title>
</head>
<body>

<?php
	$sql = "select * from room_status;";
	$result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

	echo"<h1 text align = 'center'>Room Status Information</h1>";
	echo"<table align = 'center' cellpadding = 10px border='4'>";
	echo"<tr bgcolor = 'yellow'><th>Room Id</th><th>Status</th><th>Type</th></tr>\n";
	while ($row = mysqli_fetch_assoc($result)) {
		echo"<tr bgcolor = 'lightgreen'><td>{$row['room_id']}</td><td>{$row['status']}</td><td>{$row['type']}</td></tr>\n";
	}
	echo"</table>";
	
?>

</body>
</html>